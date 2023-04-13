@extends('layouts.main')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/acc.css') }}">
@endsection

@section('content')
    <section class="container paket-islami px-3">

        <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16 pt-5">
            <h2 class="mb-4 text-2xl md:text-4xl tracking-tight font-extrabold text-gray-900">{{ $data->nama }}
            </h2>
            <hr class="h-px my-8 bg-gray-200 border-0">
        </div>

        <section class="bg-white dark:bg-gray-900">
            <div class="gap-8 items-center px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 lg:px-6">
                <img class="w-full" src="{{ asset($data->img) }}" alt="{{ $data->nama }}">
                <div class="mt-4 md:mt-0">
                    <section class="bg-white dark:bg-gray-900">
                        <div class="max-w-2xl px-4 py-8 mx-auto lg:py-8">
                            <h2 class="mb-1 text-xl font-bold text-gray-900 dark:text-white">Booking Tour</h2>
                            <p class="mb-5 text-sm text-gray-900 dark:text-white">Anda juga bisa request booking
                                dengan mengisi form berikut:</p>
                            <form method="post" id="form-booking">
                                @csrf
                                <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                                    <div class="sm:col-span-2">
                                        <label for="nama"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                                        <input type="text" name="nama" id="nama"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Hidayatur" required="" autofocus>
                                    </div>
                                    <div class="w-full">
                                        <label for="nomer-hp"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No.Hp</label>
                                        <input type="number" name="nomer-hp" id="nomer-hp"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            required="" placeholder="0877xxxx">
                                    </div>
                                    <div class="w-full">
                                        <label for="email"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                        <input type="email" name="email" id="email"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="hidayatur@gmail.com" required="">
                                    </div>
                                    <div>
                                        <label for="kategori"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilihan
                                            Destinasi</label>
                                        <select id="kategori" name="kategori"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                            <option selected="">Umroh Ramadhan</option>
                                            <option value="Umroh + Turki">Umroh + Turki</option>
                                            <option value="Umroh + Dubai">Umroh + Dubai</option>
                                            <option value="Umroh + Mesir">Umroh + Mesir</option>
                                            <option value="Umroh + Uzbekistan">Umroh + Uzbekistan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="grid gap-4 mb-4 sm:grid-cols-1 sm:gap-6 sm:mb-5">
                                    <div class="sm:col-span-2">
                                        <label for="deskripsi"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                        <textarea id="deskripsi" name="deskripsi" rows="8"
                                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Isikan informasi tambahan yang ingin Anda sampaikan"></textarea>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <button type="submit"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                        Kirim
                                    </button>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
            <div class="gap-8 items-start px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 lg:px-6">
                <div class="accordion js-accordion">
                    <div class="accordion__item js-accordion-item active">
                        <div class="accordion-header js-accordion-header">{{ $data->title_1 }}</div>
                        <div class="accordion-body js-accordion-body">
                            <div class="accordion-body__contents">
                                <h5 style="text-align: justify;">{{ $data->hari_1 }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item js-accordion-item">
                        <div class="accordion-header js-accordion-header">{{ $data->title_2 }}</div>
                        <div class="accordion-body js-accordion-body">
                            <div class="accordion-body__contents">
                                <h6 style="text-align: justify;">
                                    {{ $data->hari_2 }}
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item js-accordion-item">
                        <div class="accordion-header js-accordion-header">{{ $data->title_3 }}</div>
                        <div class="accordion-body js-accordion-body">
                            <div class="accordion-body__contents">
                                <h6 style="text-align: justify;">
                                    {{ $data->hari_3 }}
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item js-accordion-item">
                        <div class="accordion-header js-accordion-header">{{ $data->title_4 }}</div>
                        <div class="accordion-body js-accordion-body">
                            <div class="accordion-body__contents">
                                <h6 style="text-align: justify;">
                                    {{ $data->hari_4 }}
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item js-accordion-item">
                        <div class="accordion-header js-accordion-header">{{ $data->title_5 }}</div>
                        <div class="accordion-body js-accordion-body">
                            <div class="accordion-body__contents">
                                <h6 style="text-align: justify;">
                                    {{ $data->hari_5 }}
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gap-8 mt-8 items-center px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-1 lg:px-6">
                    <h2 class="mb-6 text-2xl md:text-3xl tracking-tight font-extrabold text-gray-900 text-center">Paket
                        Tour lainnya
                    </h2>
                    <a href="{{ route('umroh.plus.index') }}">
                        <img src="{{ asset('assets/img/paket/paket-1/hidayatur-paket-umroh-dan-dubai-11-hari-600x600.jpeg') }}"
                            alt="">
                    </a>
                </div>
            </div>
        </section>

        @include('paket-perjalanan.umroh.child-page.ketentuan')
    </section>
@endsection

@section('script')
    <script>
        let accordion = (function() {

            let $accordion = $('.js-accordion');
            let $accordion_header = $accordion.find('.js-accordion-header');
            let $accordion_item = $('.js-accordion-item');

            // default settings
            let settings = {
                // animation speed
                speed: 400,

                // close all other accordion items if true
                oneOpen: false
            };

            return {
                // pass configurable object literal
                init: function($settings) {
                    $accordion_header.on('click', function() {
                        accordion.toggle($(this));
                    });

                    $.extend(settings, $settings);

                    // ensure only one accordion is active if oneOpen is true
                    if (settings.oneOpen && $('.js-accordion-item.active').length > 1) {
                        $('.js-accordion-item.active:not(:first)').removeClass('active');
                    }

                    // reveal the active accordion bodies
                    $('.js-accordion-item.active').find('> .js-accordion-body').show();
                },
                toggle: function($this) {

                    if (settings.oneOpen && $this[0] != $this.closest('.js-accordion').find(
                            '> .js-accordion-item.active > .js-accordion-header')[0]) {
                        $this.closest('.js-accordion')
                            .find('> .js-accordion-item')
                            .removeClass('active')
                            .find('.js-accordion-body')
                            .slideUp()
                    }

                    // show/hide the clicked accordion item
                    $this.closest('.js-accordion-item').toggleClass('active');
                    $this.next().stop().slideToggle(settings.speed);
                }
            }
        })();

        $(document).ready(function() {
            accordion.init({
                speed: 300,
                oneOpen: true
            });
        });

        $(document).on("click", ".naccs .menu div", function() {
            var numberIndex = $(this).index();

            if (!$(this).is("active")) {
                $(".naccs .menu div").removeClass("active");
                $(".naccs ul li").removeClass("active");

                $(this).addClass("active");
                $(".naccs ul").find("li:eq(" + numberIndex + ")").addClass("active");

                var listItemHeight = $(".naccs ul")
                    .find("li:eq(" + numberIndex + ")")
                    .innerHeight();
                $(".naccs ul").height(listItemHeight + "px");
            }

            const items = document.querySelectorAll(".accordion button");

            function toggleAccordion() {
                const itemToggle = this.getAttribute('aria-expanded');

                for (i = 0; i < items.length; i++) {
                    items[i].setAttribute('aria-expanded', 'false');
                }

                if (itemToggle == 'false') {
                    this.setAttribute('aria-expanded', 'true');
                }
            }

            items.forEach(item => item.addEventListener('click', toggleAccordion));
        });
    </script>

    {{-- Form Booking --}}
    <script>
        $('#form-booking').submit(function(e) {
            e.preventDefault();

            var formData = $(this).serialize();

            $.ajax({
                type: "POST",
                url: `/form-booking`,
                data: formData,
                cache: false,
                success: function(response) {
                    if (response.success) {
                        window.location.reload();
                    }
                    Swal.fire({
                        type: 'success',
                        icon: 'success',
                        title: `${response.message}`,
                        showConfirmButton: false,
                        timer: 3000
                    });
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
    </script>
@endsection
