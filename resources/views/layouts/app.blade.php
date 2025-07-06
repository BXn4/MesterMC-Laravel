<!DOCTYPE html>
<html lang="hu"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MesterMC')</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/villager.png') }}" type="image/x-icon">

    <link href="{{ asset('assets/styles/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ asset('assets/styles/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/bs_config.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="{{ asset('assets/styles/css2.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/styles/uicons-brands.css') }}">


</head>


<body class="min-height: 100vh;">
    @include('layouts.header')

    <main class="">
        @yield('content')
    </main>

    @include('layouts.footer')
</body>

</html>
