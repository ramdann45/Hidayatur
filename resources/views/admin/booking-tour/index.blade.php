@extends('admin.layouts.main')

@section('content')
    <section class="container px-1">
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                    Data Booking
                </caption>
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No.
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            No.Hp
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Destinasi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Deskripsi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Waktu Booking
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status Response
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($booking as $s)
                        <tr class="{{ $s->response === 1 ? 'bg-green-700' : 'bg-gray-600' }} border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $no++ }}
                            </th>
                            <td class="px-6 py-4 text-white">
                                {{ $s->nama }}
                            </td>
                            <td class="px-6 py-4 text-white">
                                {{ $s->no_hp }}
                            </td>
                            <td class="px-6 py-4 text-white">
                                {{ $s->email }}
                            </td>
                            <td class="px-6 py-4 text-white">
                                {{ $s->destinasi }}
                            </td>
                            <td class="px-6 py-4 text-white">
                                {{ $s->deskripsi }}
                            </td>
                            <td class="px-6 py-4 text-white">
                                {{ $s->created_at }}
                            </td>
                            <td class="px-6 py-4 text-white">
                                @if ($s->response === 0)
                                    <button id="status-booking" type="button" data-id="{{ $s->id }}"
                                        class="text-white bg-red-800 hover:bg-red-900 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Menunggu
                                        Response</button>
                                @elseif ($s->response === 1)
                                    <p class="text-xl"><i class="fa fa-circle-check"></i></p>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot class="bg-gray-900">
                    <tr class="font-semibold text-gray-900 dark:text-white">
                        <th scope="row" class="px-6 py-3 text-base">Total Booking</th>
                        <td class="px-6 py-3">{{ $booking->count() }}</td>
                        <td class="px-6 py-3"></td>
                        <td class="px-6 py-3 bg-green-700">Total Response</td>
                        <td class="px-6 py-3 bg-green-700">{{ $booking->where('response', 1)->count() }}</td>
                        <td class="px-6 py-3 bg-red-700">Total Belum diresponse</td>
                        <td class="px-6 py-3 bg-red-700">{{ $booking->where('response', 0)->count() }}</td>
                        <td class="px-6 py-3"></td>
                    </tr>
                </tfoot>
            </table>
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
        // ubah status
        $(document).on('click', '#status-booking', function() {
            const id = $(this).data('id');
            Swal.fire({
                title: 'Apakah Admin telah meresponse booking ini?',
                text: 'Data yang sudah diubah tidak dapat dikembalikan.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: `/booking-tour/` + id,
                        type: 'post',
                        dataType: 'json',
                        data: {
                            'id': id
                        },
                        success: function(data) {
                            Swal.fire({
                                title: 'Berhasil!',
                                icon: 'success',
                                confirmButtonColor: '#3085d6',
                                confirmButtonText: 'OK'
                            }).then((result) => {
                                if (result.value) {
                                    location.reload();
                                }
                            });
                        },
                        error: function(data) {
                            console.log('Error:', data);
                        }
                    });
                }
            });
        });
    </script>
@endsection
