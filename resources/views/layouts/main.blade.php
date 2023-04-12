<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
