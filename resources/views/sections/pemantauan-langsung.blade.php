{{-- Pemantauan Langsung --}}
<section class="relative max-w-7xl mx-auto px-4 py-12 bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50">
    <!-- Header Section -->
    <div class="text-center mb-12 transform transition-all duration-500 hover:scale-105">
        <span
            class="inline-block bg-gradient-to-r from-emerald-100 to-teal-200 text-emerald-800 px-4 py-1.5 rounded-full text-sm font-medium shadow-sm hover:shadow-md transition-all duration-300 hover:-translate-y-1">
            Sistem Kamera
        </span>
        <h2
            class="text-4xl font-bold bg-gradient-to-r from-emerald-700 to-teal-600 bg-clip-text text-transparent mt-3 relative group">
            Pemantauan Langsung (8 Kamera)
            <span
                class="absolute -bottom-2 left-1/2 w-0 h-1 bg-gradient-to-r from-emerald-600 to-teal-500 group-hover:w-48 transition-all duration-300 transform -translate-x-1/2"></span>
        </h2>
        <p class="text-emerald-800 mt-6 max-w-2xl mx-auto transition-all duration-300 hover:text-emerald-900">
            Pantau kondisi setiap kamera secara real-time dan interaktif.
        </p>
    </div>

    <!-- Camera Cards Scrollable Container -->
    <div class="relative">
        <!-- Scroll Buttons -->
        <button id="scrollLeftCamera"
            class="absolute left-0 top-1/2 transform -translate-y-1/2 z-10 bg-white/90 hover:bg-white rounded-full p-3 transition-all duration-300 shadow-lg">
            <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>

        <button id="scrollRightCamera"
            class="absolute right-0 top-1/2 transform -translate-y-1/2 z-10 bg-white/90 hover:bg-white rounded-full p-3 transition-all duration-300 shadow-lg">
            <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>

        <!-- Scrollable Cards Container -->
        <div id="cameraContainer" class="flex overflow-x-auto scroll-smooth gap-6 px-12 pb-6 scrollbar-hide">
            <!-- Camera Card 1 -->
            <div
                class="flex-shrink-0 w-80 bg-white rounded-2xl p-6 shadow-lg group transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                        <span class="text-emerald-600 font-semibold">Kamera 01</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="bg-red-500 text-white px-2 py-1 rounded-md text-xs font-semibold">LIVE</span>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer" checked>
                            <div
                                class="relative w-10 h-5 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-emerald-500">
                            </div>
                        </label>
                    </div>
                </div>

                <div class="bg-gray-800 rounded-lg h-40 flex items-center justify-center mb-4">
                    <div class="text-center">
                        <svg class="w-12 h-12 text-white mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                        <span class="text-white font-semibold">4K</span>
                    </div>
                </div>

                <div class="text-center mb-4">
                    <p class="text-gray-600 font-medium">Blok A - Utara</p>
                </div>

                <div class="flex justify-center space-x-4">
                    <button class="flex items-center space-x-1 text-emerald-600 hover:text-emerald-700">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                        <span class="text-sm">View</span>
                    </button>
                    <button class="flex items-center space-x-1 text-emerald-600 hover:text-emerald-700">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
                        </svg>
                        <span class="text-sm">Audio</span>
                    </button>
                </div>
            </div>

            <!-- Camera Card 2 -->
            <div
                class="flex-shrink-0 w-80 bg-white rounded-2xl p-6 shadow-lg group transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                        <span class="text-emerald-600 font-semibold">Kamera 02</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="bg-red-500 text-white px-2 py-1 rounded-md text-xs font-semibold">LIVE</span>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer" checked>
                            <div
                                class="relative w-10 h-5 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-emerald-500">
                            </div>
                        </label>
                    </div>
                </div>

                <div class="bg-gray-800 rounded-lg h-40 flex items-center justify-center mb-4">
                    <div class="text-center">
                        <svg class="w-12 h-12 text-white mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                        <span class="text-white font-semibold">HD</span>
                    </div>
                </div>

                <div class="text-center mb-4">
                    <p class="text-gray-600 font-medium">Blok B - Timur</p>
                </div>

                <div class="flex justify-center space-x-4">
                    <button class="flex items-center space-x-1 text-emerald-600 hover:text-emerald-700">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                        <span class="text-sm">View</span>
                    </button>
                    <button class="flex items-center space-x-1 text-emerald-600 hover:text-emerald-700">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
                        </svg>
                        <span class="text-sm">Audio</span>
                    </button>
                </div>
            </div>

            <!-- Camera Card 3 -->
            <div
                class="flex-shrink-0 w-80 bg-white rounded-2xl p-6 shadow-lg group transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                        <span class="text-emerald-600 font-semibold">Kamera 03</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="bg-red-500 text-white px-2 py-1 rounded-md text-xs font-semibold">LIVE</span>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer">
                            <div
                                class="relative w-10 h-5 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-emerald-500">
                            </div>
                        </label>
                    </div>
                </div>

                <div class="bg-gray-800 rounded-lg h-40 flex items-center justify-center mb-4">
                    <div class="text-center">
                        <svg class="w-12 h-12 text-white mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                        <span class="text-white font-semibold">4K</span>
                    </div>
                </div>

                <div class="text-center mb-4">
                    <p class="text-gray-600 font-medium">Blok C - Barat</p>
                </div>

                <div class="flex justify-center space-x-4">
                    <button class="flex items-center space-x-1 text-emerald-600 hover:text-emerald-700">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                        <span class="text-sm">View</span>
                    </button>
                    <button class="flex items-center space-x-1 text-emerald-600 hover:text-emerald-700">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
                        </svg>
                        <span class="text-sm">Audio</span>
                    </button>
                </div>
            </div>

            <!-- Camera Card 4 -->
            <div
                class="flex-shrink-0 w-80 bg-white rounded-2xl p-6 shadow-lg group transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                        <span class="text-emerald-600 font-semibold">Kamera 04</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="bg-red-500 text-white px-2 py-1 rounded-md text-xs font-semibold">LIVE</span>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer" checked>
                            <div
                                class="relative w-10 h-5 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-emerald-500">
                            </div>
                        </label>
                    </div>
                </div>

                <div class="bg-gray-800 rounded-lg h-40 flex items-center justify-center mb-4">
                    <div class="text-center">
                        <svg class="w-12 h-12 text-white mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                        <span class="text-white font-semibold">HD</span>
                    </div>
                </div>

                <div class="text-center mb-4">
                    <p class="text-gray-600 font-medium">Blok D - Selatan</p>
                </div>

                <div class="flex justify-center space-x-4">
                    <button class="flex items-center space-x-1 text-emerald-600 hover:text-emerald-700">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                        <span class="text-sm">View</span>
                    </button>
                    <button class="flex items-center space-x-1 text-emerald-600 hover:text-emerald-700">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
                        </svg>
                        <span class="text-sm">Audio</span>
                    </button>
                </div>
            </div>

            <!-- Camera Card 5 -->
            <div
                class="flex-shrink-0 w-80 bg-white rounded-2xl p-6 shadow-lg group transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                        <span class="text-emerald-600 font-semibold">Kamera 05</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="bg-red-500 text-white px-2 py-1 rounded-md text-xs font-semibold">LIVE</span>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer" checked>
                            <div
                                class="relative w-10 h-5 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-emerald-500">
                            </div>
                        </label>
                    </div>
                </div>

                <div class="bg-gray-800 rounded-lg h-40 flex items-center justify-center mb-4">
                    <div class="text-center">
                        <svg class="w-12 h-12 text-white mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                        <span class="text-white font-semibold">4K</span>
                    </div>
                </div>

                <div class="text-center mb-4">
                    <p class="text-gray-600 font-medium">Blok E - Tengah</p>
                </div>

                <div class="flex justify-center space-x-4">
                    <button class="flex items-center space-x-1 text-emerald-600 hover:text-emerald-700">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                        <span class="text-sm">View</span>
                    </button>
                    <button class="flex items-center space-x-1 text-emerald-600 hover:text-emerald-700">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
                        </svg>
                        <span class="text-sm">Audio</span>
                    </button>
                </div>
            </div>

            <!-- Camera Card 6 -->
            <div
                class="flex-shrink-0 w-80 bg-white rounded-2xl p-6 shadow-lg group transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                        <span class="text-emerald-600 font-semibold">Kamera 06</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="bg-red-500 text-white px-2 py-1 rounded-md text-xs font-semibold">LIVE</span>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer">
                            <div
                                class="relative w-10 h-5 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-emerald-500">
                            </div>
                        </label>
                    </div>
                </div>

                <div class="bg-gray-800 rounded-lg h-40 flex items-center justify-center mb-4">
                    <div class="text-center">
                        <svg class="w-12 h-12 text-white mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                        <span class="text-white font-semibold">HD</span>
                    </div>
                </div>

                <div class="text-center mb-4">
                    <p class="text-gray-600 font-medium">Blok F - Utara 2</p>
                </div>

                <div class="flex justify-center space-x-4">
                    <button class="flex items-center space-x-1 text-emerald-600 hover:text-emerald-700">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                        <span class="text-sm">View</span>
                    </button>
                    <button class="flex items-center space-x-1 text-emerald-600 hover:text-emerald-700">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
                        </svg>
                        <span class="text-sm">Audio</span>
                    </button>
                </div>
            </div>

            <!-- Camera Card 7 -->
            <div
                class="flex-shrink-0 w-80 bg-white rounded-2xl p-6 shadow-lg group transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                        <span class="text-emerald-600 font-semibold">Kamera 07</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="bg-red-500 text-white px-2 py-1 rounded-md text-xs font-semibold">LIVE</span>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer" checked>
                            <div
                                class="relative w-10 h-5 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-emerald-500">
                            </div>
                        </label>
                    </div>
                </div>

                <div class="bg-gray-800 rounded-lg h-40 flex items-center justify-center mb-4">
                    <div class="text-center">
                        <svg class="w-12 h-12 text-white mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                        <span class="text-white font-semibold">4K</span>
                    </div>
                </div>

                <div class="text-center mb-4">
                    <p class="text-gray-600 font-medium">Blok G - Pintu</p>
                </div>

                <div class="flex justify-center space-x-4">
                    <button class="flex items-center space-x-1 text-emerald-600 hover:text-emerald-700">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                        <span class="text-sm">View</span>
                    </button>
                    <button class="flex items-center space-x-1 text-emerald-600 hover:text-emerald-700">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
                        </svg>
                        <span class="text-sm">Audio</span>
                    </button>
                </div>
            </div>

            <!-- Camera Card 8 -->
            <div
                class="flex-shrink-0 w-80 bg-white rounded-2xl p-6 shadow-lg group transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                        <span class="text-emerald-600 font-semibold">Kamera 08</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="bg-red-500 text-white px-2 py-1 rounded-md text-xs font-semibold">LIVE</span>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer">
                            <div
                                class="relative w-10 h-5 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-emerald-500">
                            </div>
                        </label>
                    </div>
                </div>

                <div class="bg-gray-800 rounded-lg h-40 flex items-center justify-center mb-4">
                    <div class="text-center">
                        <svg class="w-12 h-12 text-white mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                        <span class="text-white font-semibold">HD</span>
                    </div>
                </div>

                <div class="text-center mb-4">
                    <p class="text-gray-600 font-medium">Blok H - Gedung</p>
                </div>

                <div class="flex justify-center space-x-4">
                    <button class="flex items-center space-x-1 text-emerald-600 hover:text-emerald-700">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                        <span class="text-sm">View</span>
                    </button>
                    <button class="flex items-center space-x-1 text-emerald-600 hover:text-emerald-700">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
                        </svg>
                        <span class="text-sm">Audio</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
    // Toggle functionality for camera on/off
    document.querySelectorAll('input[type="checkbox"]').forEach(toggle => {
        toggle.addEventListener('change', function() {
            const cameraCard = this.closest('.flex-shrink-0');
            const videoArea = cameraCard.querySelector('.bg-gray-800');

            if (this.checked) {
                videoArea.style.opacity = '1';
                videoArea.style.filter = 'none';
            } else {
                videoArea.style.opacity = '0.5';
                videoArea.style.filter = 'grayscale(100%)';
            }
        });
    });

    // Scroll functionality
    const containerCamera = document.getElementById('cameraContainer');
    const scrollLeftCamera = document.getElementById('scrollLeftCamera');
    const scrollRightCamera = document.getElementById('scrollRightCamera');

    scrollLeftCamera.addEventListener('click', () => {
        containerCamera.scrollBy({
            left: -320,
            behavior: 'smooth'
        });
    });

    scrollRightCamera.addEventListener('click', () => {
        containerCamera.scrollBy({
            left: 320,
            behavior: 'smooth'
        });
    });

    // Auto-scroll functionality (shows 3 cameras at a time)
    function updateScrollButtons() {
        const scrollLeftPos = containerCamera.scrollLeft;
        const maxScroll = containerCamera.scrollWidth - containerCamera.clientWidth;

        scrollLeftCamera.style.opacity = scrollLeftPos > 0 ? '1' : '0.5';
        scrollRightCamera.style.opacity = scrollLeftPos < maxScroll ? '1' : '0.5';
    }

    containerCamera.addEventListener('scroll', updateScrollButtons);
    updateScrollButtons();

    // Hide scrollbar but keep functionality
    containerCamera.style.scrollbarWidth = 'none';
    containerCamera.style.msOverflowStyle = 'none';
</script>
@endpush