@extends('layouts.app')
@section('title','Sibérien de Russie | Chatterie familiale')
@section('meta_description','Chatterie familiale de Sibériens et Neva Masquerade LOOF en France et en Suisse.')
@section('body_class','home-page')
@push('styles') @vite('resources/css/pages/home.css') @endpush
@section('content')
<section class="signature-hero" data-hero>
    <div class="hero-word" aria-hidden="true">SIBÉRIEN</div>
    <div class="hero-slides">
        @foreach([
            ['oslo.jpg','Oslo','Force tranquille'],
            ['anouchka.jpg','Anouchka','Élégance naturelle'],
            ['vanille.jpg','Vanille','Douceur infinie']
        ] as $index => $cat)
        <figure class="hero-slide {{ $index === 0 ? 'active' : '' }}" data-hero-slide="{{ $index }}">
            <img src="https://chatteriesiberienderussie.fr/assets/{{ $cat[0] }}" alt="{{ $cat[1] }}, Sibérien de Russie">
            <div class="image-shade"></div>
            <figcaption><span>0{{ $index + 1 }}</span><strong>{{ $cat[1] }}</strong><small>{{ $cat[2] }}</small></figcaption>
        </figure>
        @endforeach
    </div>
    <div class="hero-origin reveal"><span>Une race venue du froid.</span><span>Une tendresse qui réchauffe tout.</span></div>
    <div class="hero-title reveal">
        <p>Chatterie familiale · France & Suisse</p>
        <h1>Beauté<br><em>sauvage.</em></h1>
    </div>
    <div class="hero-manifesto reveal delay"><p>Nos Sibériens grandissent libres d’être eux-mêmes, entourés par notre famille et préparés avec soin à rencontrer la vôtre.</p><a href="{{ route('cats') }}">Rencontrer nos chats <span>↗</span></a></div>
    <div class="hero-switcher">
        @foreach(['Oslo','Anouchka','Vanille'] as $index => $name)
        <button class="{{ $index === 0 ? 'active' : '' }}" data-hero-target="{{ $index }}"><span>0{{ $index + 1 }}</span>{{ $name }}</button>
        @endforeach
    </div>
    <a class="hero-scroll" href="#chatterie"><span>Entrer dans leur univers</span><i></i></a>
</section>

<div class="moving-line" aria-hidden="true"><div><span>SIBÉRIENS</span><i>✦</i><span>NEVA MASQUERADE</span><i>✦</i><span>ÉLEVÉS EN FAMILLE</span><i>✦</i><span>FRANCE · SUISSE</span><i>✦</i><span>SIBÉRIENS</span><i>✦</i><span>NEVA MASQUERADE</span></div></div>

<section class="editorial-story" id="chatterie">
    <div class="story-index reveal">01 <span>/</span> LA CHATTERIE</div>
    <div class="story-statement reveal"><p>Chez nous, ils ne vivent pas à côté de la famille.</p><h2>Ils en font<br><em>pleinement partie.</em></h2></div>
    <figure class="story-photo story-photo-a reveal"><img src="https://chatteriesiberienderussie.fr/assets/anouchka.jpg" alt="Anouchka à la chatterie"><span>Le quotidien partagé</span></figure>
    <div class="story-body reveal"><p>Nos chatons découvrent le monde au milieu des voix, des jeux et des gestes tendres. Cette proximité construit des tempéraments confiants, curieux et profondément attachés à l’humain.</p><a href="{{ route('adoption') }}">Notre façon de les accompagner <span>→</span></a></div>
    <figure class="story-photo story-photo-b reveal"><img src="https://chatteriesiberienderussie.fr/assets/bloom.jpg" alt="Bloom, chaton Sibérien"><span>Les premiers instants</span></figure>
</section>

<section class="living-portraits">
    <header class="portraits-head reveal"><div><p>02 / LA PORTÉE ACTUELLE</p><h2>Trois petits caractères.<br><em>Une même douceur.</em></h2></div><a href="{{ route('cats') }}#chatons">Voir tous les chatons <span>↗</span></a></header>
    <div class="portrait-track">
        @foreach([
            ['Bloom','bloom.jpg','Mâle · Chocolat point'],
            ['Bisous','bisous.jpg','Femelle · Blue tabby point'],
            ['Bella','bella.jpg','Femelle · Blue point']
        ] as $index => $kitten)
        <a class="living-card reveal" href="mailto:chatteriesiberienderussie@gmail.com?subject=Je souhaite en savoir plus sur {{ $kitten[0] }}">
            <figure><img src="https://chatteriesiberienderussie.fr/assets/{{ $kitten[1] }}" alt="{{ $kitten[0] }}"><span>Disponible</span><b>0{{ $index + 1 }}</b></figure>
            <div><h3>{{ $kitten[0] }}</h3><p>{{ $kitten[2] }} · Yeux bleus</p><span>Découvrir ↗</span></div>
        </a>
        @endforeach
    </div>
</section>

<section class="promise">
    <header class="reveal"><p>03 / NOTRE ENGAGEMENT</p><h2>Du premier souffle<br>au premier soir <em>chez vous.</em></h2></header>
    <div class="promise-list">
        <article class="reveal"><span>01</span><div><h3>Bien naître</h3><p>Des parents suivis, une santé surveillée et un environnement pensé pour eux.</p></div></article>
        <article class="reveal"><span>02</span><div><h3>Bien grandir</h3><p>Une socialisation naturelle au cœur de notre maison et de notre quotidien.</p></div></article>
        <article class="reveal"><span>03</span><div><h3>Bien se rencontrer</h3><p>Un accompagnement attentif pour faire naître une relation qui durera.</p></div></article>
    </div>
</section>

<section class="country-gateway">
    <div class="gateway-bg"><img src="https://chatteriesiberienderussie.fr/assets/bisous.jpg" alt="Bisous, chaton Sibérien"></div>
    <div class="gateway-content reveal"><p>Une seule passion, deux adresses</p><h2>Où commence<br>votre histoire ?</h2><div><a href="#"><small>Je suis en</small><strong>France</strong><span>↗</span></a><a href="#"><small>Je suis en</small><strong>Suisse</strong><span>↗</span></a></div></div>
</section>
@endsection
