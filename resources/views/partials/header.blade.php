<header class="site-header" data-header>
    <a class="brand" href="{{ route('home') }}"><b>♛</b><span><strong>Sibérien</strong><small>de Russie</small></span></a>
    <nav class="desktop-nav">
        <a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Accueil</a>
        <a class="{{ request()->routeIs('cats') ? 'active' : '' }}" href="{{ route('cats') }}">Nos chats</a>
        <a class="{{ request()->routeIs('adoption') ? 'active' : '' }}" href="{{ route('adoption') }}">Adoption</a>
        <a href="{{ route('home') }}#chatterie">La chatterie</a>
    </nav>
    <div class="header-actions">
        <div class="country-switch"><a class="active" href="#">FR</a><i></i><a href="#" title="Domaine suisse à connecter">CH</a></div>
        <a class="contact-link" href="mailto:chatteriesiberienderussie@gmail.com">Nous écrire <span>↗</span></a>
        <button class="menu-toggle" data-menu-toggle aria-label="Ouvrir le menu"><i></i><i></i></button>
    </div>
    <div class="mobile-menu" data-mobile-menu>
        <nav><a href="{{ route('home') }}"><small>01</small>Accueil</a><a href="{{ route('cats') }}"><small>02</small>Nos chats</a><a href="{{ route('adoption') }}"><small>03</small>Adoption</a><a href="{{ route('home') }}#chatterie"><small>04</small>La chatterie</a></nav>
        <p>France · Suisse<br>chatteriesiberienderussie@gmail.com</p>
    </div>
</header>
