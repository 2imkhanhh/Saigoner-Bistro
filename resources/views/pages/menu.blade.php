@extends('layouts.app')

@section('title', 'Menu — Saigoner Bistro')

@section('content')
    <!-- Cover Hero -->
    <section class="sb-page-hero">
        <img src="{{ asset('images/gallery/bistro-cover.jpg') }}" alt="Saigoner Bistro Menu" class="sb-page-hero-bg">
        <div class="sb-page-hero-overlay"></div>
        <div class="container sb-page-hero-content">
            <div class="row align-items-center g-4">
                <div class="col-lg-7 reveal-up">
                    <span class="sb-eyebrow mb-3" style="background-color: rgba(181,32,37,0.32); border-color: rgba(184,137,64,0.45); color: #ffdda6;">
                        Tapas · Hovedretter · Cocktails
                    </span>
                    <h1 class="mb-3">Saigoner Bistro Menu</h1>
                    <p class="lead mb-0" style="color: rgba(255, 235, 204, 0.9);">
                        Udforsk vores lækre menukort hvor du kan sammensætte små retter fra Tapas collection og tilføje små hovedretter til dine 3, 5 eller 7 tapasretter.
                    </p>
                </div>
                <div class="col-lg-5 text-lg-end reveal-up">
                    <div class="d-inline-flex flex-wrap gap-3">
                        <a href="https://book.easytablebooking.com/book/?id=5095f&lang=auto"
                           target="_blank" rel="noopener noreferrer" class="btn btn-sb-coral btn-lg">
                            <i class="bi bi-calendar2-check me-2"></i>Book Bord
                        </a>
                        <a href="{{ route('takeaway') }}" class="btn btn-sb-outline-light btn-lg">
                            Bestil Take Away
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu Cards Showcase -->
    <section class="sb-section sb-pattern-tile">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-4 gap-3 reveal-up">
                <div>
                    <span class="sb-eyebrow mb-2">Menukort</span>
                    <h2 class="display-6 mb-1 font-display">Klik på siderne for at zoome ind</h2>
                    <p class="mb-0 small" style="color: var(--sb-ink-muted);">Brug piletasterne i fuldskærmsvisningen for at bladre mellem siderne.</p>
                </div>
                <a href="https://book.easytablebooking.com/book/?id=5095f&lang=auto"
                   target="_blank" rel="noopener noreferrer" class="btn btn-sb-primary align-self-start align-self-md-auto">
                    Book Bord nu
                </a>
            </div>

            <div class="row g-4">
                @for($i = 1; $i <= 6; $i++)
                    <div class="col-md-6 reveal-up">
                        <div class="sb-menu-sheet"
                             data-lightbox-src="{{ asset("images/menu/menu-page-{$i}.png") }}"
                             data-lightbox-caption="Saigoner Bistro Menukort — Side {{ $i }} af 6">
                            <span class="sb-menu-sheet-tag">
                                <i class="bi bi-zoom-in me-1"></i> Side {{ $i }} / 6
                            </span>
                            <img src="{{ asset("images/menu/menu-page-{$i}.png") }}"
                                 alt="Saigoner Bistro Menukort side {{ $i }}" loading="lazy">
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    <!-- Culinary Gallery -->
    <section class="sb-section sb-section-alt border-top" style="border-color: var(--sb-gold-soft) !important;">
        <div class="container">
            <div class="text-center mx-auto mb-5 reveal-up" style="max-width: 640px;">
                <span class="sb-eyebrow mb-2">Fra køkkenet</span>
                <h2 class="display-6 mb-2 font-display">Et indblik i vores retter &amp; stemning</h2>
                <p class="mb-0" style="color: var(--sb-ink-muted);">Friske krydderurter, håndrullede klassikere og signaturcocktails skabt til at deles.</p>
            </div>

            @php
                $menuGallery = [
                    ['file' => 'dish-09.jpg', 'caption' => 'Vietnamesiske tapasretter'],
                    ['file' => 'dish-10.jpg', 'caption' => 'Aftenstemning ved bordet'],
                    ['file' => 'dish-11.jpg', 'caption' => 'Deling af små retter'],
                    ['file' => 'bistro-wide.jpg', 'caption' => 'Indretning & bistroatmosfære'],
                    ['file' => 'dish-12.jpg', 'caption' => 'Autentisk smag fra Saigon'],
                    ['file' => 'dish-13.jpg', 'caption' => 'Cocktails og gastronomi'],
                ];
            @endphp

            <div class="row g-4">
                @foreach($menuGallery as $item)
                    <div class="col-sm-6 col-lg-4 reveal-up">
                        <div class="sb-photo-tile" style="aspect-ratio: 4/4;"
                             data-lightbox-src="{{ asset('images/gallery/' . $item['file']) }}"
                             data-lightbox-caption="{{ $item['caption'] }}">
                            <img src="{{ asset('images/gallery/' . $item['file']) }}" alt="{{ $item['caption'] }}" loading="lazy">
                            <div class="sb-photo-tile-overlay">
                                <span class="small fw-medium">{{ $item['caption'] }}</span>
                                <i class="bi bi-arrows-fullscreen"></i>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
