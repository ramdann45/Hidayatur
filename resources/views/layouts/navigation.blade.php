<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start">
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
                    type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                        </path>
                    </svg>
                </button>
                <a href="{{ route('dashboard') }}" class="flex ml-2 md:mr-24">
                    <h1>Dashboard</h1>
                </a>
            </div>
            <div class="flex items-center">
                <div class="flex items-center ml-3">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>
        </div>
    </div>
</nav>

<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white">
        <ul class="space-y-2 font-medium">
            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100"
                    aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                    <i class="fa fa-table-columns"></i>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Landing Page</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="dropdown-example" class="hidden py-2 space-y-2">
                    <li>
                        <a href="{{ route('hero.image') }}"
                            class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 {{ Route::is('hero.image') ? 'text-blue-600' : 'text-gray-900' }}">
                            Hero Image</a>
                    </li>
                    <li>
                        <a href="{{ route('penawaran.terbatas') }}"
                            class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 {{ Route::is('penawaran.terbatas') ? 'text-blue-600' : 'text-gray-900' }}">
                            Penawaran Terbatas</a>
                    </li>
                    <li>
                        <a href="{{ route('our.services') }}"
                            class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 {{ Route::is('our.services') ? 'text-blue-600' : 'text-gray-900' }}">Our
                            Services</a>
                    </li>
                    <li>
                        <a href="{{ route('wisata.terbaru') }}"
                            class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 {{ Route::is('wisata.terbaru') ? 'text-blue-600' : 'text-gray-900' }}">Wisata
                            Terbaru 2023</a>
                    </li>
                    <li>
                        <a href="{{ route('paket.umroh') }}"
                            class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 {{ Route::is('paket.umroh') ? 'text-blue-600' : 'text-gray-900' }}">Pilihan
                            Paket Umroh</a>
                    </li>
                    <li>
                        <a href="{{ route('paket.umroh.plus') }}"
                            class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 {{ Route::is('paket.umroh.plus') ? 'text-blue-600' : 'text-gray-900' }}">Pilihan
                            Paket Umroh Plus</a>
                    </li>
                    <li>
                        <a href="{{ route('testimoni') }}"
                            class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 {{ Route::is('testimoni') ? 'text-blue-600' : 'text-gray-900' }}">Testimoni</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('logo.perusahaan') }}"
                    class="flex items-center p-2 rounded-lg hover:bg-gray-100 {{ Route::is('logo.perusahaan') ? 'text-blue-600' : 'text-gray-900' }}">
                    <i class="fa fa-building"></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Logo Perusahaan</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100">
                    <i class="fa-brands fa-microblog"></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Blogs</span>
                    <span
                        class="inline-flex items-center justify-center px-2 ml-3 text-sm font-medium text-white bg-yellow-500 rounded-full">Coming
                        Soon</span>
                </a>
            </li>
            <li>
                <a href="{{ route('galeri') }}"
                    class="flex items-center p-2 rounded-lg hover:bg-gray-100 {{ Route::is('galeri') ? 'text-blue-600' : 'text-gray-900' }}">
                    <i class="fa-solid fa-images"></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Galeri</span>
                </a>
            </li>
            <li>
                <a href="{{ route('subscriber') }}"
                    class="flex items-center p-2 rounded-lg hover:bg-gray-100 {{ Route::is('subscriber') ? 'text-blue-600' : 'text-gray-900' }}">
                    <i class="fa fa-person-circle-check"></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Subscriber</span>
                </a>
            </li>
            <li>
                <a href="{{ route('booking.tour') }}"
                    class="flex items-center p-2 rounded-lg hover:bg-gray-100 {{ Route::is('booking.tour') ? 'text-blue-600' : 'text-gray-900' }}">
                    <i class="fa fa-book"></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Booking Tour</span>
                </a>
            </li>
            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100"
                    aria-controls="umroh" data-collapse-toggle="umroh">
                    <i class="fa fa-star-and-crescent"></i>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Umroh Reguler</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="umroh" class="hidden py-2 space-y-2">
                    <li>
                        <a href="{{ route('paket.satu') }}"
                            class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 {{ Route::is('paket.satu') ? 'text-blue-600' : 'text-gray-900' }}">
                            Umroh Ramadhan 1</a>
                    </li>
                    <li>
                        <a href="{{ route('paket.dua') }}"
                            class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 {{ Route::is('paket.dua') ? 'text-blue-600' : 'text-gray-900' }}">
                            Umroh Ramadhan 2</a>
                    </li>
                    <li>
                        <a href="{{ route('paket.tiga') }}"
                            class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 {{ Route::is('paket.tiga') ? 'text-blue-600' : 'text-gray-900' }}">Umroh
                            Ramadhan 3</a>
                    </li>
                    <li>
                        <a href="{{ route('paket.empat') }}"
                            class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 {{ Route::is('paket.empat') ? 'text-blue-600' : 'text-gray-900' }}">Umroh
                            Ramadhan 4</a>
                    </li>
                </ul>
            </li>
            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100"
                    aria-controls="wisata-islami" data-collapse-toggle="wisata-islami">
                    <i class="fa fa-plane-departure"></i>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Wisata Islami</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="wisata-islami" class="hidden py-2 space-y-2">
                    <li>
                        <a href="{{ route('wisata.islami.balkan.admin') }}"
                            class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 {{ Route::is('wisata.islami.balkan.admin') ? 'text-blue-600' : 'text-gray-900' }}">Tour
                            Balkan</a>
                        <a href="{{ route('wisata.islami.mongolia.admin') }}"
                            class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 {{ Route::is('wisata.islami.mongolia.admin') ? 'text-blue-600' : 'text-gray-900' }}">Tour
                            Mongolia</a>
                        <a href="{{ route('wisata.islami.beijing.admin') }}"
                            class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 {{ Route::is('wisata.islami.beijing.admin') ? 'text-blue-600' : 'text-gray-900' }}">Tour
                            Beijing China</a>
                        <a href="{{ route('wisata.islami.india.admin') }}"
                            class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 {{ Route::is('wisata.islami.india.admin') ? 'text-blue-600' : 'text-gray-900' }}">Tour
                            India</a>
                        <a href="{{ route('wisata.islami.dubai.admin') }}"
                            class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 {{ Route::is('wisata.islami.dubai.admin') ? 'text-blue-600' : 'text-gray-900' }}">Tour
                            Dubai Abu Dhabi</a>
                        <a href="{{ route('wisata.islami.korea.admin') }}"
                            class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 {{ Route::is('wisata.islami.korea.admin') ? 'text-blue-600' : 'text-gray-900' }}">Tour
                            Korea Selatan</a>
                    </li>
                </ul>
            </li>
            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100"
                    aria-controls="umroh-turki" data-collapse-toggle="umroh-turki">
                    <i class="fa fa-kaaba"></i>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Umroh + Turki</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="umroh-turki" class="hidden py-2 space-y-2">
                    <li>
                        <a href="{{ route('paket.satu.turki') }}"
                            class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 {{ Route::is('paket.satu.turki') ? 'text-blue-600' : 'text-gray-900' }}">
                            Umroh Turki 1</a>
                    </li>
                    <li>
                        <a href="{{ route('paket.dua.turki') }}"
                            class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 {{ Route::is('paket.dua.turki') ? 'text-blue-600' : 'text-gray-900' }}">
                            Umroh Turki 2</a>
                    </li>
                    <li>
                        <a href="{{ route('paket.tiga.turki') }}"
                            class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 {{ Route::is('paket.tiga.turki') ? 'text-blue-600' : 'text-gray-900' }}">Umroh
                            Turki 3</a>
                    </li>
                    <li>
                        <a href="{{ route('paket.empat.turki') }}"
                            class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 {{ Route::is('paket.empat.turki') ? 'text-blue-600' : 'text-gray-900' }}">Umroh
                            Empat 4</a>
                    </li>
                </ul>
            </li>
            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100"
                    aria-controls="umroh-mesir" data-collapse-toggle="umroh-mesir">
                    <i class="fa fa-kaaba"></i>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Umroh + Mesir</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="umroh-mesir" class="hidden py-2 space-y-2">
                    <li>
                        <a href="{{ route('paket.satu.mesir') }}"
                            class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 {{ Route::is('paket.satu.mesir') ? 'text-blue-600' : 'text-gray-900' }}">
                            Umroh Mesir 1</a>
                    </li>
                    <li>
                        <a href="{{ route('paket.dua.mesir') }}"
                            class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 {{ Route::is('paket.dua.mesir') ? 'text-blue-600' : 'text-gray-900' }}">
                            Umroh Mesir 2</a>
                    </li>
                    <li>
                        <a href="{{ route('paket.tiga.mesir') }}"
                            class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 {{ Route::is('paket.tiga.mesir') ? 'text-blue-600' : 'text-gray-900' }}">
                            Umroh Mesir 3</a>
                    </li>
                </ul>
            </li>
            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100"
                    aria-controls="umroh-dubai" data-collapse-toggle="umroh-dubai">
                    <i class="fa fa-kaaba"></i>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Umroh + Dubai</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="umroh-dubai" class="hidden py-2 space-y-2">
                    <li>
                        <a href="{{ route('paket.satu.dubai') }}"
                            class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 {{ Route::is('paket.satu.dubai') ? 'text-blue-600' : 'text-gray-900' }}">
                            Umroh Dubai 1</a>
                    </li>
                    <li>
                        <a href="{{ route('paket.dua.dubai') }}"
                            class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 {{ Route::is('paket.dua.dubai') ? 'text-blue-600' : 'text-gray-900' }}">
                            Umroh Dubai 2</a>
                    </li>
                </ul>
            </li>
            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100"
                    aria-controls="umroh-uzbekistan" data-collapse-toggle="umroh-uzbekistan">
                    <i class="fa fa-kaaba"></i>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Umroh + Uzbekistan</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="umroh-uzbekistan" class="hidden py-2 space-y-2">
                    <li>
                        <a href="{{ route('paket.satu.uzbekistan') }}"
                            class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 {{ Route::is('paket.satu.uzbekistan') ? 'text-blue-600' : 'text-gray-900' }}">
                            Umroh Uzbekistan 1</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</aside>
