@extends('admin.layouts.main')

@section('content')
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
                    <div class="relative items-center bg-gray-50 rounded-lg shadow sm:flex">
                        <a>
                            <img class="w-full rounded-lg" src="{{ $p->image }}" alt="">
                        </a>
                        <div class="p-5">
                            <h3 class="text-xl font-bold tracking-tight text-gray-900">
                                <a href="#">{{ $p->title }}</a>
                            </h3>
                        </div>

                        <!-- Modal toggle -->
                        <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" id="show-penawaran"
                            class="text-white absolute top-1 right-0 bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                            type="button" data-id="{{ $p->id }}">
                            <i class="fa fa-pen-to-square"></i>
                        </button>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <div id="defaultModal" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
        <div class="relative w-full h-full max-w-2xl md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Ubah Data Penawaran
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="defaultModal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">

                    <form id="update-btn" method="POST">
                        @csrf
                        <div class="mb-6">
                            <label for="title_update"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                            <input type="text" name="title_update" id="title_update"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="name@flowbite.com" required>
                        </div>
                        <img class="h-auto max-w-xs" alt="image description" id="img-update" width="250">
                        <input type="hidden" name="id_update" id="id_update" value="">
                        <div class="mb-6">

                            <label class="block mb-2 mt-4 text-sm font-medium text-gray-900 dark:text-white"
                                for="img_input">Ganti Foto</label>
                            <input
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                aria-describedby="file_input_help" id="img_input" name="img_input" type="file"
                                accept="image/*">
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PNG, JPG or
                                JPEG (Max. 5MB). (opsional upload)</p>

                        </div>
                        <div
                            class="flex items-center px-2 py-3 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Ubah
                                Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('ajax/landing-page/penawaranTerbatas.js') }}"></script>
@endsection
