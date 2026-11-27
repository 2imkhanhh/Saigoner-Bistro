@extends('layouts.app')

@section('title', 'Take Away — Saigoner Bistro')

@section('content')
    <!-- Cover Hero -->
    <section class="sb-page-hero" style="min-height: 58vh;">
        <img src="{{ asset('images/gallery/bistro-wide.jpg') }}" alt="Saigoner Bistro Take Away" class="sb-page-hero-bg">
        <div class="sb-page-hero-overlay"></div>
        <div class="container sb-page-hero-content text-center">
            <div class="mx-auto reveal-up" style="max-width: 720px;">
                <span class="sb-eyebrow mb-3" style="background-color: rgba(181,32,37,0.32); border-color: rgba(184,137,64,0.45); color: #ffdda6;">
                    Bestil · Afhent · Enjoy
                </span>
                <h1 class="mb-3">Velkommen til vores Take Away</h1>
                <p class="lead mb-4" style="color: rgba(255, 235, 204, 0.9);">
                    Nyd Saigons autentiske smage hjemme i stuen. Bestil nemt online og afhent frisklavet mad direkte fra vores køkken på Øster Farimagsgade 12.
                </p>
                <a href="https://ws.ditbetalingssystem.dk/takeaway/order/1700002963a49da13542e0726b7bb758,c4ca4238a0b923820dcc509a6f75849b"
                   target="_blank" rel="noopener noreferrer" class="btn btn-sb-coral btn-lg px-5">
                    <i class="bi bi-bag-check me-2"></i>Bestil nu
                </a>
            </div>
        </div>
    </section>

    <!-- 3 Easy Steps -->
    <section class="sb-section sb-pattern-tile">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4 reveal-up">
                    <div class="sb-card p-4 h-100 text-center">
                        <div class="rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                             style="width: 62px; height: 62px; background-color: var(--sb-primary-soft); border: 1px solid var(--sb-border-crimson); color: var(--sb-primary);">
                            <i class="bi bi-phone fs-3"></i>
                        </div>
                        <h4 class="mb-2">1. Bestil online</h4>
                        <p class="mb-0 small" style="color: var(--sb-ink-muted);">
                            Vælg dine foretrukne tapasretter og hovedretter via vores online bestillingssystem.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 reveal-up">
                    <div class="sb-card p-4 h-100 text-center">
                        <div class="rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                             style="width: 62px; height: 62px; background-color: var(--sb-primary-soft); border: 1px solid var(--sb-border-crimson); color: var(--sb-primary);">
                            <i class="bi bi-shop fs-3"></i>
                        </div>
                        <h4 class="mb-2">2. Afhent i København Ø</h4>
                        <p class="mb-0 small" style="color: var(--sb-ink-muted);">
                            Hent din ordre varm og frisklavet på Øster Farimagsgade 12 ved Kartoffelrækkerne.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 reveal-up">
                    <div class="sb-card p-4 h-100 text-center">
                        <div class="rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                             style="width: 62px; height: 62px; background-color: var(--sb-primary-soft); border: 1px solid var(--sb-border-crimson); color: var(--sb-primary);">
                            <i class="bi bi-heart fs-3"></i>
                        </div>
                        <h4 class="mb-2">3. Enjoy</h4>
                        <p class="mb-0 small" style="color: var(--sb-ink-muted);">
                            Del en farverig vietnamesisk smagsoplevelse derhjemme med familie og venner.
                        </p>
                    </div>
                </div>
            </div>

            <div class="sb-menu-frame mt-5 reveal-up">
                <span class="sb-corner sb-corner--tl"></span>
                <span class="sb-corner sb-corner--tr"></span>
                <span class="sb-corner sb-corner--bl"></span>
                <span class="sb-corner sb-corner--br"></span>

                <div class="row align-items-center g-4">
                    <div class="col-lg-8">
                        <h3 class="mb-2 font-display">Klar til at bestille?</h3>
                        <p class="mb-0" style="color: var(--sb-ink-muted);">
                            Du kan også se hele menukortet inden du bestiller, eller ringe til os på <strong>+45 4114 2100</strong> hvis du har spørgsmål til allergener eller større selskaber.
                        </p>
                    </div>
                    <div class="col-lg-4 text-lg-end d-flex flex-wrap justify-content-lg-end gap-2">
                        <a href="{{ route('menu') }}" class="btn btn-sb-outline">Se menukort</a>
                        <a href="https://ws.ditbetalingssystem.dk/takeaway/order/1700002963a49da13542e0726b7bb758,c4ca4238a0b923820dcc509a6f75849b"
                           target="_blank" rel="noopener noreferrer" class="btn btn-sb-coral">Bestil nu</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
