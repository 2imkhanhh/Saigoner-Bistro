<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Foundation\Inspiring;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('app:export-static', function () {
    $outputDir = base_path('docs');
    $baseUrl = 'http://static.local';

    File::deleteDirectory($outputDir);
    File::ensureDirectoryExists($outputDir);

    foreach (['css', 'js', 'images', 'fonts'] as $dir) {
        $src = public_path($dir);
        if (File::isDirectory($src)) {
            File::copyDirectory($src, $outputDir . DIRECTORY_SEPARATOR . $dir);
        }
    }

    // Rewrite root-relative font URLs in CSS to work on GitHub Pages subpaths
    $cssPath = $outputDir . DIRECTORY_SEPARATOR . 'css' . DIRECTORY_SEPARATOR . 'saigoner.css';
    if (File::exists($cssPath)) {
        $css = File::get($cssPath);
        $css = str_replace("url('/fonts/", "url('../fonts/", $css);
        File::put($cssPath, $css);
    }

    File::put($outputDir . DIRECTORY_SEPARATOR . '.nojekyll', '');

    $pages = [
        '/' => ['file' => 'index.html', 'prefix' => ''],
        '/menu' => ['file' => 'menu/index.html', 'prefix' => '../'],
        '/take-away' => ['file' => 'take-away/index.html', 'prefix' => '../'],
        '/kontakt' => ['file' => 'kontakt/index.html', 'prefix' => '../'],
    ];

    $kernel = app(Kernel::class);

    foreach ($pages as $uri => $meta) {
        $request = Request::create($baseUrl . $uri, 'GET');
        $response = $kernel->handle($request);

        if ($response->getStatusCode() !== 200) {
            $this->error("Failed rendering {$uri}: HTTP {$response->getStatusCode()}");
            return 1;
        }

        $html = $response->getContent();
        $prefix = $meta['prefix'];

        $replacements = [
            $baseUrl . '/images/' => $prefix . 'images/',
            $baseUrl . '/css/' => $prefix . 'css/',
            $baseUrl . '/js/' => $prefix . 'js/',
            $baseUrl . '/fonts/' => $prefix . 'fonts/',
            '"' . $baseUrl . '/menu"' => '"' . $prefix . 'menu/index.html"',
            '"' . $baseUrl . '/take-away"' => '"' . $prefix . 'take-away/index.html"',
            '"' . $baseUrl . '/kontakt"' => '"' . $prefix . 'kontakt/index.html"',
            '"' . $baseUrl . '/"' => '"' . $prefix . 'index.html"',
            '"' . $baseUrl . '"' => '"' . $prefix . 'index.html"',
        ];

        $html = str_replace(array_keys($replacements), array_values($replacements), $html);

        $targetFile = $outputDir . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $meta['file']);
        File::ensureDirectoryExists(dirname($targetFile));
        File::put($targetFile, $html);

        $kernel->terminate($request, $response);
        $this->info("Exported {$uri} -> docs/{$meta['file']}");
    }

    $this->info('Static export complete in: ' . $outputDir);
    return 0;
})->purpose('Export Blade pages and assets to static HTML files in docs/ for GitHub Pages');
