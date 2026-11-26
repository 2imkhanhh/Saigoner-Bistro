@extends('layouts.app')

@section('title', 'Saigoner Bistro — Oplev Saigons farverige smage i København')

@section('content')
    <!-- 1. Editorial Hero -->
    <section class="sb-hero">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 reveal-up">
                    <span class="sb-eyebrow mb-3">
                        <i class="bi bi-geo-alt-fill"></i> København Ø · Ved Kartoffelrækkerne
                    </span>
                    <h1 class="sb-hero-title mb-4">
                        Oplev Saigons farverige smage i hjertet af København
                    </h1>
                    <p class="lead mb-4" style="color: var(--sb-ink-muted); font-size: 1.12rem;">
                        Besøg Københavns vietnamesiske bistro og gå på opdagelse i vores udvalg af tapasretter, der er nøje
                        udvalgt og tilberedt efter traditionelle opskrifter — som var du på besøg i Saigons gastronomiske
                        hjemmekøkkener.
                    </p>

                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <a href="https://live.tebi.co/ecom/reservations/662376_9d857a9c17abefe701308232e953c8c048909cb44379c7cc7f8ed5cdf0fb355d"
                            target="_blank" rel="noopener noreferrer" class="btn btn-sb-coral btn-lg">
                            <i class="bi bi-calendar2-check me-2"></i>Book bord
                        </a>
                        <a href="{{ route('menu') }}" class="btn btn-sb-outline btn-lg">
                            Se menukort <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>

                    <div class="d-flex flex-wrap gap-4 pt-3 border-top small"
                        style="border-color: var(--sb-border) !important;">
                        <div>
                            <div class="text-uppercase fw-semibold"
                                style="font-size: 0.72rem; letter-spacing: 0.1em; color: var(--sb-primary);">Adresse</div>
                            <div class="fw-medium">Øster Farimagsgade 12, 2100 København Ø</div>
                        </div>
                        <div>
                            <div class="text-uppercase fw-semibold"
                                style="font-size: 0.72rem; letter-spacing: 0.1em; color: var(--sb-primary);">Telefon</div>
                            <div class="fw-medium">+45 4114 2100</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 reveal-up">
                    <div class="sb-hero-frame mx-auto" style="max-width: 510px;">
                        <img src="{{ asset('images/gallery/hero-dish.jpg') }}"
                            alt="Autentisk vietnamesisk tapas hos Saigoner Bistro">
                        <div class="sb-hero-float-badge d-flex align-items-center justify-content-between gap-3">
                            <div>
                                <div class="small text-uppercase fw-semibold"
                                    style="color: var(--sb-tertiary); letter-spacing: 0.08em;">Vietnamesisk Tapas &amp;
                                    Cocktails</div>
                                <div class="small mb-0">Hjemmelavet fra bunden med friske urter</div>
                            </div>
                            <a href="{{ route('menu') }}" class="btn btn-sm rounded-pill px-3 fw-medium"
                                style="background-color: var(--sb-primary); color: #fff; white-space: nowrap;">
                                Udforsk
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. About Us + Curated Photo Grid -->
    <section class="sb-section sb-section-soft border-top border-bottom" style="border-color: var(--sb-border) !important;">
        <div class="container">
            <div class="row g-5 align-items-start">
                <div class="col-lg-5 reveal-up">
                    <span class="sb-eyebrow mb-3">Om os</span>
                    <h2 class="display-6 mb-3">Vores passion, familie og hjem - En rejse til Saigon og tilbage igen</h2>
                    <div class="sb-divider mb-4"></div>

                    <p class="fw-medium mb-3" style="color: var(--sb-primary);">Kære gæst, velkommen til vores kulinariske
                        fristed!</p>

                    <p style="color: var(--sb-ink-muted);">
                        Mit navn er Bao og efter 6 år som kok i Danmark har jeg kastet mig ud i dette nye eventyr, som jeg
                        glæder mig til at dele med dig. Jeg er opvokset i Saigon og har gennem mange år udviklet min passion
                        for traditionelle vietnamesiske smagsoplevelser, som jeg ønsker at kombinere og nytænke i en nordisk
                        kontekst.
                    </p>
                    <p style="color: var(--sb-ink-muted);">
                        Jeg er begejstret for at tage dig med på denne rejse og byde dig velkommen i vores restaurant, som
                        jeg ikke kun betragter som et spisested - men som mit eget hjem, hvor vores lille “familie” - teamet
                        og sjælen bag Saigoner Bistro - vil tage imod dig med hjertevarme og smil.
                    </p>
                    <p style="color: var(--sb-ink-muted);">
                        Hvert måltid fortæller en historie om kærlighed til det autentiske vietnamesiske køkken. Trods den
                        rolige og minimalistiske tilgang i min madlavning sigter jeg mod at skabe en eksplosion af
                        smagsnuancer, som du ikke møder i hverdagen.
                    </p>
                    <p class="mb-0 fw-medium">
                        Velbekomme - Xin chào
                    </p>
                </div>

                <div class="col-lg-7 reveal-up">
                    <div class="row g-3">
                        <div class="col-6 col-md-4">
                            <div class="sb-photo-tile" style="aspect-ratio: 4/5;"
                                data-lightbox-src="{{ asset('images/gallery/dish-01.jpg') }}"
                                data-lightbox-caption="Saigoner Bistro — Tapas &amp; friske smage">
                                <img src="{{ asset('images/gallery/dish-01.jpg') }}"
                                    alt="Vietnamesisk ret hos Saigoner Bistro" loading="lazy">
                                <div class="sb-photo-tile-overlay">
                                    <span class="small fw-medium">Se billede</span>
                                    <i class="bi bi-arrows-fullscreen"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="sb-photo-tile" style="aspect-ratio: 4/5;"
                                data-lightbox-src="{{ asset('images/gallery/dish-02.jpg') }}"
                                data-lightbox-caption="Saigoner Bistro — Håndlavede specialiteter">
                                <img src="{{ asset('images/gallery/dish-02.jpg') }}"
                                    alt="Vietnamesisk ret hos Saigoner Bistro" loading="lazy">
                                <div class="sb-photo-tile-overlay">
                                    <span class="small fw-medium">Se billede</span>
                                    <i class="bi bi-arrows-fullscreen"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="sb-photo-tile" style="aspect-ratio: 4/5;"
                                data-lightbox-src="{{ asset('images/gallery/dish-03.jpg') }}"
                                data-lightbox-caption="Saigoner Bistro — Deling ved bordet">
                                <img src="{{ asset('images/gallery/dish-03.jpg') }}"
                                    alt="Vietnamesisk ret hos Saigoner Bistro" loading="lazy">
                                <div class="sb-photo-tile-overlay">
                                    <span class="small fw-medium">Se billede</span>
                                    <i class="bi bi-arrows-fullscreen"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="sb-photo-tile" style="aspect-ratio: 4/5;"
                                data-lightbox-src="{{ asset('images/gallery/dish-04.jpg') }}"
                                data-lightbox-caption="Saigoner Bistro — Smag af Saigon">
                                <img src="{{ asset('images/gallery/dish-04.jpg') }}"
                                    alt="Vietnamesisk ret hos Saigoner Bistro" loading="lazy">
                                <div class="sb-photo-tile-overlay">
                                    <span class="small fw-medium">Se billede</span>
                                    <i class="bi bi-arrows-fullscreen"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="sb-photo-tile" style="aspect-ratio: 4/5;"
                                data-lightbox-src="{{ asset('images/gallery/dish-05.jpg') }}"
                                data-lightbox-caption="Saigoner Bistro — Friske råvarer">
                                <img src="{{ asset('images/gallery/dish-05.jpg') }}"
                                    alt="Vietnamesisk ret hos Saigoner Bistro" loading="lazy">
                                <div class="sb-photo-tile-overlay">
                                    <span class="small fw-medium">Se billede</span>
                                    <i class="bi bi-arrows-fullscreen"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="sb-photo-tile" style="aspect-ratio: 4/5;"
                                data-lightbox-src="{{ asset('images/gallery/dish-06.jpg') }}"
                                data-lightbox-caption="Saigoner Bistro — Cocktails &amp; mad i balance">
                                <img src="{{ asset('images/gallery/dish-06.jpg') }}"
                                    alt="Cocktails og mad hos Saigoner Bistro" loading="lazy">
                                <div class="sb-photo-tile-overlay">
                                    <span class="small fw-medium">Se billede</span>
                                    <i class="bi bi-arrows-fullscreen"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row g-3 mt-1">
                        <div class="col-md-6">
                            <div class="sb-photo-tile" style="aspect-ratio: 16/10;"
                                data-lightbox-src="{{ asset('images/gallery/dish-07.jpg') }}"
                                data-lightbox-caption="Saigoner Bistro — Servering med varme">
                                <img src="{{ asset('images/gallery/dish-07.jpg') }}" alt="Servering hos Saigoner Bistro"
                                    loading="lazy">
                                <div class="sb-photo-tile-overlay">
                                    <span class="small fw-medium">Se billede</span>
                                    <i class="bi bi-arrows-fullscreen"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="sb-photo-tile" style="aspect-ratio: 16/10;"
                                data-lightbox-src="{{ asset('images/gallery/dish-08.jpg') }}"
                                data-lightbox-caption="Saigoner Bistro — Stemning i bistroen">
                                <img src="{{ asset('images/gallery/dish-08.jpg') }}" alt="Stemning hos Saigoner Bistro"
                                    loading="lazy">
                                <div class="sb-photo-tile-overlay">
                                    <span class="small fw-medium">Se billede</span>
                                    <i class="bi bi-arrows-fullscreen"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Saigoner Spirit & Chef Son Pham -->
    <section class="sb-section sb-section-dark">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-7 reveal-up">
                    <span class="sb-eyebrow mb-3" style="background-color: rgba(242,65,57,0.18); color: #ffdda6;">
                        Kultur &amp; Sjæl
                    </span>
                    <h2 class="display-6 mb-3">En Saigoner helt ind til hjertet!</h2>
                    <p class="mb-4" style="color: rgba(255, 235, 204, 0.82);">
                        Lad os sammen begynde eventyret og fortællingen om folket fra Saigon med deres unikke karakter og
                        facon — den samme varme og entusiasme oplever du ved Kartoffelrækkerne i København Ø.
                    </p>

                    <div class="row g-3">
                        @php
                            $traits = [
                                [
                                    'icon' => 'bi-emoji-smile',
                                    'title' => 'Entusiastiske og glade',
                                    'desc' =>
                                        'Altid klar til at hjælpe og byde gæster velkommen med smil og venlighed.',
                                ],
                                [
                                    'icon' => 'bi-stars',
                                    'title' => 'Kreativt sind',
                                    'desc' =>
                                        'En levende blanding af tradition og innovation — fra gadekunst til madlavning.',
                                ],
                                [
                                    'icon' => 'bi-fire',
                                    'title' => 'Madelskere',
                                    'desc' => 'Elsker mad og er inspireret af Saigons rige og varierede gadekøkken.',
                                ],
                                [
                                    'icon' => 'bi-people',
                                    'title' => 'Sociale værter',
                                    'desc' =>
                                        'Hjertelige, nærværende og nemme at føle sig hjemme hos fra første minut.',
                                ],
                                [
                                    'icon' => 'bi-heart-pulse',
                                    'title' => 'Tålmodighed & udholdenhed',
                                    'desc' => 'Kvalitet tager tid — både i livet og i de simrende gryder i køkkenet.',
                                ],
                                [
                                    'icon' => 'bi-award',
                                    'title' => 'Passion & dedikation',
                                    'desc' =>
                                        'Hver tallerken laves med stolthed, kærlighed og respekt for lokal kultur.',
                                ],
                            ];
                        @endphp
                        @foreach ($traits as $trait)
                            <div class="col-sm-6">
                                <div class="sb-trait-card">
                                    <div class="d-flex align-items-center gap-2 mb-1">
                                        <i class="bi {{ $trait['icon'] }} sb-trait-icon"></i>
                                        <h6 class="mb-0 fw-semibold" style="color: var(--sb-bg);">{{ $trait['title'] }}
                                        </h6>
                                    </div>
                                    <p class="small mb-0" style="color: rgba(255, 235, 204, 0.76);">{{ $trait['desc'] }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-5 reveal-up">
                    <div class="rounded-4 overflow-hidden shadow-lg border"
                        style="border-color: rgba(255,235,204,0.16) !important; background: rgba(255,235,204,0.05);">
                        <img src="{{ asset('images/gallery/chef-son-pham.jpg') }}" alt="Køkkenchef Son Pham"
                            class="w-100" style="aspect-ratio: 1/1; object-fit: cover;">
                        <div class="p-4">
                            <blockquote class="mb-2 fst-italic" style="color: var(--sb-bg);">
                                “Det betyder noget for mig og for smagen, at vi tillader mad at tage den tid det tager for
                                at opnå den helt autentiske smag.”
                            </blockquote>
                            <div class="small fw-semibold" style="color: var(--sb-primary);">
                                — Køkkenchef, Son Pham
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Guest Reviews -->
    <section class="sb-section sb-section-alt">
        <div class="container">
            <div class="text-center mx-auto mb-5 reveal-up" style="max-width: 640px;">
                <span class="sb-eyebrow mb-2">Gæsteanmeldelser</span>
                <h2 class="display-6 mb-2">Hvad vores gæster siger</h2>
                <p class="mb-0" style="color: var(--sb-ink-muted);">Smagsoplevelser, nærvær og hygge delt af vores
                    gæster i København Ø.</p>
            </div>

            @php
                $reviews = [
                    [
                        'initial' => 'M',
                        'name' => 'Martin',
                        'date' => 'Februar, 2024',
                        'quote' =>
                            '“Dejligt besøg med især rigtig god og levende betjening. Lækre forretter og god hovedret. Alt i alt en fin oplevelse og helt sikkert anbefalelsesværdig.”',
                    ],
                    [
                        'initial' => 'S',
                        'name' => 'Sofie & Kasper',
                        'date' => 'Maj, 2024',
                        'quote' =>
                            '“Fantastisk stemning ved Kartoffelrækkerne! Vi delte fem tapasretter og et par signaturcocktails, og alt smagte helt frisklavet og fuld af dybde.”',
                    ],
                    [
                        'initial' => 'H',
                        'name' => 'Henrik',
                        'date' => 'September, 2024',
                        'quote' =>
                            '“En lille perle på Østerbro. Phở-suppen og de sprøde forretter sidder lige i skabet, og man føler sig virkelig velkommen fra første minut.”',
                    ],
                    [
                        'initial' => 'C',
                        'name' => 'Camilla',
                        'date' => 'Oktober, 2025',
                        'quote' =>
                            '“Uformelt, hyggeligt og med smagsoplevelser man husker længe. De hjemmelavede cocktails passer perfekt til retterne — vi kommer helt sikkert igen.”',
                    ],
                ];
            @endphp

            <div class="row justify-content-center">
                <div class="col-lg-9 reveal-up">
                    <div id="sbReviewsCarousel" class="carousel slide" data-bs-ride="false">
                        <div class="carousel-inner">
                            @foreach ($reviews as $index => $review)
                                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                    <div class="sb-quote-card p-4 p-md-5 mx-1 my-2">
                                        <div
                                            class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-3 mb-3">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="rounded-circle d-flex align-items-center justify-content-center fw-bold fs-5 flex-shrink-0"
                                                    style="width: 52px; height: 52px; background-color: var(--sb-secondary); color: var(--sb-bg);">
                                                    {{ $review['initial'] }}
                                                </div>
                                                <div>
                                                    <h5 class="mb-0 font-serif">{{ $review['name'] }}</h5>
                                                    <div class="small" style="color: var(--sb-ink-muted);">
                                                        {{ $review['date'] }}</div>
                                                </div>
                                            </div>
                                            <div class="fs-6 text-nowrap" style="color: var(--sb-primary);"
                                                aria-label="5 ud af 5 stjerner">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                        <p class="fs-4 font-serif mb-0" style="line-height: 1.5;">
                                            {{ $review['quote'] }}
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="d-flex align-items-center justify-content-between mt-4 px-1">
                            @php($dotCount = min(count($reviews), 4))
                            <div class="sb-carousel-dots d-flex align-items-center gap-2"
                                data-total-slides="{{ count($reviews) }}">
                                @for ($i = 0; $i < $dotCount; $i++)
                                    <button type="button" data-dot-index="{{ $i }}"
                                        data-target-slide="{{ $i }}" class="{{ $i === 0 ? 'active' : '' }}"
                                        aria-current="{{ $i === 0 ? 'true' : 'false' }}"
                                        aria-label="Anmeldelse {{ $i + 1 }}"></button>
                                @endfor
                            </div>

                            <div class="d-flex align-items-center gap-2">
                                <button class="sb-carousel-arrow" type="button" data-bs-target="#sbReviewsCarousel"
                                    data-bs-slide="prev" aria-label="Forrige anmeldelse">
                                    <i class="bi bi-arrow-left"></i>
                                </button>
                                <button class="sb-carousel-arrow" type="button" data-bs-target="#sbReviewsCarousel"
                                    data-bs-slide="next" aria-label="Næste anmeldelse">
                                    <i class="bi bi-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Final CTA -->
    <section class="sb-section">
        <div class="container">
            <div class="sb-card p-4 p-md-5 text-center reveal-up"
                style="background: linear-gradient(135deg, var(--sb-bg-soft) 0%, var(--sb-tertiary) 100%);">
                <div class="mx-auto" style="max-width: 760px;">
                    <span class="sb-eyebrow mb-3">Velkommen til bords</span>
                    <h2 class="display-6 mb-3">
                        Reserver et bord til en uformel og hjertevarm aften med vores lækre tapas anretninger og velsmagende
                        hovedretter.
                    </h2>
                    <p class="mb-4" style="color: var(--sb-ink-muted);">
                        Vi tager dig med på en uovertruffen smagfuld rejse til Saigons hjemmekøkkener og supplerer med et
                        mix af cocktails med egne opskrifter, dejlige vine og ikke mindst et udvalg af øl.
                    </p>
                    <div class="d-flex flex-wrap justify-content-center gap-3">
                        <a href="{{ route('menu') }}" class="btn btn-sb-outline">Se menukort</a>
                        <a href="https://live.tebi.co/ecom/reservations/662376_9d857a9c17abefe701308232e953c8c048909cb44379c7cc7f8ed5cdf0fb355d"
                            target="_blank" rel="noopener noreferrer" class="btn btn-sb-coral">
                            <i class="bi bi-calendar2-check me-1"></i> Book bord
                        </a>
                        <a href="{{ route('contact') }}" class="btn btn-sb-primary">Kontakt os</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
