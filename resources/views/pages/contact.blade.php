@extends('layouts.app')

@section('title', 'Kontakt — Saigoner Bistro')

@section('content')
    <!-- Cover Hero -->
    <section class="sb-page-hero">
        <img src="{{ asset('images/gallery/bistro-cover.jpg') }}" alt="Book dit bord hos Saigoner Bistro" class="sb-page-hero-bg">
        <div class="sb-page-hero-overlay"></div>
        <div class="container sb-page-hero-content text-center">
            <div class="mx-auto reveal-up" style="max-width: 720px;">
                <span class="sb-eyebrow mb-3" style="background-color: rgba(181,32,37,0.32); border-color: rgba(184,137,64,0.45); color: #ffdda6;">
                    Øster Farimagsgade 12 · København Ø
                </span>
                <h1 class="mb-3">Book dit bord i dag</h1>
                <p class="lead mb-4" style="color: rgba(255, 235, 204, 0.9);">
                    … og lad dine smagsløg rejse til Saigon for en enkel aften i dejligt selskab, hyggelig atmosfære og smilende betjening.
                </p>
                <a href="https://live.tebi.co/ecom/reservations/662376_9d857a9c17abefe701308232e953c8c048909cb44379c7cc7f8ed5cdf0fb355d"
                   target="_blank" rel="noopener noreferrer" class="btn btn-sb-coral btn-lg px-5">
                    <i class="bi bi-calendar2-check me-2"></i>Book bord
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Details, Portrait & Opening Hours -->
    <section class="sb-section sb-pattern-tile">
        <div class="container">
            <div class="row g-4 align-items-stretch">
                <div class="col-lg-4 reveal-up">
                    <div class="sb-card p-4 h-100 d-flex flex-column justify-content-between">
                        <div>
                            <span class="sb-eyebrow mb-3">Find os her</span>
                            <h3 class="mb-3">Kontaktinformation</h3>
                            <ul class="list-unstyled d-grid gap-3 mb-4">
                                <li class="d-flex gap-3 align-items-start">
                                    <i class="bi bi-geo-alt-fill fs-5 sb-text-crimson"></i>
                                    <div>
                                        <div class="fw-semibold">Øster Farimagsgade 12</div>
                                        <div class="small" style="color: var(--sb-ink-muted);">2100 – København Ø</div>
                                    </div>
                                </li>
                                <li class="d-flex gap-3 align-items-center">
                                    <i class="bi bi-telephone-fill fs-5 sb-text-crimson"></i>
                                    <a href="tel:+4541142100" class="fw-semibold text-decoration-none">+45 4114 2100</a>
                                </li>
                                <li class="d-flex gap-3 align-items-center">
                                    <i class="bi bi-envelope-fill fs-5 sb-text-crimson"></i>
                                    <a href="mailto:contact@saigonerbistro.dk" class="fw-semibold text-decoration-none">contact@saigonerbistro.dk</a>
                                </li>
                            </ul>
                        </div>

                        <a href="https://www.google.com/maps/place/Sàigòner+Bistro/@55.6900826,12.5726586,17z/data=!3m1!4b1!4m16!1m9!4m8!1m0!1m6!1m2!1s0x4652537654a91f49:0x5698a485f201ae26!2sØster+Farimagsgade+12,+2100+København!2m2!1d12.5752335!2d55.6900826!3m5!1s0x4652537654a91f49:0x5698a485f201ae26!8m2!3d55.6900826!4d12.5752335!16s%2Fg%2F11lcq1kf8p?entry=ttu"
                           target="_blank" rel="noopener noreferrer" class="btn btn-sb-primary w-100">
                            <i class="bi bi-map me-2"></i>Åbn i Google Maps
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 reveal-up">
                    <div class="sb-photo-tile h-100" style="min-height: 320px;"
                         data-lightbox-src="{{ asset('images/gallery/bao-portrait-1.jpg') }}"
                         data-lightbox-caption="Saigoner Bistro — Vores køkken i København Ø">
                        <img src="{{ asset('images/gallery/bao-portrait-1.jpg') }}" alt="Saigoner Bistro" loading="lazy">
                        <div class="sb-photo-tile-overlay">
                            <span class="small fw-medium">Se billede</span>
                            <i class="bi bi-arrows-fullscreen"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 reveal-up">
                    <div class="sb-card p-4 h-100 d-flex flex-column justify-content-between">
                        <div>
                            <span class="sb-eyebrow mb-3">Åbningstider</span>
                            <h3 class="mb-3">Hvornår vi har åbent</h3>
                            <ul class="list-unstyled sb-hours-list mb-3">
                                <li><span class="fw-medium">Mandag</span><span class="sb-text-crimson fw-semibold">Lukket</span></li>
                                <li><span class="fw-medium">Tirsdag</span><span>17:00 – 21:30</span></li>
                                <li><span class="fw-medium">Onsdag</span><span>17:00 – 21:30</span></li>
                                <li><span class="fw-medium">Torsdag</span><span>17:00 – 21:30</span></li>
                                <li><span class="fw-medium">Fredag</span><span>17:00 – 23:00</span></li>
                                <li><span class="fw-medium">Lørdag</span><span>17:00 – 23:00</span></li>
                                <li><span class="fw-medium">Søndag</span><span>12:00 – 15:30</span></li>
                            </ul>
                        </div>
                        <div class="p-3 rounded-3 small" style="background-color: var(--sb-tertiary); border: 1px solid var(--sb-gold-soft);">
                            <i class="bi bi-clock me-1 sb-text-crimson"></i>
                            Køkkenet lukker kl. 21:00 (søndag kl. 15:00).
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Editorial Feature Article -->
    <section class="sb-section sb-section-soft border-top" style="border-color: var(--sb-gold-soft) !important;">
        <div class="container">
            <div class="mb-4 reveal-up">
                <span class="sb-eyebrow mb-2">Læs mere om os</span>
                <h2 class="display-6 mb-1 font-display">Kontraster på en tallerken</h2>
                <p class="small mb-0" style="color: var(--sb-ink-muted);">Skrevet af André Bentsen · andre@osterbroliv.dk</p>
            </div>

            <div class="row g-5 align-items-start">
                <div class="col-lg-5 reveal-up">
                    <div class="sb-photo-tile mb-4" style="aspect-ratio: 3/4.6;"
                         data-lightbox-src="{{ asset('images/gallery/bao-portrait-2.jpg') }}"
                         data-lightbox-caption="Kok Sơn Phạm i køkkenet hos Saigoner Bistro">
                        <img src="{{ asset('images/gallery/bao-portrait-2.jpg') }}" alt="Kok Sơn Phạm" loading="lazy">
                        <div class="sb-photo-tile-overlay">
                            <span class="small fw-medium">Kok Sơn Phạm</span>
                            <i class="bi bi-arrows-fullscreen"></i>
                        </div>
                    </div>
                    <p style="color: var(--sb-ink-muted);">
                        12 timer inden der bliver sagt vær så god, har kokken Sơn Phạm sat ingredienserne til sin Phở-suppe til at simre i køkkenet på Øster Farimagsgade. Her har Sàigòner Bistro slået dørene op til et hyggeligt sted, hvor små retter tager dig med på en smagsrejse direkte ud af Vietnam.
                    </p>
                </div>

                <div class="col-lg-7 reveal-up">
                    <div class="sb-menu-frame">
                        <span class="sb-corner sb-corner--tl"></span>
                        <span class="sb-corner sb-corner--tr"></span>
                        <span class="sb-corner sb-corner--bl"></span>
                        <span class="sb-corner sb-corner--br"></span>

                        <p class="sb-dropcap">
                            Men hvor du måske kommer for de vietnamesiske specialiteter, er der en reel risiko for, at du kommer tilbage på grund af de friske cocktails, der er specialdesignet til at passe til de små tapasanretninger.
                        </p>
                        <p>
                            – Du kan måske godt se det lidt som en slags streetfood, bare serveret i hjemlige rammer. Det skal ikke være som en restaurant, men som en følelse af at være på besøg hjemme hos nogen i Vietnam, siger Sơn Phạm.
                        </p>
                        <p>
                            Han har boet i København i snart fem år og forsøger at tage én særlig ting fra danskerne med ind i køkkenet: <em>hygge</em>. I Saigoner Bistro samler han kontrastfyldte retter på et bord fyldt med klassiske ingredienser og traditionelle smagsnuancer, fusioneret med moderne teknikker.
                        </p>
                        <p>
                            – Det betyder noget for mig og for smagen, at vi tillader mad at tage den tid det tager for at opnå den helt autentiske smag. Den skulle gerne smage hjemmelavet, men som en frisk oplevelse. Både i mad og cocktails.
                        </p>
                        <p class="mb-4">
                            På Øster Farimagsgade fortæller Sơn Phạm, at naboerne har taget varmt imod personalet. København er blevet et smukt hjem, og <em class="sb-text-crimson">Saigon betyder for ham livets krydderi — et helt madland i sig selv.</em>
                        </p>

                        <div class="pt-4 border-top d-flex flex-column flex-sm-row align-items-center justify-content-between gap-3"
                             style="border-color: var(--sb-gold-soft) !important;">
                            <div class="small" style="color: var(--sb-ink-muted);">
                                Se vores officielle kontrolrapport hos Fødevarestyrelsen:
                            </div>
                            <a href="https://www.findsmiley.dk/Sider/KontrolRapport.aspx?Virk6086461"
                               target="_blank" rel="noopener noreferrer" title="FindSmiley Kontrolrapport">
                                <img src="{{ asset('images/brand/smiley-kontrol.png') }}" alt="Fødevarestyrelsen Kontrolrapport"
                                     style="height: 82px; width: auto; border-radius: 0.5rem;">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
