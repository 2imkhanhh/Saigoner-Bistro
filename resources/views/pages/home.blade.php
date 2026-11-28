@extends('layouts.app')

@section('title', 'Saigoner Bistro — Vietnamesisk Restaurant i København Ø')

@section('content')
    <!-- 1. Indochine Editorial Hero -->
    <section class="sb-hero sb-pattern-tile">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 reveal-up">
                    <div class="d-inline-flex align-items-center gap-2 mb-3">
                        <span class="sb-eyebrow">
                            <i class="bi bi-geo-alt-fill"></i> København Ø · Ved Kartoffelrækkerne
                        </span>
                    </div>

                    <h1 class="sb-hero-title mb-4">
                        Oplev <span class="sb-text-crimson fst-italic">Saigons</span> farverige smage i hjertet af København
                    </h1>

                    <p class="lead mb-4" style="color: var(--sb-ink-muted); font-size: 1.1rem;">
                        Besøg Københavns vietnamesiske bistro og gå på opdagelse i vores udvalg af tapasretter, nøje tilberedt efter traditionelle opskrifter — som var du på besøg i Saigons gastronomiske hjemmekøkkener.
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

                    <div class="row gx-5 gy-3 pt-3">
                        <div class="col-sm-6">
                            <div class="text-uppercase fw-semibold" style="font-size: 0.72rem; letter-spacing: 0.12em; color: var(--sb-primary);">Adresse</div>
                            <div class="fw-medium small">Øster Farimagsgade 12, 2100 København Ø</div>
                        </div>
                        <div class="col-sm-6">
                            <div class="text-uppercase fw-semibold" style="font-size: 0.72rem; letter-spacing: 0.12em; color: var(--sb-primary);">Åbent Tir – Søn</div>
                            <div class="fw-medium small">+45 4114 2100 · Cocktails &amp; Tapas</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 reveal-up">
                    <div class="sb-hero-collage">
                        <div class="sb-heritage-stamp">
                            <span class="text-uppercase fw-bold" style="font-size: 0.62rem; letter-spacing: 0.14em;">Sàigòner</span>
                            <span class="font-display fs-5 lh-1 my-1">Xin Chào</span>
                            <span class="text-uppercase" style="font-size: 0.58rem; letter-spacing: 0.1em; opacity: 0.9;">København Ø</span>
                        </div>

                        <div class="sb-hero-arch">
                            <div class="sb-hero-arch-inner">
                                <img src="{{ asset('images/gallery/hero-dish.jpg') }}" alt="Autentisk vietnamesisk tapas hos Saigoner Bistro">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Heritage Saigon Culinary Strip -->
    <div class="sb-ticker">
        <div class="container">
            <div class="sb-ticker-track">
                <span class="sb-ticker-item">Chả giò <span class="sb-ticker-diamond" aria-hidden="true">◆</span></span>
                <span class="sb-ticker-item">Hoành thánh tôm thịt <span class="sb-ticker-diamond" aria-hidden="true">◆</span></span>
                <span class="sb-ticker-item">Gỏi cuốn <span class="sb-ticker-diamond" aria-hidden="true">◆</span></span>
                <span class="sb-ticker-item">Gỏi đu đủ <span class="sb-ticker-diamond" aria-hidden="true">◆</span></span>
                <span class="sb-ticker-item">Gà cà ri &amp; Cơm dừa <span class="sb-ticker-diamond" aria-hidden="true">◆</span></span>
                <span class="sb-ticker-item">12-timers Phở <span class="sb-ticker-diamond" aria-hidden="true">◆</span></span>
                <span class="sb-ticker-item">Signaturcocktails</span>
            </div>
        </div>
    </div>

    <!-- 2. Heritage Story + Staggered Saigon Gallery -->
    <section class="sb-section sb-section-soft">
        <div class="container">
            <div class="row g-5 align-items-start">
                <div class="col-lg-5 reveal-up">
                    <div class="sb-menu-frame">
                        <span class="sb-corner sb-corner--tl"></span>
                        <span class="sb-corner sb-corner--tr"></span>
                        <span class="sb-corner sb-corner--bl"></span>
                        <span class="sb-corner sb-corner--br"></span>

                        <span class="sb-eyebrow mb-3">Om os</span>
                        <h2 class="h2 mb-3">Vores passion, familie og hjem — En rejse til Saigon</h2>
                        <div class="sb-divider mb-4"></div>

                        <p class="fw-semibold mb-3 sb-text-crimson">Kære gæst, velkommen til vores kulinariske fristed!</p>

                        <p class="sb-dropcap" style="color: var(--sb-ink-muted);">
                            Mit navn er Bao og efter 6 år som kok i Danmark har jeg kastet mig ud i dette nye eventyr, som jeg glæder mig til at dele med dig. Jeg er opvokset i Saigon og har gennem mange år udviklet min passion for traditionelle vietnamesiske smagsoplevelser, som jeg ønsker at kombinere og nytænke i en nordisk kontekst.
                        </p>
                        <p style="color: var(--sb-ink-muted);">
                            Jeg betragter ikke restauranten som blot et spisested — men som mit eget hjem, hvor vores lille “familie” bag Saigoner Bistro vil tage imod dig med hjertevarme og smil.
                        </p>
                        <p style="color: var(--sb-ink-muted);">
                            Trods den rolige og minimalistiske tilgang i min madlavning sigter jeg mod at skabe en eksplosion af smagsnuancer, som du ikke møder i hverdagen.
                        </p>

                        <div class="pt-3 mt-3 border-top d-flex align-items-center justify-content-between"
                             style="border-color: var(--sb-gold-soft) !important;">
                            <span class="font-display fst-italic fs-5 sb-text-crimson">Velbekomme – Xin chào</span>
                            <span class="small text-uppercase fw-semibold" style="letter-spacing: 0.1em; color: var(--sb-gold);">København Ø</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 reveal-up">
                    <div class="row g-3">
                        <div class="col-6 col-md-4">
                            <div class="sb-photo-tile" style="aspect-ratio: 4/5;"
                                 data-lightbox-src="{{ asset('images/gallery/dish-01.jpg') }}"
                                 data-lightbox-caption="Saigoner Bistro — Tapas &amp; friske smage">
                                <img src="{{ asset('images/gallery/dish-01.jpg') }}" alt="Vietnamesisk ret hos Saigoner Bistro" loading="lazy">
                                <div class="sb-photo-tile-overlay">
                                    <span class="small fw-medium">Se billede</span>
                                    <i class="bi bi-arrows-fullscreen"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 mt-md-4">
                            <div class="sb-photo-tile" style="aspect-ratio: 4/5;"
                                 data-lightbox-src="{{ asset('images/gallery/dish-02.jpg') }}"
                                 data-lightbox-caption="Saigoner Bistro — Håndlavede specialiteter">
                                <img src="{{ asset('images/gallery/dish-02.jpg') }}" alt="Vietnamesisk ret hos Saigoner Bistro" loading="lazy">
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
                                <img src="{{ asset('images/gallery/dish-03.jpg') }}" alt="Vietnamesisk ret hos Saigoner Bistro" loading="lazy">
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
                                <img src="{{ asset('images/gallery/dish-04.jpg') }}" alt="Vietnamesisk ret hos Saigoner Bistro" loading="lazy">
                                <div class="sb-photo-tile-overlay">
                                    <span class="small fw-medium">Se billede</span>
                                    <i class="bi bi-arrows-fullscreen"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 mt-md-4">
                            <div class="sb-photo-tile" style="aspect-ratio: 4/5;"
                                 data-lightbox-src="{{ asset('images/gallery/dish-05.jpg') }}"
                                 data-lightbox-caption="Saigoner Bistro — Friske råvarer">
                                <img src="{{ asset('images/gallery/dish-05.jpg') }}" alt="Vietnamesisk ret hos Saigoner Bistro" loading="lazy">
                                <div class="sb-photo-tile-overlay">
                                    <span class="small fw-medium">Se billede</span>
                                    <i class="bi bi-arrows-fullscreen"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="sb-photo-tile" style="aspect-ratio: 4/5;"
                                 data-lightbox-src="{{ asset('images/gallery/dish-08.jpg') }}"
                                 data-lightbox-caption="Saigoner Bistro — Stemning i bistroen">
                                <img src="{{ asset('images/gallery/dish-08.jpg') }}" alt="Stemning hos Saigoner Bistro" loading="lazy">
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

    <!-- 3. Signature Tasting Menu Highlight (aligned with physical menu card) -->
    <section class="sb-section sb-pattern-tile border-top border-bottom" style="border-color: var(--sb-gold-soft) !important;">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 reveal-up">
                    <div class="sb-photo-tile" style="aspect-ratio: 16/11;"
                         data-lightbox-src="{{ asset('images/gallery/bistro-wide.jpg') }}"
                         data-lightbox-caption="Saigoner Bistro — Vores bistro på Øster Farimagsgade">
                        <img src="{{ asset('images/gallery/bistro-wide.jpg') }}" alt="Saigoner Bistro indretning" loading="lazy">
                        <div class="sb-photo-tile-overlay">
                            <span class="small fw-medium">Stemningen i bistroen</span>
                            <i class="bi bi-arrows-fullscreen"></i>
                        </div>
                    </div>

                    <div class="row g-3 mt-1">
                        <div class="col-6">
                            <div class="sb-photo-tile" style="aspect-ratio: 4/3;"
                                 data-lightbox-src="{{ asset('images/gallery/dish-07.jpg') }}"
                                 data-lightbox-caption="Saigoner Bistro — Tapasretter">
                                <img src="{{ asset('images/gallery/dish-07.jpg') }}" alt="Tapas hos Saigoner Bistro" loading="lazy">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="sb-photo-tile" style="aspect-ratio: 4/3;"
                                 data-lightbox-src="{{ asset('images/gallery/dish-10.jpg') }}"
                                 data-lightbox-caption="Saigoner Bistro — Gæstfri aften">
                                <img src="{{ asset('images/gallery/dish-10.jpg') }}" alt="Retter hos Saigoner Bistro" loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 reveal-up">
                    <div class="sb-menu-frame">
                        <span class="sb-corner sb-corner--tl"></span>
                        <span class="sb-corner sb-corner--tr"></span>
                        <span class="sb-corner sb-corner--bl"></span>
                        <span class="sb-corner sb-corner--br"></span>

                        <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-2">
                            <span class="sb-eyebrow">Udpluk fra køkkenet</span>
                            <span class="font-display fw-semibold sb-text-crimson">Tasting Menu · 495,-</span>
                        </div>
                        <h2 class="h2 mb-3">Fra gadekøkkenet i Saigon til bordet i Østerbro</h2>

                        <div class="mb-4">
                            <div class="sb-dish-row">
                                <div>
                                    <div class="fw-semibold font-serif fs-5">Chả giò &amp; Hoành thánh tôm thịt</div>
                                    <div class="small" style="color: var(--sb-ink-muted);">Sprøde forårsruller og wontons med rejer, svinekød, hvidløg og østerssauce</div>
                                </div>
                                <span class="small text-uppercase fw-semibold sb-text-crimson text-nowrap">Snack Plate</span>
                            </div>
                            <div class="sb-dish-row">
                                <div>
                                    <div class="fw-semibold font-serif fs-5">Gỏi cuốn &amp; Gỏi đu đủ</div>
                                    <div class="small" style="color: var(--sb-ink-muted);">Friske sommerruller med avocado og tofu samt krydret grøn papaya-salat med rejer</div>
                                </div>
                                <span class="small text-uppercase fw-semibold sb-text-crimson text-nowrap">Frisk &amp; Sprød</span>
                            </div>
                            <div class="sb-dish-row">
                                <div>
                                    <div class="fw-semibold font-serif fs-5">Gà cà ri &amp; Cơm dừa</div>
                                    <div class="small" style="color: var(--sb-ink-muted);">Cremet kokoskarry med citrongræs, serveret med duftende kokosris</div>
                                </div>
                                <span class="small text-uppercase fw-semibold sb-text-crimson text-nowrap">Hovedret</span>
                            </div>
                            <div class="sb-dish-row">
                                <div>
                                    <div class="fw-semibold font-serif fs-5">Signaturcocktails &amp; Vinmenu</div>
                                    <div class="small" style="color: var(--sb-ink-muted);">Egne cocktailopskrifter og udvalgte vine (3 glas 295,- / 4 glas 375,-)</div>
                                </div>
                                <span class="small text-uppercase fw-semibold sb-text-crimson text-nowrap">Bar &amp; Vin</span>
                            </div>
                        </div>

                        <div class="d-flex flex-wrap gap-3">
                            <a href="{{ route('menu') }}" class="btn btn-sb-coral">
                                Se hele menukortet <i class="bi bi-arrow-right ms-1"></i>
                            </a>
                            <a href="{{ route('takeaway') }}" class="btn btn-sb-outline">
                                Bestil Take Away
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Saigoner Spirit & Chef Son Pham -->
    <section class="sb-section sb-section-dark sb-pattern-dark">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-7 reveal-up">
                    <span class="sb-eyebrow mb-3" style="background-color: rgba(181,32,37,0.28); border-color: rgba(184,137,64,0.45); color: #ffdda6;">
                        Kultur &amp; Sjæl
                    </span>
                    <h2 class="display-6 mb-3 font-display">En Saigoner helt ind til hjertet!</h2>
                    <p class="mb-4" style="color: rgba(255, 235, 204, 0.82);">
                        Lad os sammen begynde eventyret og fortællingen om folket fra Saigon med deres unikke karakter og facon — den samme varme og entusiasme oplever du ved Kartoffelrækkerne i København Ø.
                    </p>

                    <div class="row g-3">
                        @php
                            $traits = [
                                ['num' => '01', 'title' => 'Entusiastiske og glade', 'desc' => 'Altid klar til at hjælpe og byde gæster velkommen med smil og venlighed.'],
                                ['num' => '02', 'title' => 'Kreativt sind', 'desc' => 'En levende blanding af tradition og innovation — fra gadekunst til madlavning.'],
                                ['num' => '03', 'title' => 'Madelskere', 'desc' => 'Elsker mad og er inspireret af Saigons rige og varierede gadekøkken.'],
                                ['num' => '04', 'title' => 'Sociale værter', 'desc' => 'Hjertelige, nærværende og nemme at føle sig hjemme hos fra første minut.'],
                                ['num' => '05', 'title' => 'Tålmodighed & udholdenhed', 'desc' => 'Kvalitet tager tid — både i livet og i de simrende gryder i køkkenet.'],
                                ['num' => '06', 'title' => 'Passion & dedikation', 'desc' => 'Hver tallerken laves med stolthed, kærlighed og respekt for lokal kultur.'],
                            ];
                        @endphp
                        @foreach($traits as $trait)
                            <div class="col-sm-6">
                                <div class="sb-trait-card">
                                    <div class="sb-trait-head mb-2">
                                        <span class="sb-trait-num">{{ $trait['num'] }}</span>
                                        <span class="sb-trait-line" aria-hidden="true"></span>
                                    </div>
                                    <h6 class="mb-1 fw-semibold" style="color: var(--sb-bg);">{{ $trait['title'] }}</h6>
                                    <p class="small mb-0" style="color: rgba(255, 235, 204, 0.76);">{{ $trait['desc'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-5 reveal-up">
                    <div class="p-2 rounded-4 border" style="border-color: var(--sb-gold) !important; background: rgba(255,235,204,0.04);">
                        <div class="rounded-3 overflow-hidden" style="background: rgba(255,235,204,0.06);">
                            <img src="{{ asset('images/gallery/chef-son-pham.jpg') }}" alt="Køkkenchef Son Pham"
                                 class="w-100" style="aspect-ratio: 1/1; object-fit: cover;">
                            <div class="p-4">
                                <blockquote class="mb-2 fst-italic font-serif fs-5" style="color: var(--sb-bg);">
                                    “Det betyder noget for mig og for smagen, at vi tillader mad at tage den tid det tager for at opnå den helt autentiske smag.”
                                </blockquote>
                                <div class="small fw-semibold" style="color: var(--sb-gold);">
                                    — Køkkenchef, Son Pham
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Guest Reviews Carousel -->
    <section class="sb-section sb-section-alt">
        <div class="container">
            <div class="text-center mx-auto mb-5 reveal-up" style="max-width: 640px;">
                <span class="sb-eyebrow mb-2">Gæsteanmeldelser</span>
                <h2 class="display-6 mb-2 font-display">Hvad vores gæster siger</h2>
                <p class="mb-0" style="color: var(--sb-ink-muted);">Smagsoplevelser, nærvær og hygge delt af vores gæster i København Ø.</p>
            </div>

            @php
                $reviews = [
                    [
                        'initial' => 'M',
                        'name' => 'Martin',
                        'date' => 'Februar, 2024',
                        'quote' => '“Dejligt besøg med især rigtig god og levende betjening. Lækre forretter og god hovedret. Alt i alt en fin oplevelse og helt sikkert anbefalelsesværdig.”',
                    ],
                    [
                        'initial' => 'S',
                        'name' => 'Sofie & Kasper',
                        'date' => 'Maj, 2024',
                        'quote' => '“Fantastisk stemning ved Kartoffelrækkerne! Vi delte fem tapasretter og et par signaturcocktails, og alt smagte helt frisklavet og fuld af dybde.”',
                    ],
                    [
                        'initial' => 'H',
                        'name' => 'Henrik',
                        'date' => 'September, 2024',
                        'quote' => '“En lille perle på Østerbro. Phở-suppen og de sprøde forretter sidder lige i skabet, og man føler sig virkelig velkommen fra første minut.”',
                    ],
                    [
                        'initial' => 'C',
                        'name' => 'Camilla',
                        'date' => 'Oktober, 2025',
                        'quote' => '“Uformelt, hyggeligt og med smagsoplevelser man husker længe. De hjemmelavede cocktails passer perfekt til retterne — vi kommer helt sikkert igen.”',
                    ],
                ];
            @endphp

            <div class="row justify-content-center">
                <div class="col-lg-9 reveal-up">
                    <div id="sbReviewsCarousel" class="carousel slide" data-bs-ride="false">
                        <div class="carousel-inner">
                            @foreach($reviews as $index => $review)
                                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                    <div class="sb-quote-card p-4 p-md-5">
                                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-3 mb-3">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="rounded-circle d-flex align-items-center justify-content-center fw-bold fs-5 flex-shrink-0"
                                                     style="width: 52px; height: 52px; background-color: var(--sb-primary); color: #fff;">
                                                    {{ $review['initial'] }}
                                                </div>
                                                <div>
                                                    <h5 class="mb-0 font-serif">{{ $review['name'] }}</h5>
                                                    <div class="small" style="color: var(--sb-ink-muted);">{{ $review['date'] }}</div>
                                                </div>
                                            </div>
                                            <div class="fs-6 text-nowrap sb-text-crimson" aria-label="5 ud af 5 stjerner">
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
                                @for($i = 0; $i < $dotCount; $i++)
                                    <button type="button"
                                            data-dot-index="{{ $i }}"
                                            data-target-slide="{{ $i }}"
                                            class="{{ $i === 0 ? 'active' : '' }}"
                                            aria-current="{{ $i === 0 ? 'true' : 'false' }}"
                                            aria-label="Anmeldelse {{ $i + 1 }}"></button>
                                @endfor
                            </div>

                            <div class="d-flex align-items-center gap-2">
                                <button class="sb-carousel-arrow" type="button"
                                        data-bs-target="#sbReviewsCarousel" data-bs-slide="prev"
                                        aria-label="Forrige anmeldelse">
                                    <i class="bi bi-arrow-left"></i>
                                </button>
                                <button class="sb-carousel-arrow" type="button"
                                        data-bs-target="#sbReviewsCarousel" data-bs-slide="next"
                                        aria-label="Næste anmeldelse">
                                    <i class="bi bi-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Framed Indochine CTA -->
    <section class="sb-section sb-pattern-tile">
        <div class="container">
            <div class="sb-menu-frame text-center reveal-up">
                <span class="sb-corner sb-corner--tl"></span>
                <span class="sb-corner sb-corner--tr"></span>
                <span class="sb-corner sb-corner--bl"></span>
                <span class="sb-corner sb-corner--br"></span>

                <div class="mx-auto py-2" style="max-width: 760px;">
                    <span class="sb-eyebrow mb-3">Velkommen til bords</span>
                    <div class="sb-ornament-divider justify-content-center mb-3">
                        <span class="small text-uppercase fw-semibold" style="letter-spacing: 0.14em;">Sàigòner Bistro</span>
                    </div>
                    <h2 class="display-6 mb-3 font-display">
                        Reserver et bord til en uformel og hjertevarm aften med vores lækre tapas anretninger og velsmagende hovedretter.
                    </h2>
                    <p class="mb-4" style="color: var(--sb-ink-muted);">
                        Vi tager dig med på en uovertruffen smagfuld rejse til Saigons hjemmekøkkener og supplerer med et mix af cocktails med egne opskrifter, dejlige vine og ikke mindst et udvalg af øl.
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
