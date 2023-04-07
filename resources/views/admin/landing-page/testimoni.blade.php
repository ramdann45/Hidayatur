@extends('admin.layouts.main')

@section('content')
    <section class="container mx-auto px-3">

        <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">Our Services
            </h2>
            <hr class="h-px my-8 bg-gray-200 border-0">
            <button type="button" data-modal-target="defaultModal" data-modal-toggle="defaultModal"
                class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"><i
                    class="fa fa-plus"></i></button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            @foreach ($testimoni as $t)
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a>
                        <img class="rounded-t-lg p-3" src="{{ $t->img }}" alt="{{ $t->nama }}" />
                    </a>
                    <div class="p-5">
                        <a>
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $t->nama }}</h5>
                        </a>
                        <p class="mb-3 font-normal text-white">{{ $t->pekerjaan }}</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $t->testimoni }}</p>
                        <button id="show-btn" data-modal-target="updateModal" data-modal-toggle="updateModal"
                            type="button"
                            class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                            data-id="{{ $t->id }}"><i class="fa fa-pen"></i></button>
                        <button id="delete-btn" type="button"
                            class="focus:outline-none text-white bg-red-800 hover:bg-red-900  focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
                            data-id="{{ $t->id }}"><i class="fa fa-trash-can"></i></button>
                    </div>
                </div>
            @endforeach
        </div>

    </section>

    <!-- Add modal -->
    <div id="defaultModal" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
        <div class="relative w-full h-full max-w-2xl md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Tambah Testimoni
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
                    <form id="add-btn" method="POST">
                        @csrf
                        <div class="mb-6">

                            <label class="block mb-2 mt-4 text-sm font-medium text-gray-900 dark:text-white"
                                for="nama_add">Nama Lengkap <span class="text-red-500">*</span></label>
                            <input
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                id="nama_add" name="nama_add" type="text">

                        </div>
                        <div class="mb-6">

                            <label class="block mb-2 mt-4 text-sm font-medium text-gray-900 dark:text-white"
                                for="pekerjaan_add">Pekerjaan <span class="text-red-500">*</span></label>
                            <input
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                id="pekerjaan_add" name="pekerjaan_add" type="text">

                        </div>
                        <div class="mb-6">

                            <label for="testimoni_add"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Testimoni <span
                                    class="text-red-500">*</span></label>
                            <textarea id="testimoni_add" name="testimoni_add" rows="4"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Isikan Testimoni"></textarea>
                        </div>
                        <div class="mb-6">

                            <label class="block mb-2 mt-4 text-sm font-medium text-gray-900 dark:text-white"
                                for="img_input">Upload Foto</label>
                            <input
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                aria-describedby="file_input_help" id="img_input" name="img_input" type="file"
                                accept="image/*">
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PNG, JPG or
                                JPEG (Max. 5MB).</p>

                        </div>
                        <div
                            class="flex items-center px-2 py-3 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Update Modal --}}
    <div id="updateModal" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
        <div class="relative w-full h-full max-w-2xl md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Ubah Data Testimoni
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="updateModal">
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

                    <form id="update-form" method="POST">
                        @csrf
                        <input type="hidden" name="id_update" id="id_update" value="">
                        <div class="mb-6">

                            <label class="block mb-2 mt-4 text-sm font-medium text-gray-900 dark:text-white"
                                for="nama_update">Nama Lengkap <span class="text-red-500">*</span></label>
                            <input
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                id="nama_update" name="nama_update" type="text">

                        </div>
                        <div class="mb-6">

                            <label class="block mb-2 mt-4 text-sm font-medium text-gray-900 dark:text-white"
                                for="pekerjaan_update">Pekerjaan <span class="text-red-500">*</span></label>
                            <input
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                id="pekerjaan_update" name="pekerjaan_update" type="text">

                        </div>
                        <div class="mb-6">

                            <label for="testimoni_update"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Testimoni <span
                                    class="text-red-500">*</span></label>
                            <textarea id="testimoni_update" name="testimoni_update" rows="4"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Isikan Testimoni"></textarea>
                        </div>

                        <img class="h-auto max-w-xs" alt="image description" id="img-update" width="250">
                        <div class="mb-6">

                            <label class="block mb-2 mt-4 text-sm font-medium text-gray-900 dark:text-white"
                                for="img_update">Ganti Foto</label>
                            <input
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                aria-describedby="file_input_help" id="img_update" name="img_update" type="file"
                                accept="image/*">
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PNG, JPG or
                                JPEG (Max. 5MB)</p>

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
    <script src="{{ asset('ajax/landing-page/testimoni.js') }}"></script>
@endsection
