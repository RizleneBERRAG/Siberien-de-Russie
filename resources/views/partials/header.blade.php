<header class="site-header" data-header>
    <a class="brand" href="{{ route('home') }}" aria-label="Sibérien de Russie — Accueil">
        <span class="brand-mark" aria-hidden="true">SR</span>
        <span class="brand-name">
            <strong>Sibérien</strong>
            <small>de Russie</small>
        </span>
    </a>

    <nav class="desktop-nav" aria-label="Navigation principale">
        <a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Accueil</a>
        <a class="{{ request()->routeIs('cats') ? 'active' : '' }}" href="{{ route('cats') }}">Nos chats</a>
        <a class="{{ request()->routeIs('adoption') ? 'active' : '' }}" href="{{ route('adoption') }}">Adoption</a>
        <a href="{{ route('home') }}#notre-univers">La chatterie</a>
    </nav>

    <div class="header-actions">
        <div class="country-switch" aria-label="Choisir le site">
            <a class="active" href="#" aria-current="page">FR</a>
            <i aria-hidden="true"></i>
            <a href="#" title="Domaine suisse à connecter">CH</a>
        </div>

        <a class="contact-link" href="mailto:chatteriesiberienderussie@gmail.com">
            Nous écrire <span>↗</span>
        </a>

        <button class="menu-toggle" data-menu-toggle aria-label="Ouvrir le menu" aria-expanded="false">
            <i></i><i></i>
        </button>
    </div>

    <div class="mobile-menu" data-mobile-menu>
        <nav aria-label="Navigation mobile">
            <a href="{{ route('home') }}"><small>01</small>Accueil</a>
            <a href="{{ route('cats') }}"><small>02</small>Nos chats</a>
            <a href="{{ route('adoption') }}"><small>03</small>Adoption</a>
            <a href="{{ route('home') }}#notre-univers"><small>04</small>La chatterie</a>
        </nav>
        <p>France · Suisse<br>chatteriesiberienderussie@gmail.com</p>
    </div>
</header>
