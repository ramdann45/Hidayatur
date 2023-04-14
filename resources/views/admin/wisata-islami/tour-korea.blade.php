@extends('admin.layouts.main')

@section('content')
    <section class="container px-3">

        <form method="post" id="update-paket">
            @csrf
            <div class="mb-6">
                <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama Paket</label>
                <input type="text" id="nama" name="nama"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    required value="{{ $data->nama }}">
            </div>

            <div class="mb-6">
                <label for="title-1" class="block mb-2 text-sm font-medium text-gray-900">Title Hari Ke-1</label>
                <input type="text" id="title-1" name="title-1"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    required value="{{ $data->title_1 }}">
            </div>
            <div class="mb-6">
                <label for="hari-1" class="block mb-2 text-sm font-medium text-gray-900">Hari ke-1</label>
                <textarea id="hari-1" name="hari-1" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">{{ $data->hari_1 }}</textarea>
            </div>
            <div class="mb-6">
                <label for="title-2" class="block mb-2 text-sm font-medium text-gray-900">Title Hari Ke-2</label>
                <input type="text" id="title-2" name="title-2"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    required value="{{ $data->title_2 }}">
            </div>
            <div class="mb-6">
                <label for="hari-2" class="block mb-2 text-sm font-medium text-gray-900">Hari ke-2</label>
                <textarea id="hari-2" name="hari-2" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">{{ $data->hari_2 }}</textarea>
            </div>
            <div class="mb-6">
                <label for="title-3" class="block mb-2 text-sm font-medium text-gray-900">Title Hari Ke-3</label>
                <input type="text" id="title-3" name="title-3"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    required value="{{ $data->title_3 }}">
            </div>
            <div class="mb-6">
                <label for="hari-3" class="block mb-2 text-sm font-medium text-gray-900">Hari ke-3</label>
                <textarea id="hari-3" name="hari-3" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">{{ $data->hari_3 }}</textarea>
            </div>
            <div class="mb-6">
                <label for="title-4" class="block mb-2 text-sm font-medium text-gray-900">Title Hari Ke-4</label>
                <input type="text" id="title-4" name="title-4"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    required value="{{ $data->title_4 }}">
            </div>
            <div class="mb-6">
                <label for="hari-4" class="block mb-2 text-sm font-medium text-gray-900">Hari ke-4</label>
                <textarea id="hari-4" name="hari-4" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">{{ $data->hari_4 }}</textarea>
            </div>
            <div class="mb-6">
                <label for="title-5" class="block mb-2 text-sm font-medium text-gray-900">Title Hari Ke-5</label>
                <input type="text" id="title-5" name="title-5"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    required value="{{ $data->title_5 }}">
            </div>
            <div class="mb-6">
                <label for="hari-5" class="block mb-2 text-sm font-medium text-gray-900">Hari ke-5</label>
                <textarea id="hari-5" name="hari-5" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">{{ $data->hari_5 }}</textarea>
            </div>
            <figure class="max-w-lg mb-6">
                <img class="h-auto max-w-full rounded-lg" src="{{ asset($data->img) }}" alt="{{ $data->slug }}">
                <figcaption class="mt-2 text-sm text-center text-gray-500">Foto Paket</figcaption>
            </figure>

            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900" for="img-input">Ganti Foto Paket</label>
                <input
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50"
                    aria-describedby="file_input_help" id="img-input" accept="image/*" name="img-input" type="file">
                <p class="mt-1 text-sm text-gray-500" id="file_input_help">PNG, JPG or JPEG (MAX 10Mb).</p>
            </div>

            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Ubah
                Data</button>
        </form>


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
            $('#update-paket').submit(function(e) {
                e.preventDefault();

                let formData = new FormData(this);

                $.ajax({
                    url: "{{ route('wisata.islami.korea.admin.update') }}",
                    type: "POST",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
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
                        }, 1000);
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
