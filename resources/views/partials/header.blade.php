<header class="site-header" data-header>
    <div class="header-container">
        <a href="{{ route('home') }}" class="brand" aria-label="Accueil — Sibérien de Russie">
            <span class="brand-mark" aria-hidden="true">
                <svg viewBox="0 0 60 60">
                    <path d="M17 42C12 35 12 25 18 18C20 25 24 28 30 28C36 28 40 25 42 18C48 25 48 35 43 42C39 47 35 49 30 49C25 49 21 47 17 42Z"/>
                    <path d="M22 28C24 23 26 18 30 12C34 18 36 23 38 28"/>
                    <path d="M24 38C28 41 32 41 36 38"/>
                </svg>
            </span>

            <span class="brand-text">
                <strong>Sibérien</strong>
                <small>de Russie</small>
            </span>
        </a>

        <nav class="desktop-navigation" aria-label="Navigation principale">
            <a
                href="{{ route('home') }}"
                class="{{ request()->routeIs('home') ? 'active' : '' }}"
            >
                Accueil
            </a>

            <a
                href="{{ route('cats') }}"
                class="{{ request()->routeIs('cats') ? 'active' : '' }}"
            >
                Nos chats
            </a>

            <a
                href="{{ route('adoption') }}"
                class="{{ request()->routeIs('adoption') ? 'active' : '' }}"
            >
                Adoption
            </a>

            <a href="{{ route('home') }}#chatterie">
                La chatterie
            </a>

            <a href="{{ route('home') }}#contact">
                Contact
            </a>
        </nav>

        <div class="header-actions">
            <span class="delivery-zone">
                <span>France</span>
                <i></i>
                <span>Suisse</span>
            </span>

            <a
                href="mailto:chatteriesiberienderussie@gmail.com?subject=Demande%20de%20réservation"
                class="reservation-link"
            >
                Réserver un chaton
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M5 12H19M13 6L19 12L13 18"/>
                </svg>
            </a>

            <button
                class="menu-toggle"
                type="button"
                aria-label="Ouvrir le menu"
                aria-expanded="false"
                data-menu-toggle
            >
                <span></span>
                <span></span>
            </button>
        </div>
    </div>

    <div class="mobile-menu" data-mobile-menu>
        <div class="mobile-menu-inner">
            <p class="mobile-menu-label">Navigation</p>

            <nav aria-label="Navigation mobile">
                <a href="{{ route('home') }}">
                    <span>01</span>
                    Accueil
                </a>

                <a href="{{ route('cats') }}">
                    <span>02</span>
                    Nos chats
                </a>

                <a href="{{ route('adoption') }}">
                    <span>03</span>
                    Adoption
                </a>

                <a href="{{ route('home') }}#chatterie">
                    <span>04</span>
                    La chatterie
                </a>

                <a href="{{ route('home') }}#contact">
                    <span>05</span>
                    Contact
                </a>
            </nav>

            <div class="mobile-menu-footer">
                <p>Sibériens & Neva Masquerade LOOF</p>
                <p>Adoptions en France et en Suisse</p>
            </div>
        </div>
    </div>
</header>
