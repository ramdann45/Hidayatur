<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="keywords"
        content="umroh, ibadah umroh, Mekah, Madinah, perusahaan penyedia jasa umroh, hidayatur, islam, islami, muslim, travel">
    <meta name="description"
        content="Kami adalah partner terpercaya dalam menjalankan ibadah umroh Anda dengan pelayanan yang terbaik dan berkualitas.">
    <meta name="author" content="Contech.id">
    <meta name="language" content="id">
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="7 days">
    <meta name="copyright" content="Kembangin Teknologi Kita">
    <meta name="geo.placename" content="Indonesia">
    <meta name="contact" content="contech.id@gmail.com">

    <meta property="og:title" content="Hidayatur, A Journey For Iman - Hidayatur">
    <meta property="og:description"
        content="Kami adalah partner terpercaya dalam menjalankan ibadah umroh Anda dengan pelayanan yang terbaik dan berkualitas.">
    <meta property="og:image" content="{{ asset('assets/img/thumbnail.jpg') }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://hidayatur.id">

    {{-- FAVICON --}}
    <link rel="shortcut icon" href="{{ asset('assets/img/logo/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('assets/img/logo/hidayatur-favicon.png') }}">

    {{-- FLOW BITE --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />

    {{-- CUSTOM CSS --}}
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/whatsapp.css') }}">
    @yield('css')

    {{-- font awesome --}}
    <link rel="stylesheet" href="{{ asset('fontawesome-6.4.0/css/all.min.css') }}">
    <title>{{ $title }}</title>
</head>

<body>

    @include('partials.navbar')
    @include('partials.whatsapp-toggle')

    @yield('content')

    @include('partials.footer')

    {{-- FLOW BITE --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>

    {{-- AJAX JQUERY --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    {{-- SWEET ALERT --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- TOGGLE WHATSAPP --}}
    <script>
        // ALERT WHATSAPP
        // CLOSE
        const closeCs = document.querySelector('.alert-wa .atas .close');
        closeCs.addEventListener('click', function(e) {
            e.target.parentElement.parentElement.parentElement.style.visibility = "hidden";
            e.target.parentElement.parentElement.parentElement.style.opacity = "0";
        });

        // toggle whatsapp
        const toggleWhatsapp = document.querySelector('.btn-whatsapp-pulse');
        toggleWhatsapp.addEventListener('click', function() {
            closeCs.parentElement.parentElement.style.visibility = "visible";
            closeCs.parentElement.parentElement.style.opacity = "1";
        });
    </script>

    @yield('script')
</body>

</html>
