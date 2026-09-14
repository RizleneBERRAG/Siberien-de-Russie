<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta
        name="description"
        content="@yield('meta_description', 'Chatterie familiale spécialisée dans le Sibérien et le Neva Masquerade LOOF.')"
    >

    <title>@yield('title', 'Sibérien de Russie')</title>

    @vite([
        'resources/css/app.css',
        'resources/css/components/header.css',
        'resources/css/components/footer.css',
        'resources/js/app.js'
    ])

    @stack('styles')
</head>

<body class="@yield('body_class')">
@include('partials.header')

<main>
    @yield('content')
</main>

@include('partials.footer')

@stack('scripts')
</body>
</html>
