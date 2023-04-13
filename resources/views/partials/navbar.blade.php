<nav class="bg-white border-gray-200 navbar">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="{{ route('home.index') }}" class="flex items-center">
            @foreach ($logo as $l)
                <img src="{{ asset($l->src) }}" class="h-10 mr-3" alt="{{ $l->nama }}" />
            @endforeach
        </a>
        <div class="flex items-center md:order-2">
            <a href="tel:6282120282823" class="mr-2 text-xs md:text-sm text-gray-500 hover:underline"><i
                    class="fa fa-headset"></i>
                (+62) 821-2028-2823</a>
            <button data-collapse-toggle="mobile-menu-language-select" type="button"
                class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                aria-controls="mobile-menu-language-select" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="currentColor" aria-hidden="true" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1"
            id="mobile-menu-language-select">
            <ul
                class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white md:dark:bg-gray-900">
                <li>
                    <a href="{{ route('home.index') }}"
                        class="block py-2 pl-3 pr-4 md:hover:text-blue-700 text-white rounded text-gray-900 md:bg-transparent md:p-0 md:dark:text-blue-500 {{ Route::is('home.index') ? 'md:text-blue-700 bg-blue-200' : '' }}"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                        class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto md:dark:hover:text-blue-500 md:dark:hover:bg-transparent">Paket
                        Perjalanan
                        <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar"
                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                        <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="{{ route('umroh.index') }}"
                                    class="block px-4 py-2 hover:bg-gray-100 {{ Route::is('umroh.index') ? 'text-blue-700' : '' }}"><i
                                        class="fa fa-star-and-crescent"></i> Umroh</a>
                            </li>
                            <li>
                                <a href="{{ route('umroh.plus.index') }}"
                                    class="block px-4 py-2 hover:bg-gray-100 {{ Route::is('umroh.plus.index') ? 'text-blue-700' : '' }}"><i
                                        class="fa fa-kaaba"></i>
                                    Umroh
                                    Plus Wisata</a>
                            </li>
                            <li>
                                <a href="{{ route('wisata.islami') }}"
                                    class="block px-4 py-2 hover:bg-gray-100 {{ Route::is('wisata.islami') ? 'text-blue-700' : '' }}"><i
                                        class="fa fa-book-quran"></i> Wisata
                                    Islami</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="{{ route('blog.index') }}"
                        class="block py-2 pl-3 pr-4 md:hover:text-blue-700 text-white rounded text-gray-900 md:bg-transparent md:p-0 md:dark:text-blue-500 {{ Route::is('blog.index') ? 'md:text-blue-700 bg-blue-200' : '' }}">Blogs</a>
                </li>
                <li>
                    <a href="{{ route('galeri.index') }}"
                        class="block py-2 pl-3 pr-4 md:hover:text-blue-700 text-white rounded text-gray-900 md:bg-transparent md:p-0 md:dark:text-blue-500 {{ Route::is('galeri.index') ? 'md:text-blue-700 bg-blue-200' : '' }}">Galeri</a>
                </li>
                <li>
                    <a href="{{ route('contact.index') }}"
                        class="block py-2 pl-3 pr-4 md:hover:text-blue-700 text-white rounded text-gray-900 md:bg-transparent md:p-0 md:dark:text-blue-500 {{ Route::is('contact.index') ? 'md:text-blue-700 bg-blue-200' : '' }}">Hubungi
                        Kami</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
