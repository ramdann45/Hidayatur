@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('OwlCarousel2-2.3.4/docs/assets/owlcarousel/assets/owl.default.css') }}" />
    <link rel="stylesheet" href="{{ asset('light-box-js/css/lightgallery.css') }}">
@endsection

@section('content')
    <section class="bg-white hero">
        <div class="mx-auto place-self-center">
            @foreach ($logo as $l)
                <img class="mx-auto" src="{{ asset($l->src) }}" width="250" alt="">
            @endforeach
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl">
                A Journey For Iman</h1>
        </div>
        <div class="px-4 mx-auto text-center md:max-w-screen-md lg:max-w-screen-lg lg:px-36 partners">
            <span class="font-semibold text-white uppercase">Our Social Media</span>
            <div class="grid grid-cols-4 mt-3 text-gray-500 md:grid-cols-4 lg:grid-cols-4">
                <a href="https://www.instagram.com/hidayatur.id/" target="_blank" class="h-9 text-white ">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="https://www.tiktok.com/@hidayatur.id" target="_blank" class="h-9 text-white ">
                    <i class="fa-brands fa-tiktok"></i>
                </a>
                <a href="https://www.youtube.com/channel/UC0SVIXma-_XpEkJTr6Eg8Cg" target="_blank" class="h-9 text-white ">
                    <i class="fa-brands fa-youtube"></i>
                </a>
                <a href="mailto:hidayatur.id@gmail.com" class="h-9 text-white ">
                    <i class="fa fa-envelope"></i>
                </a>
            </div>
        </div>
    </section>

    <section class="container mx-auto lg:mt-10 sm:mt-2 px-3">
        <div id="controls-carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                @foreach ($heroimg as $h)
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset($h->src) }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="{{ $h->nama }}">
                    </div>
                @endforeach
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </section>

    <section class="bg-white">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">
            <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">Penawaran Terbatas
                </h2>
                <p class="font-light text-gray-500 lg:mb-16 sm:text-xl">Buat ibadah dan liburan mu lebih
                    berkesan dengan paket yang menarik dari Kami.</p>
            </div>
            <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2">
                @foreach ($penawaran as $p)
                    <div class="items-center bg-gray-50 rounded-lg shadow sm:flex">
                        <a>
                            <img class="w-full rounded-lg" src="{{ $p->image }}" alt="office content 1">
                        </a>
                        <div class="p-5">
                            <h3 class="text-xl font-bold tracking-tight text-gray-900">
                                <a>{{ $p->title }}</a>
                            </h3>
                            <a href="https://api.whatsapp.com/send?phone=6282120282823&text=Hallo%20admin%20Hidayatur,%20saya%20ingin%20bertanya"
                                target="_blank">
                                <button type="button"
                                    class="mt-3 mb-4 text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Klik
                                    DIsini</button>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="container mx-auto px-3">

        <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">Our Services
            </h2>
            <hr class="h-px my-8 bg-gray-200 border-0">
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @foreach ($services as $s)
                <div>
                    <img width="500" class="h-auto max-w-full rounded-lg" src="{{ $s->src }}" alt="Our Services">
                </div>
            @endforeach
        </div>

    </section>

    <section class="container paket-islami px-3">

        <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">Paket wisata Islami
                terbaru 2023
            </h2>
            <hr class="h-px my-8 bg-gray-200 border-0">
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            @foreach ($terbaru as $t)
                <div style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
                    <img class="h-auto max-w-full rounded-lg" src="{{ $t->src }}" alt="Wisata Islami terbaru">
                    <a href="https://api.whatsapp.com/send?phone=6282120282823&text=Hallo%20admin%20Hidayatur,%20saya%20ingin%20bertanya"
                        target="_blank">
                        <button type="button"
                            class="mt-3 mb-4 text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Hubungi
                            DIsini</button>
                    </a>
                </div>
            @endforeach
        </div>

    </section>

    <section class="container paket-islami px-3">

        <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">Pilihan Paket Umroh
            </h2>
            <hr class="h-px my-8 bg-gray-200 border-0">
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            @foreach ($umroh as $u)
                <div style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
                    <img class="h-auto max-w-full rounded-lg" width="400" src="{{ $u->src }}" alt="">
                    <a href="https://api.whatsapp.com/send?phone=6282120282823&text=Hallo%20admin%20Hidayatur,%20saya%20ingin%20bertanya"
                        target="_blank">
                        <button type="button"
                            class="mt-3 mb-4 text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Hubungi
                            Disini</button>
                    </a>
                </div>
            @endforeach
        </div>

    </section>

    <section class="container paket-islami px-3">

        <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">Promo Umroh plus Wisata
            </h2>
            <hr class="h-px my-8 bg-gray-200 border-0">
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            @foreach ($umrohPlus as $u)
                <div style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
                    <img class="h-auto max-w-full rounded-lg" width="400" src="{{ $u->src }}" alt="">
                    <a href="https://api.whatsapp.com/send?phone=6282120282823&text=Hallo%20admin%20Hidayatur,%20saya%20ingin%20bertanya"
                        target="_blank">
                        <button type="button"
                            class="mt-3 mb-4 text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Hubungi
                            Disini</button>
                    </a>
                </div>
            @endforeach
        </div>

    </section>

    <section class="container mx-auto">
        <div class="gtco-testimonials">
            <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">Testimoni
                </h2>
                <hr class="h-px my-8 bg-gray-200 border-0">
            </div>
            <div class="owl-carousel owl-carousel1 owl-theme">
                @foreach ($testi as $t)
                    <div>
                        <div class="card text-center"><img class="card-img-top" src="{{ $t->img }}"
                                alt="{{ $t->nama }}">
                            <div class="card-body">
                                <h5>{{ $t->nama }} <br />
                                    <span> {{ $t->pekerjaan }} </span>
                                </h5>
                                <p class="card-text">“ {{ $t->testimoni }} ”</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
                <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900">Our Blog
                </h2>
                <p class="font-light text-gray-500 sm:text-xl">Jangan lewatkan berita ter-update seputar
                    umroh, travel dll </p>
            </div>
            <div class="grid gap-8 lg:grid-cols-3">

                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                    <a href="#">
                        <img class="rounded-t-lg"
                            src="{{ asset('assets/img/paket/paket-1/hidayatur-paket-umroh-dan-dubai-11-hari-600x600.jpeg') }}"
                            alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700">Here are the biggest enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>
                        <a href="#"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                            Read more
                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>


                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                    <a href="#">
                        <img class="rounded-t-lg"
                            src="{{ asset('assets/img/paket/paket-2/hidayatur-tour-travel-layanan-umroh-plus.jpeg') }}"
                            alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700">Here are the biggest enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>
                        <a href="#"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                            Read more
                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>


                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                    <a href="#">
                        <img class="rounded-t-lg"
                            src="{{ asset('assets/img/paket/paket-2/hidayatur-tour-travel-umroh-pariwisata.jpeg') }}"
                            alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700">Here are the biggest enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>
                        <a href="#"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                            Read more
                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="bg-green-200">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-md sm:text-center">
                <h2 class="mb-4 text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">Subscribe
                </h2>
                <p class="mx-auto mb-8 max-w-2xl font-light text-gray-500 md:mb-12 sm:text-xl">Dapatkan
                    informasi terupdate seputar umroh, travel dan exclusive diskon untuk Anda!.</p>
                <form>
                    @csrf
                    <div class="items-center mx-auto mb-3 space-y-4 max-w-screen-sm sm:flex sm:space-y-0">
                        <div class="relative w-full">
                            <label for="email" class="hidden mb-2 text-sm font-medium text-gray-900">Email
                                address</label>
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                                    </path>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                </svg>
                            </div>
                            <input
                                class="block p-3 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:rounded-none sm:rounded-l-lg focus:ring-primary-500 focus:border-primary-500"
                                placeholder="Enter your email" type="email" id="email_subs" name="email_subs"
                                required="">
                        </div>
                        <div>
                            <button id="btn_subs" type="button"
                                class="py-3 px-5 w-full text-sm font-medium text-center text-white rounded-lg border cursor-pointer bg-blue-700 border-primary-600 sm:rounded-none sm:rounded-r-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300">Subscribe</button>
                        </div>
                    </div>
                    <div class="mx-auto max-w-screen-sm text-sm text-left text-gray-500 newsletter-form-footer">
                        Kami akan menjamin perlindungan data Anda!.
                </form>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script src="{{ asset('OwlCarousel2-2.3.4/dist/owl.carousel.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });

        // ADD
        $(document).ready(function() {
            $(document).on('click', '#btn_subs', function() {

                const email = $('#email_subs').val();

                $.ajax({
                    url: `/subscriber`,
                    type: "POST",
                    data: {
                        "email": email
                    },
                    cache: false,
                    success: function(response) {
                        Swal.fire({
                            type: 'success',
                            icon: 'success',
                            title: `${response.message}`,
                            showConfirmButton: false,
                            timer: 3000
                        });

                        setTimeout(() => {
                            if (response.success) {
                                window.location.reload();
                            }
                        }, 2000);
                    },
                    error: function(xhr, status, error) {
                        Swal.fire({
                            type: 'error',
                            icon: 'error',
                            title: `Gagal Menambah Data!`,
                            showConfirmButton: false,
                            timer: 3000
                        });
                    }
                });
            });
        });
    </script>
    <script>
        (function() {
            "use strict";

            var carousels = function() {
                $(".owl-carousel1").owlCarousel({
                    loop: true,
                    center: true,
                    margin: 0,
                    nav: true,
                    responsiveClass: true,
                    autoplay: true,
                    autoplayTimeout: 2000,
                    autoplayHoverPause: true,
                    responsive: {
                        0: {
                            items: 1,
                        },
                        680: {
                            items: 2,
                        },
                        1000: {
                            items: 3,
                        }
                    }
                });
            };

            (function($) {
                carousels();
            })(jQuery);
        })();
    </script>
    <script src="{{ asset('light-box-js/js/lightgallery.js') }}"></script>
    <script>
        const imagPop = document.getElementById("penawaran");
        lightGallery(imagPop);
    </script>
@endsection
