@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/galeri.css') }}">
    <link rel="stylesheet" href="{{ asset('light-box-js/css/lightgallery.css') }}">
    <style>
        .child-galeri {
            position: relative;
        }

        .child-galeri:hover::after {
            content: '🔎';
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, .2);
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.5rem;
        }
    </style>
@endsection

@section('content')
    <section class="galeri container mx-auto px-3">

        <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
            <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900">Galeri
                Hidayatur
            </h2>
            <hr class="h-px my-8 bg-gray-200 border-0">
        </div>


        <div id="lightgallery" class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @foreach ($galeri as $g)
                <a class="child-galeri" href="{{ $g->src }}">
                    <img class="h-auto max-w-full rounded-lg" src="{{ $g->src }}" alt="{{ $g->nama }}">
                </a>
            @endforeach
        </div>

    </section>
@endsection

@section('script')
    <script src="{{ asset('light-box-js/js/lightgallery.js') }}"></script>
    <script>
        const imagPop = document.getElementById("lightgallery");
        lightGallery(imagPop);
    </script>
@endsection
