@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')
    <section class="bg-white hero-contact">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-12">
            <iframe width="100%" height="450" src="https://www.youtube.com/embed/QYK10zQKDBw" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>
    </section>

    <section class="bg-white ">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-5 mb-5">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl">
                    Kontak Kami</h1>
                <hr class="h-px my-8 bg-gray-200 border-0">

                <dl class="max-w-md text-gray-900 divide-y divide-gray-200">
                    <div class="flex flex-col pb-3">
                        <dt class="mb-1 text-gray-500 md:text-lg">Alamat Email</dt>
                        <dd class="text-lg font-semibold">hidayatur.id@gmail.com</dd>
                    </div>
                    <div class="flex flex-col py-3">
                        <dt class="mb-1 text-gray-500 md:text-lg">Alamat</dt>
                        <dd class="text-lg font-semibold">Jl. Pamanukan No.12, Antapani Kulon, Kec. Antapani, Kota Bandung,
                            Jawa Barat 40291</dd>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg">Phone number</dt>
                        <dd class="text-lg font-semibold">+62 821-2028-2823 (Kang Abell) / +966 54 597 7974 (Admin
                            Hidayatur)</dd>
                    </div>
                </dl>

            </div>
            <div class="lg:mt-0 lg:col-span-7 lg:flex">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.8252558811337!2d107.65278451538866!3d-6.911486669565042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7ee70e8cf51%3A0xf3008838bd4c800a!2sJl.%20Pamanukan%20No.12%2C%20Antapani%20Kulon%2C%20Kec.%20Antapani%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040291!5e0!3m2!1sid!2sid!4v1680258968381!5m2!1sid!2sid"
                    width="100%" style="border-radius: 10px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-6">
            <dl class="grid max-w-screen-lg gap-8 mx-auto text-gray-900 grid-cols-2 md:grid-cols-4">
                <div class="flex flex-col items-center justify-center">
                    <a href="https://www.instagram.com/hidayatur.id/" target="_blank">
                        <dt class="mb-2 text-3xl md:text-4xl font-extrabold"><i class="fa-brands fa-whatsapp"></i></dt>
                    </a>
                    <dd class="font-light text-gray-500">Hidayatur.id</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <a href="https://www.tiktok.com/@hidayatur.id" target="_blank">
                        <dt class="mb-2 text-3xl md:text-4xl font-extrabold"><i class="fa-brands fa-tiktok"></i></dt>
                    </a>
                    <dd class="font-light text-gray-500">@Hidayatur.id</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <a href="https://www.youtube.com/channel/UC0SVIXma-_XpEkJTr6Eg8Cg" target="_blank">
                        <dt class="mb-2 text-3xl md:text-4xl font-extrabold"><i class="fa-brands fa-youtube"></i></dt>
                    </a>
                    <dd class="font-light text-gray-500">Hidayatur id</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <a href="mailto:hidayatur.id@gmail.com">
                        <dt class="mb-2 text-3xl md:text-4xl font-extrabold"><i class="fa fa-envelope"></i></dt>
                    </a>
                    <dd class="font-light text-gray-500">hidayatur.id@gmail.com</dd>
                </div>
            </dl>
        </div>
    </section>

    <section class="bg-green-200">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-md sm:text-center">
                <h2 class="mb-4 text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">Subscribe
                </h2>
                <p class="mx-auto mb-8 max-w-2xl font-light text-gray-500 md:mb-12 sm:text-xl">Dapatkan
                    informasi terupdate seputar umroh, travel dan exclusive diskon untuk Anda!.</p>
                <form action="#">
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
@endsection
