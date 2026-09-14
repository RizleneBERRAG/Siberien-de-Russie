@extends('layouts.app')
@section('title','Sibérien de Russie | Chatterie familiale')
@section('meta_description','Chatterie familiale de Sibériens et Neva Masquerade LOOF en France et en Suisse.')
@section('body_class','home-page')
@push('styles') @vite('resources/css/pages/home.css') @endpush
@section('content')
<section class="luxury-hero">
    <div class="hero-photo">
        <img src="https://chatteriesiberienderussie.fr/assets/oslo.jpg" alt="Oslo, magnifique Sibérien de Russie">
    </div>
    <div class="hero-softness"></div>
    <div class="hero-fine-frame" aria-hidden="true"></div>

    <div class="hero-content reveal">
        <p class="hero-kicker"><span></span> Chatterie familiale</p>
        <h1>
            Sibériens
            <small>de Russie</small>
        </h1>
        <p class="hero-signature">Une beauté majestueuse.<br>Une douceur profondément sincère.</p>
        <div class="hero-actions">
            <a class="hero-primary" href="{{ route('cats') }}">Découvrir nos chats <span>↗</span></a>
            <a class="hero-secondary" href="#chatterie">Notre histoire <span>↓</span></a>
        </div>
    </div>

    <div class="hero-medallion reveal delay">
        <span>Élevage</span>
        <strong>SR</strong>
        <span>Familial</span>
    </div>

    <aside class="hero-proof">
        <div><strong>LOOF</strong><span>Sibériens &<br>Neva Masquerade</span></div>
        <div><strong>FR · CH</strong><span>Deux domaines,<br>une même passion</span></div>
        <div><strong>Famille</strong><span>Élevés avec nous<br>et nos enfants</span></div>
    </aside>

    <a class="hero-scroll" href="#chatterie"><span>Découvrir</span><i></i></a>
</section>

<section class="home-story" id="chatterie">
    <div class="story-heading reveal">
        <p>01 — Notre maison</p>
        <h2>Une chatterie où chaque chat<br><em>fait partie de la famille.</em></h2>
    </div>
    <div class="story-composition">
        <figure class="story-main reveal"><img src="https://chatteriesiberienderussie.fr/assets/anouchka.jpg" alt="Anouchka, chatte Sibérienne"><figcaption>Anouchka · Reproductrice</figcaption></figure>
        <div class="story-copy reveal"><span class="gold-rule"></span><p class="story-lead">Ils grandissent au milieu de nos voix, de nos gestes et de la vie de nos enfants.</p><p>Cette proximité leur permet de devenir des compagnons équilibrés, curieux et profondément proches de l’humain. Leur santé, leur bien-être et leur personnalité guident chacune de nos décisions.</p><a href="{{ route('adoption') }}">Découvrir notre approche <span>→</span></a></div>
        <figure class="story-detail reveal"><img src="https://chatteriesiberienderussie.fr/assets/vanille.jpg" alt="Vanille, chatte Sibérienne"></figure>
    </div>
</section>

<section class="home-kittens">
    <header class="kittens-heading reveal"><p>02 — La portée actuelle</p><h2>Les petits derniers</h2><a href="{{ route('cats') }}#chatons">Voir toute la portée <span>↗</span></a></header>
    <div class="kitten-gallery">
        @foreach([
            ['Bloom','bloom.jpg','Mâle · Chocolat point'],
            ['Bisous','bisous.jpg','Femelle · Blue tabby point'],
            ['Bella','bella.jpg','Femelle · Blue point']
        ] as $index => $kitten)
        <a class="kitten-card reveal" href="mailto:chatteriesiberienderussie@gmail.com?subject=Je souhaite en savoir plus sur {{ $kitten[0] }}">
            <figure><img src="https://chatteriesiberienderussie.fr/assets/{{ $kitten[1] }}" alt="{{ $kitten[0] }}"><span>Disponible</span></figure>
            <div><small>0{{ $index + 1 }}</small><h3>{{ $kitten[0] }}</h3><p>{{ $kitten[2] }} · Yeux bleus</p><b>→</b></div>
        </a>
        @endforeach
    </div>
</section>

<section class="home-values">
    <div class="values-title reveal"><p>03 — Nos engagements</p><h2>Bien grandir,<br><em>avant de partir.</em></h2></div>
    <div class="values-list">
        <article class="reveal"><span>01</span><h3>Santé & suivi</h3><p>Tests, vaccinations, vermifugation et accompagnement vétérinaire.</p></article>
        <article class="reveal"><span>02</span><h3>Vie de famille</h3><p>Une socialisation naturelle, affectueuse et attentive dès les premiers jours.</p></article>
        <article class="reveal"><span>03</span><h3>Après l’adoption</h3><p>Une présence disponible pour vous accompagner dans votre nouvelle histoire.</p></article>
    </div>
</section>

<section class="home-contact">
    <img src="https://chatteriesiberienderussie.fr/assets/bisous.jpg" alt="Bisous, chaton Sibérien">
    <div class="contact-veil"></div>
    <div class="contact-copy reveal"><p>Une rencontre peut tout changer</p><h2>Et si votre histoire<br>commençait ici ?</h2><a href="mailto:chatteriesiberienderussie@gmail.com">Échanger avec nous <span>↗</span></a></div>
</section>
@endsection
