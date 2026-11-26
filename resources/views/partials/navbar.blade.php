<header class="sticky-top">
    <nav class="navbar navbar-expand-lg sb-navbar" aria-label="Hovednavigation">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center py-0" href="{{ route('home') }}" aria-label="Saigoner Bistro">
                <img src="{{ asset('images/brand/logo-header.png') }}" alt="Saigoner Bistro" class="sb-brand-logo">
            </a>

            <div class="d-flex align-items-center gap-2 order-lg-3">
                <a href="https://www.instagram.com/@saigonerbistro" target="_blank" rel="noopener noreferrer"
                   class="sb-social-btn d-none d-sm-inline-flex" aria-label="Instagram">
                    <i class="bi bi-instagram"></i>
                </a>
                <a href="https://www.facebook.com/profile.php?id=61554125473344" target="_blank" rel="noopener noreferrer"
                   class="sb-social-btn d-none d-sm-inline-flex" aria-label="Facebook">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="https://live.tebi.co/ecom/reservations/662376_9d857a9c17abefe701308232e953c8c048909cb44379c7cc7f8ed5cdf0fb355d"
                   target="_blank" rel="noopener noreferrer" class="btn btn-sb-coral btn-sm px-3 py-2 d-none d-md-inline-flex align-items-center gap-1">
                    <i class="bi bi-calendar2-check"></i> Book bord
                </a>

                <button class="navbar-toggler border-0 shadow-none ms-1" type="button"
                        data-bs-toggle="offcanvas" data-bs-target="#sbMobileNav"
                        aria-controls="sbMobileNav" aria-label="Åbn menu">
                    <i class="bi bi-list fs-2" style="color: var(--sb-secondary);"></i>
                </button>
            </div>

            <div class="collapse navbar-collapse justify-content-center order-lg-2" id="sbDesktopNav">
                <ul class="navbar-nav gap-lg-2">
                    <li class="nav-item">
                        <a class="nav-link sb-nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Forside</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link sb-nav-link {{ request()->routeIs('menu') ? 'active' : '' }}" href="{{ route('menu') }}">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link sb-nav-link {{ request()->routeIs('takeaway') ? 'active' : '' }}" href="{{ route('takeaway') }}">Take Away</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link sb-nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Kontakt</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Mobile Offcanvas Drawer -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="sbMobileNav" aria-labelledby="sbMobileNavLabel"
         style="background-color: var(--sb-bg); color: var(--sb-secondary);">
        <div class="offcanvas-header border-bottom" style="border-color: var(--sb-border) !important;">
            <div class="d-flex align-items-center" id="sbMobileNavLabel">
                <img src="{{ asset('images/brand/logo-header.png') }}" alt="Saigoner Bistro" style="height: 42px;">
            </div>
            <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Luk menu"></button>
        </div>
        <div class="offcanvas-body d-flex flex-column justify-content-between py-4">
            <ul class="navbar-nav gap-2 fs-5">
                <li class="nav-item">
                    <a class="nav-link sb-nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Forside</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sb-nav-link {{ request()->routeIs('menu') ? 'active' : '' }}" href="{{ route('menu') }}">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sb-nav-link {{ request()->routeIs('takeaway') ? 'active' : '' }}" href="{{ route('takeaway') }}">Take Away</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sb-nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Kontakt</a>
                </li>
            </ul>

            <div class="pt-4 border-top" style="border-color: var(--sb-border) !important;">
                <a href="https://live.tebi.co/ecom/reservations/662376_9d857a9c17abefe701308232e953c8c048909cb44379c7cc7f8ed5cdf0fb355d"
                   target="_blank" rel="noopener noreferrer" class="btn btn-sb-coral w-100 mb-3">
                    <i class="bi bi-calendar2-check me-1"></i> Book bord
                </a>
                <div class="small text-muted mb-2" style="color: var(--sb-ink-muted) !important;">
                    <i class="bi bi-geo-alt text-danger me-1"></i> Øster Farimagsgade 12, 2100 København Ø<br>
                    <i class="bi bi-telephone text-danger me-1"></i> +45 4114 2100
                </div>
                <div class="d-flex gap-2 mt-3">
                    <a href="https://www.instagram.com/@saigonerbistro" target="_blank" rel="noopener noreferrer" class="sb-social-btn" aria-label="Instagram">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="https://www.facebook.com/profile.php?id=61554125473344" target="_blank" rel="noopener noreferrer" class="sb-social-btn" aria-label="Facebook">
                        <i class="bi bi-facebook"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

