<footer class="sb-footer pt-5 pb-4 mt-auto">
    <div class="container">
        <div class="row g-4 align-items-start pb-4">
            <div class="col-lg-4 text-center text-lg-start">
                <div class="d-inline-flex flex-column align-items-center align-items-lg-start">
                    <img src="{{ asset('images/brand/logo-footer.png') }}" alt="Saigoner Bistro Logo" class="mb-3"
                        style="height: 84px; width: auto; filter: brightness(1.06);">
                    <p class="small mb-0" style="max-width: 300px; color: rgba(255, 235, 204, 0.78);">
                        Autentiske vietnamesiske tapasretter, hovedretter og signaturcocktails ved Kartoffelrækkerne i
                        København Ø.
                    </p>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-2">
                <h6 class="text-uppercase small fw-bold mb-3" style="color: var(--sb-primary); letter-spacing: 0.08em;">
                    Sider</h6>
                <ul class="list-unstyled d-grid gap-2 small mb-0">
                    <li><a href="{{ route('home') }}">Forside</a></li>
                    <li><a href="{{ route('menu') }}">Menukort</a></li>
                    <li><a href="{{ route('takeaway') }}">Take Away</a></li>
                    <li><a href="{{ route('contact') }}">Kontakt &amp; Åbningstider</a></li>
                </ul>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <h6 class="text-uppercase small fw-bold mb-3" style="color: var(--sb-primary); letter-spacing: 0.08em;">
                    Find os</h6>
                <ul class="list-unstyled d-grid gap-2 small mb-0">
                    <li><i class="bi bi-geo-alt me-2 text-danger"></i>Øster Farimagsgade 12, 2100 København Ø</li>
                    <li><i class="bi bi-telephone me-2 text-danger"></i><a href="tel:+4541142100">+45 4114 2100</a></li>
                    <li><i class="bi bi-envelope me-2 text-danger"></i><a
                            href="mailto:contact@saigonerbistro.dk">contact@saigonerbistro.dk</a></li>
                </ul>
            </div>

            <div class="col-md-4 col-lg-3">
                <h6 class="text-uppercase small fw-bold mb-3" style="color: var(--sb-primary); letter-spacing: 0.08em;">
                    Åbningstider</h6>
                <div class="small d-grid gap-1" style="color: rgba(255, 235, 204, 0.8);">
                    <div class="d-flex justify-content-between"><span>Mandag</span><span>Lukket</span></div>
                    <div class="d-flex justify-content-between"><span>Tir – Tor</span><span>17:00 – 21:30</span></div>
                    <div class="d-flex justify-content-between"><span>Fre – Lør</span><span>17:00 – 23:00</span></div>
                    <div class="d-flex justify-content-between"><span>Søndag</span><span>12:00 – 15:30</span></div>
                </div>
            </div>
        </div>

        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-center pt-3 border-top"
            style="border-color: rgba(255, 235, 204, 0.16) !important;">
            <p class="small mb-2 mb-sm-0" style="color: rgba(255, 235, 204, 0.68);">
                &copy; {{ date('Y') }} Saigoner Bistro
            </p>
            <div class="d-flex align-items-center gap-3">
                <a href="https://www.instagram.com/@saigonerbistro" target="_blank" rel="noopener noreferrer"
                    aria-label="Instagram" class="fs-5">
                    <i class="bi bi-instagram"></i>
                </a>
                <a href="https://www.facebook.com/profile.php?id=61554125473344" target="_blank"
                    rel="noopener noreferrer" aria-label="Facebook" class="fs-5">
                    <i class="bi bi-facebook"></i>
                </a>
            </div>
        </div>
    </div>
</footer>
