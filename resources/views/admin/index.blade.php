@extends('admin.layouts.main')

@section('content')
    <section>
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-3xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl">
                    Assalammualaikum, {{ Auth::user()->name }}</h1>
                <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
                    <div>
                        <div class="flex justify-start items-center mb-4 w-10 h-10 rounded-full lg:h-12 lg:w-12">
                            <h1 class="text-3xl">{{ $booking }}</h1>
                        </div>
                        <h3 class="mb-2 text-xl font-bold">Jumlah Booking</h3>
                    </div>
                    <div>
                        <div
                            class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12">
                            <h1 class="text-3xl">{{ $notRespon }}</h1>
                        </div>
                        <h3 class="mb-2 text-xl font-bold">Belum Di Respon</h3>
                    </div>
                    <div>
                        <div class="flex justify-start items-center mb-4 w-10 h-10 rounded-full lg:h-12 lg:w-12">
                            <h1 class="text-3xl">{{ $subs }}</h1>
                        </div>
                        <h3 class="mb-2 text-xl font-bold">Subscriber Website</h3>
                    </div>

                </div>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="{{ asset('assets/img/admin.png') }}" alt="mockup">
            </div>
        </div>
    </section>
@endsection
