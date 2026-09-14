@extends('layouts.app')

@section('title', 'Sibérien de Russie | Chatterie familiale')
@section('body_class', 'home-page')

@push('styles')
    @vite('resources/css/pages/home.css')
@endpush

@section('content')

    <section class="home-hero">
        <div class="hero-background">
            <img
                src="{{ asset('images/oslo.jpg') }}"
                alt="Oslo, Sibérien de Russie"
            >

            <div class="hero-image-overlay"></div>
        </div>

        <div class="hero-decoration" aria-hidden="true">
            <span>S</span>
        </div>

        <div class="hero-content container">
            <div class="hero-copy">
                <p class="hero-eyebrow">
                    Chatterie familiale
                    <span></span>
                    France & Suisse
                </p>

                <h1>
                    La douceur<br>
                    <em>à l’état sauvage.</em>
                </h1>

                <p class="hero-description">
                    Des Sibériens et Neva Masquerade élevés au cœur de notre
                    famille, dans le respect de leur santé, de leur équilibre
                    et de leur personnalité.
                </p>

                <div class="hero-actions">
                    <a href="{{ route('cats') }}" class="hero-primary-button">
                        <span>Découvrir nos chatons</span>

                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M5 12H19M13 6L19 12L13 18"/>
                        </svg>
                    </a>

                    <a href="#chatterie" class="hero-secondary-button">
                        Notre histoire
                    </a>
                </div>
            </div>
        </div>

        <div class="hero-bottom">
            <div class="hero-bottom-inner">
                <div class="hero-signature">
                    <span class="signature-line"></span>

                    <p>
                        <strong>Sibériens & Neva Masquerade</strong>
                        <small>Inscrits au LOOF</small>
                    </p>
                </div>

                <div class="hero-values">
                    <article>
                        <strong>01</strong>
                        <span>Élevage<br>familial</span>
                    </article>

                    <article>
                        <strong>02</strong>
                        <span>Santé<br>suivie</span>
                    </article>

                    <article>
                        <strong>03</strong>
                        <span>Socialisation<br>précoce</span>
                    </article>
                </div>
            </div>
        </div>

        <a href="#chatterie" class="hero-scroll" aria-label="Découvrir la suite">
            <span>Explorer</span>

            <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M12 4V20M6 14L12 20L18 14"/>
            </svg>
        </a>
    </section>

    <section class="home-introduction" id="chatterie">
        <div class="introduction-container container">
            <div class="introduction-heading">
                <p class="section-number">01 — Notre histoire</p>

                <h2>
                    Bien plus qu’un élevage,
                    <em>une histoire de famille.</em>
                </h2>
            </div>

            <div class="introduction-content">
                <p class="introduction-lead">
                    Chez nous, les chatons ne grandissent pas à l’écart.
                    Ils partagent notre quotidien, nos espaces et la vie de
                    nos enfants dès leurs premiers jours.
                </p>

                <p>
                    Cette proximité leur permet de développer un tempérament
                    équilibré, curieux et profondément attaché à l’humain.
                    Leur santé, leur alimentation et leur bien-être guident
                    chacune de nos décisions.
                </p>

                <a href="{{ route('adoption') }}" class="text-link">
                    <span>Découvrir notre approche</span>

                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M5 12H19M13 6L19 12L13 18"/>
                    </svg>
                </a>
            </div>
        </div>

        <div class="introduction-word" aria-hidden="true">
            RUSSIE
        </div>
    </section>

@endsection
