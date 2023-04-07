@extends('admin.layouts.main')

@section('content')
    <section class="container paket-islami px-3">

        <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">Logo Perusahaan
            </h2>
            <hr class="h-px my-8 bg-gray-200 border-0">
            <button type="button" id="show-btn" data-modal-target="updateModal" data-modal-toggle="updateModal"
                class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"><i
                    class="fa fa-pen"></i></button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-1 gap-4">
            <div
                style="display: flex; justify-content: center; align-items: center; flex-direction: column; margin-bottom: 15px; position: relative;">
                @foreach ($logo as $l)
                    <img width="500" class="h-auto max-w-full rounded-lg" src="{{ $l->src }}"
                        alt="Wisata Islami terbaru">
                @endforeach
            </div>
        </div>

    </section>

    {{-- Update Modal --}}
    <div id="updateModal" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
        <div class="relative w-full h-full max-w-2xl md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Ubah Logo Perusahaan
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
                        @foreach ($logo as $l)
                            <h3 class="text-white mb-3">Logo Saat Ini</h3>
                            <img src="{{ $l->src }}" class="h-auto max-w-xs" alt="{{ $l->nama }}" width="250">
                        @endforeach
                        <div class="mb-6">

                            <label class="block mb-2 mt-4 text-sm font-medium text-gray-900 dark:text-white"
                                for="nama_update">Nama Perusahaan</label>
                            <input
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                id="nama_update" name="nama_update" type="text">

                        </div>
                        <div class="mb-6">

                            <label class="block mb-2 mt-4 text-sm font-medium text-gray-900 dark:text-white"
                                for="img_update">Ganti Logo</label>
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
    <script>
        // SHOW
        $(document).on('click', '#show-btn', function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            let id = 1;

            $.ajax({
                url: `/logo-perusahaan/${id}`,
                type: "GET",
                cache: false,
                success: function(response) {
                    $('#id_update').val(response.data.id);
                    $('#nama_update').val(response.data.nama);
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        });

        // UPDATE
        $('#update-form').submit(function(e) {
            e.preventDefault();

            var formData = new FormData(this);

            $.ajax({
                type: "POST",
                url: `logo-perusahaan/update`,
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function(response) {
                    setTimeout(() => {
                        if (response.success) {
                            window.location.reload();
                        }
                    }, 1000);

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
