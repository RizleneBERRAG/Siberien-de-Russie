@extends('layouts.app')

@section('title', 'Sibérien de Russie | Chatterie familiale')
@section('meta_description', 'Chatterie familiale de Sibériens et Neva Masquerade LOOF en France et en Suisse.')
@section('body_class', 'home-page')

@push('styles')
    @vite('resources/css/pages/home.css')
@endpush

@section('content')
    <section class="home-hero" aria-labelledby="home-hero-title">
        <span class="hero-orbit hero-orbit--one" aria-hidden="true"></span>
        <span class="hero-orbit hero-orbit--two" aria-hidden="true"></span>

        <div class="home-hero__inner">
            <div class="hero-copy reveal">
                <p class="eyebrow"><i></i>Sibérien & Neva Masquerade</p>

                <h1 id="home-hero-title">
                    Le Sibérien,
                    <em>tout naturellement.</em>
                </h1>

                <p class="hero-lead">
                    Une allure venue du froid, un tempérament profondément tendre.
                    Nos chatons grandissent au cœur de notre maison, entourés et préparés
                    avec attention à leur future vie de famille.
                </p>

                <div class="hero-actions">
                    <a class="button dark" href="{{ route('cats') }}#chatons">
                        Voir les chatons <span>↗</span>
                    </a>
                    <a class="text-link" href="#notre-univers">
                        Découvrir la chatterie <span>↓</span>
                    </a>
                </div>

                <div class="hero-signature" aria-label="Les engagements de la chatterie">
                    <div>
                        <strong>LOOF</strong>
                        <span>Des lignées suivies</span>
                    </div>
                    <div>
                        <strong>Famille</strong>
                        <span>Une socialisation quotidienne</span>
                    </div>
                    <div>
                        <strong>FR · CH</strong>
                        <span>France et Suisse</span>
                    </div>
                </div>
            </div>

            <div class="hero-visual reveal delay" data-hero-visual>
                <figure class="hero-photo">
                    <img
                        src="https://chatteriesiberienderussie.fr/assets/oslo.jpg"
                        alt="Oslo, mâle Sibérien de la chatterie"
                        fetchpriority="high"
                    >
                    <figcaption>
                        <span>Notre mâle Sibérien</span>
                        <strong>Oslo</strong>
                    </figcaption>
                </figure>

                <figure class="hero-portrait" aria-label="Vanille, chatte Sibérienne">
                    <img
                        src="https://chatteriesiberienderussie.fr/assets/vanille.jpg"
                        alt="Vanille, chatte Sibérienne"
                    >
                    <figcaption>Vanille</figcaption>
                </figure>

                <aside class="hero-litter-card">
                    <div class="litter-status"><i></i>Portée actuelle</div>
                    <p>Nés le</p>
                    <strong>26.06.2026</strong>
                    <span>Bloom · Bisous · Bella</span>
                    <a href="{{ route('cats') }}#chatons">
                        Découvrir la portée <b>↗</b>
                    </a>
                </aside>

                <p class="hero-vertical-note">Élevés avec douceur · préparés avec soin</p>
            </div>
        </div>

        <a class="hero-scroll" href="#portee-actuelle">
            <span>La portée actuelle</span><i></i>
        </a>
    </section>

    <section class="home-news" id="portee-actuelle" aria-labelledby="home-news-title">
        <div class="home-news__status">
            <i></i>
            <span>Des chatons sont actuellement disponibles</span>
        </div>

        <div class="home-news__title">
            <small>La dernière portée</small>
            <h2 id="home-news-title">Trois petites personnalités à rencontrer.</h2>
        </div>

        <p>
            Bloom, Bisous et Bella sont nés le 26 juin 2026.
            Découvrez leurs premières photos, leurs robes et leur disponibilité.
        </p>

        <a href="{{ route('cats') }}#chatons">
            Voir la portée
            <span>↗</span>
        </a>
    </section>

    <section class="home-story" id="notre-univers" aria-labelledby="home-story-title">
        <header class="story-heading reveal">
            <div class="section-number"><span>01</span>Notre univers</div>
            <h2 id="home-story-title">
                Avant d’être un élevage,
                <em>c’est leur maison.</em>
            </h2>
            <p>
                Ici, les chats ne vivent pas à côté de la famille :
                ils en font pleinement partie.
            </p>
        </header>

        <div class="story-composition">
            <figure class="story-main reveal">
                <img
                    src="https://chatteriesiberienderussie.fr/assets/anouchka.jpg"
                    alt="Anouchka dans son environnement familial"
                    loading="lazy"
                >
                <figcaption><span>La vie à la maison</span><strong>Anouchka</strong></figcaption>
            </figure>

            <article class="story-copy reveal">
                <span class="story-index">01 — 03</span>
                <h3>Grandir au rythme d’une vraie vie de famille.</h3>
                <p>
                    Présence humaine, bruits du quotidien, jeux et moments calmes :
                    chaque chaton découvre naturellement le monde qui l’attend.
                </p>
                <p>
                    Cette proximité nous permet aussi d’observer son caractère
                    et de vous guider vers le compagnon qui vous correspond.
                </p>
                <a class="underlined" href="{{ route('adoption') }}">
                    Notre manière de travailler <span>→</span>
                </a>
            </article>

            <figure class="story-detail reveal">
                <img
                    src="https://chatteriesiberienderussie.fr/assets/bloom.jpg"
                    alt="Bloom, chaton Sibérien"
                    loading="lazy"
                >
                <figcaption>
                    <strong>Entourés dès leurs premiers jours</strong>
                    <span>Attention · jeux · socialisation</span>
                </figcaption>
            </figure>

            <blockquote class="story-quote reveal">
                <span>“</span>
                <p>Élever peu, observer beaucoup et accompagner chaque famille avec sincérité.</p>
            </blockquote>
        </div>
    </section>

    <section class="home-kittens" aria-labelledby="home-kittens-title">
        <header class="kittens-heading reveal">
            <div>
                <p class="section-number section-number--light"><span>02</span>La portée</p>
                <h2 id="home-kittens-title">
                    Les petits
                    <em>derniers.</em>
                </h2>
            </div>
            <p>
                Trois visages, trois caractères à découvrir.
                Survolez leur portrait pour entrer dans leur univers.
            </p>
        </header>

        <div class="kitten-gallery">
            @foreach([
                ['01', 'Bloom', 'bloom.jpg', 'Mâle', 'Chocolat point'],
                ['02', 'Bisous', 'bisous.jpg', 'Femelle', 'Blue tabby point'],
                ['03', 'Bella', 'bella.jpg', 'Femelle', 'Blue point'],
            ] as $kitten)
                <a class="kitten-card kitten-card--{{ $loop->iteration }} reveal" href="{{ route('cats') }}#chatons">
                    <figure>
                        <img
                            src="https://chatteriesiberienderussie.fr/assets/{{ $kitten[2] }}"
                            alt="{{ $kitten[1] }}, chaton Sibérien {{ $kitten[4] }}"
                            loading="lazy"
                        >
                    </figure>

                    <div class="kitten-card__top">
                        <span>{{ $kitten[0] }}</span>
                        <span class="availability"><i></i>Disponible</span>
                    </div>

                    <div class="kitten-card__content">
                        <small>{{ $kitten[3] }} · {{ $kitten[4] }}</small>
                        <h3>{{ $kitten[1] }}</h3>
                        <span class="kitten-card__link">Voir sa fiche <b>↗</b></span>
                    </div>
                </a>
            @endforeach
        </div>

        <div class="kittens-footer reveal">
            <p>
                <span>Une portée vous intéresse ?</span>
                Nous prenons le temps d’échanger avec chaque future famille.
            </p>
            <a class="button outline" href="{{ route('adoption') }}">
                Comprendre l’adoption <span>↗</span>
            </a>
        </div>
    </section>

    <section class="home-temperament" aria-labelledby="home-temperament-title">
        <div class="temperament-heading reveal">
            <p class="section-number"><span>03</span>Le Sibérien</p>
            <h2 id="home-temperament-title">
                Majestueux dehors.
                <em>Profondément proche.</em>
            </h2>
        </div>

        <div class="temperament-grid">
            <article class="temperament-card reveal">
                <span>01</span>
                <h3>Une présence tendre</h3>
                <p>Attaché à son foyer, le Sibérien aime partager le quotidien sans jamais perdre sa personnalité.</p>
            </article>
            <article class="temperament-card reveal">
                <span>02</span>
                <h3>Un caractère équilibré</h3>
                <p>Curieux, joueur et posé, il s’épanouit dans un environnement riche en échanges et en découvertes.</p>
            </article>
            <article class="temperament-card reveal">
                <span>03</span>
                <h3>Une allure inoubliable</h3>
                <p>Fourrure généreuse, regard expressif et puissance naturelle composent toute sa singularité.</p>
            </article>
        </div>
    </section>

    <section class="home-adoption" aria-labelledby="home-adoption-title">
        <div class="adoption-intro reveal">
            <p class="section-number"><span>04</span>Votre projet</p>
            <h2 id="home-adoption-title">
                Une adoption se prépare
                <em>à deux.</em>
            </h2>
            <p>
                Nous vous accompagnons du premier message aux premiers jours
                de votre chaton dans sa nouvelle maison.
            </p>
            <a class="button dark" href="{{ route('adoption') }}">
                Le parcours d’adoption <span>↗</span>
            </a>
        </div>

        <ol class="adoption-steps">
            <li class="reveal">
                <span>01</span>
                <div>
                    <h3>Faire connaissance</h3>
                    <p>Nous échangeons sur votre foyer, votre rythme de vie et ce que vous recherchez.</p>
                </div>
            </li>
            <li class="reveal">
                <span>02</span>
                <div>
                    <h3>Rencontrer la portée</h3>
                    <p>Vous découvrez les chatons, leur évolution et les premières nuances de leur caractère.</p>
                </div>
            </li>
            <li class="reveal">
                <span>03</span>
                <div>
                    <h3>Les laisser grandir</h3>
                    <p>Votre futur compagnon poursuit tranquillement sa socialisation au sein de la maison.</p>
                </div>
            </li>
            <li class="reveal">
                <span>04</span>
                <div>
                    <h3>Préparer son arrivée</h3>
                    <p>Conseils, habitudes et suivi : vous repartez avec des repères clairs pour bien commencer.</p>
                </div>
            </li>
        </ol>
    </section>

    <section class="home-contact" id="contact" aria-labelledby="home-contact-title">
        <figure>
            <img
                src="https://chatteriesiberienderussie.fr/assets/bisous.jpg"
                alt="Bisous, chaton Sibérien"
                loading="lazy"
            >
        </figure>

        <div class="home-contact__panel reveal">
            <p class="eyebrow eyebrow--light"><i></i>France · Suisse</p>
            <h2 id="home-contact-title">
                Et si votre histoire
                <em>commençait ici ?</em>
            </h2>
            <p>
                Une question sur la race, une portée ou notre façon de travailler ?
                Écrivez-nous simplement, nous vous répondrons avec plaisir.
            </p>
            <a class="button cream" href="mailto:chatteriesiberienderussie@gmail.com">
                Nous écrire <span>↗</span>
            </a>
            <small>chatteriesiberienderussie@gmail.com</small>
        </div>
    </section>
@endsection
