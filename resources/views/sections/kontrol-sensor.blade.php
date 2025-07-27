{{-- Kontrol Sensor --}}
<section id="kontrol-sensor"
    class="relative max-w-7xl mx-auto px-4 py-8 lg:py-12 overflow-hidden">
    
    <!-- Mobile Header -->
    <div class="lg:hidden mb-6">
        <div class="text-center">
            <span class="inline-block bg-gradient-to-r from-emerald-100 to-teal-200 text-emerald-800 px-3 py-1 rounded-full text-sm font-medium shadow-sm">
                Sistem Kontrol
            </span>
            <h2 class="text-2xl font-bold bg-gradient-to-r from-emerald-700 to-teal-600 bg-clip-text text-transparent mt-2">
                Kontrol Sensor
            </h2>
        </div>
    </div>

    <!-- Desktop Header -->
    <div class="hidden lg:block text-center mb-12 transform transition-all duration-500 hover:scale-105">
        <span class="inline-block bg-gradient-to-r from-emerald-100 to-teal-200 text-emerald-800 px-4 py-1.5 rounded-full text-sm font-medium shadow-sm hover:shadow-md transition-all duration-300 hover:-translate-y-1">
            Sistem Kontrol
        </span>
        <h2 class="text-4xl font-bold bg-gradient-to-r from-emerald-700 to-teal-600 bg-clip-text text-transparent mt-3 relative group">
            Kontrol Sensor
            <span class="absolute -bottom-2 left-1/2 w-0 h-1 bg-gradient-to-r from-emerald-600 to-teal-500 group-hover:w-48 transition-all duration-300 transform -translate-x-1/2"></span>
        </h2>
    </div>

    <!-- Master Control Panel (Mobile) -->
    <div class="lg:hidden mb-6 bg-white rounded-3xl p-6 shadow-xl">
        <div class="flex items-center justify-between mb-4">
            <div>
                <h3 class="text-lg font-semibold text-gray-800">Master Control</h3>
                <p class="text-sm text-gray-500">Kontrol semua sensor</p>
            </div>
            <label class="relative inline-flex items-center cursor-pointer">
                <input type="checkbox" class="sr-only peer master-toggle" checked>
                <div class="relative w-14 h-7 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[4px] after:bg-white after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-emerald-500 shadow-inner"></div>
            </label>
        </div>
        <div class="grid grid-cols-3 gap-2 text-sm">
            <div class="text-center">
                <div class="text-emerald-600 font-bold text-lg">6</div>
                <div class="text-gray-500">Aktif</div>
            </div>
            <div class="text-center">
                <div class="text-red-500 font-bold text-lg">2</div>
                <div class="text-gray-500">Mati</div>
            </div>
            <div class="text-center">
                <div class="text-blue-500 font-bold text-lg">75%</div>
                <div class="text-gray-500">Uptime</div>
            </div>
        </div>
    </div>

    <!-- Sensor Cards Container -->
    <div class="relative">
        <!-- Desktop Scroll Buttons -->
        <button id="scrollLeft" class="hidden lg:block absolute left-0 top-1/2 transform -translate-y-1/2 z-10 bg-white/90 hover:bg-white rounded-full p-3 transition-all duration-300 shadow-lg hover:shadow-xl">
            <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>

        <button id="scrollRight" class="hidden lg:block absolute right-0 top-1/2 transform -translate-y-1/2 z-10 bg-white/90 hover:bg-white rounded-full p-3 transition-all duration-300 shadow-lg hover:shadow-xl">
            <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>

        <!-- Sensor Cards Grid/Scrollable Container -->
        <div id="sensorContainer" class="grid grid-cols-1 md:grid-cols-2 lg:flex lg:overflow-x-auto lg:scroll-smooth gap-4 lg:gap-6 lg:px-12 lg:pb-6 scrollbar-hide"
            style="scrollbar-width: none; -ms-overflow-style: none;">
            
            <!-- Sensor Card 1 -->
            <div class="lg:flex-shrink-0 lg:w-80 bg-white rounded-3xl p-6 lg:p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group">
                <div class="flex lg:flex-col items-center lg:items-center justify-between lg:justify-center lg:space-y-6">
                    <!-- Mobile Layout -->
                    <div class="lg:hidden flex items-center space-x-4 flex-1">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-emerald-800 font-bold text-lg">Sensor Utara</h3>
                            <p class="text-emerald-600 text-sm">Blok A</p>
                        </div>
                    </div>
                    
                    <!-- Desktop Layout -->
                    <div class="hidden lg:block text-center">
                        <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-600 rounded-3xl flex items-center justify-center shadow-lg transform transition-all duration-500 group-hover:rotate-6 group-hover:scale-110 mx-auto mb-4">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-emerald-800 font-bold text-xl">Sensor Utara</h3>
                            <p class="text-emerald-600 text-base">Blok A</p>
                        </div>
                    </div>
                    
                    <!-- Toggle Switch -->
                    <div class="flex flex-col items-center space-y-3">
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer sensor-toggle" checked data-sensor="utara">
                            <div class="relative w-12 h-6 lg:w-14 lg:h-7 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[4px] after:bg-white after:rounded-full after:h-5 after:w-5 lg:after:h-6 lg:after:w-6 after:transition-all peer-checked:bg-emerald-500 shadow-inner"></div>
                        </label>
                        <span class="sensor-status text-emerald-600 text-sm lg:text-base font-semibold">AKTIF</span>
                    </div>
                </div>
            </div>

            <!-- Sensor Card 2 -->
            <div class="lg:flex-shrink-0 lg:w-80 bg-white rounded-3xl p-6 lg:p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group">
                <div class="flex lg:flex-col items-center lg:items-center justify-between lg:justify-center lg:space-y-6">
                    <div class="lg:hidden flex items-center space-x-4 flex-1">
                        <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-emerald-800 font-bold text-lg">Sensor Timur</h3>
                            <p class="text-emerald-600 text-sm">Blok B</p>
                        </div>
                    </div>
                    
                    <div class="hidden lg:block text-center">
                        <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-green-600 rounded-3xl flex items-center justify-center shadow-lg transform transition-all duration-500 group-hover:rotate-6 group-hover:scale-110 mx-auto mb-4">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-emerald-800 font-bold text-xl">Sensor Timur</h3>
                            <p class="text-emerald-600 text-base">Blok B</p>
                        </div>
                    </div>
                    
                    <div class="flex flex-col items-center space-y-3">
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer sensor-toggle" checked data-sensor="timur">
                            <div class="relative w-12 h-6 lg:w-14 lg:h-7 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[4px] after:bg-white after:rounded-full after:h-5 after:w-5 lg:after:h-6 lg:after:w-6 after:transition-all peer-checked:bg-emerald-500 shadow-inner"></div>
                        </label>
                        <span class="sensor-status text-emerald-600 text-sm lg:text-base font-semibold">AKTIF</span>
                    </div>
                </div>
            </div>

            <!-- Sensor Card 3 -->
            <div class="lg:flex-shrink-0 lg:w-80 bg-white rounded-3xl p-6 lg:p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group">
                <div class="flex lg:flex-col items-center lg:items-center justify-between lg:justify-center lg:space-y-6">
                    <div class="lg:hidden flex items-center space-x-4 flex-1">
                        <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-emerald-800 font-bold text-lg">Sensor Barat</h3>
                            <p class="text-emerald-600 text-sm">Blok C</p>
                        </div>
                    </div>
                    
                    <div class="hidden lg:block text-center">
                        <div class="w-20 h-20 bg-gradient-to-br from-orange-500 to-orange-600 rounded-3xl flex items-center justify-center shadow-lg transform transition-all duration-500 group-hover:rotate-6 group-hover:scale-110 mx-auto mb-4">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-emerald-800 font-bold text-xl">Sensor Barat</h3>
                            <p class="text-emerald-600 text-base">Blok C</p>
                        </div>
                    </div>
                    
                    <div class="flex flex-col items-center space-y-3">
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer sensor-toggle" data-sensor="barat">
                            <div class="relative w-12 h-6 lg:w-14 lg:h-7 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[4px] after:bg-white after:rounded-full after:h-5 after:w-5 lg:after:h-6 lg:after:w-6 after:transition-all peer-checked:bg-emerald-500 shadow-inner"></div>
                        </label>
                        <span class="sensor-status text-red-500 text-sm lg:text-base font-semibold">MATI</span>
                    </div>
                </div>
            </div>

            <!-- Sensor Card 4 -->
            <div class="lg:flex-shrink-0 lg:w-80 bg-white rounded-3xl p-6 lg:p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group">
                <div class="flex lg:flex-col items-center lg:items-center justify-between lg:justify-center lg:space-y-6">
                    <div class="lg:hidden flex items-center space-x-4 flex-1">
                        <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-emerald-800 font-bold text-lg">Sensor Selatan</h3>
                            <p class="text-emerald-600 text-sm">Blok D</p>
                        </div>
                    </div>
                    
                    <div class="hidden lg:block text-center">
                        <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-purple-600 rounded-3xl flex items-center justify-center shadow-lg transform transition-all duration-500 group-hover:rotate-6 group-hover:scale-110 mx-auto mb-4">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-emerald-800 font-bold text-xl">Sensor Selatan</h3>
                            <p class="text-emerald-600 text-base">Blok D</p>
                        </div>
                    </div>
                    
                    <div class="flex flex-col items-center space-y-3">
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer sensor-toggle" checked data-sensor="selatan">
                            <div class="relative w-12 h-6 lg:w-14 lg:h-7 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[4px] after:bg-white after:rounded-full after:h-5 after:w-5 lg:after:h-6 lg:after:w-6 after:transition-all peer-checked:bg-emerald-500 shadow-inner"></div>
                        </label>
                        <span class="sensor-status text-emerald-600 text-sm lg:text-base font-semibold">AKTIF</span>
                    </div>
                </div>
            </div>

            <!-- Continue with remaining sensors... -->
            <!-- Sensor Card 5 -->
            <div class="lg:flex-shrink-0 lg:w-80 bg-white rounded-3xl p-6 lg:p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group">
                <div class="flex lg:flex-col items-center lg:items-center justify-between lg:justify-center lg:space-y-6">
                    <div class="lg:hidden flex items-center space-x-4 flex-1">
                        <div class="w-12 h-12 bg-gradient-to-br from-pink-500 to-pink-600 rounded-2xl flex items-center justify-center shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4V2a1 1 0 011-1h8a1 1 0 011 1v2m0 0v2a1 1 0 01-1 1H8a1 1 0 01-1-1V4m0 0H5a2 2 0 00-2 2v10a2 2 0 002 2h14a2 2 0 002-2V6a2 2 0 00-2-2h-2" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-emerald-800 font-bold text-lg">Sensor Tengah</h3>
                            <p class="text-emerald-600 text-sm">Blok E</p>
                        </div>
                    </div>
                    
                    <div class="hidden lg:block text-center">
                        <div class="w-20 h-20 bg-gradient-to-br from-pink-500 to-pink-600 rounded-3xl flex items-center justify-center shadow-lg transform transition-all duration-500 group-hover:rotate-6 group-hover:scale-110 mx-auto mb-4">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4V2a1 1 0 011-1h8a1 1 0 011 1v2m0 0v2a1 1 0 01-1 1H8a1 1 0 01-1-1V4m0 0H5a2 2 0 00-2 2v10a2 2 0 002 2h14a2 2 0 002-2V6a2 2 0 00-2-2h-2" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-emerald-800 font-bold text-xl">Sensor Tengah</h3>
                            <p class="text-emerald-600 text-base">Blok E</p>
                        </div>
                    </div>
                    
                    <div class="flex flex-col items-center space-y-3">
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer sensor-toggle" checked data-sensor="tengah">
                            <div class="relative w-12 h-6 lg:w-14 lg:h-7 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[4px] after:bg-white after:rounded-full after:h-5 after:w-5 lg:after:h-6 lg:after:w-6 after:transition-all peer-checked:bg-emerald-500 shadow-inner"></div>
                        </label>
                        <span class="sensor-status text-emerald-600 text-sm lg:text-base font-semibold">AKTIF</span>
                    </div>
                </div>
            </div>

            <!-- Sensor Card 6 -->
            <div class="lg:flex-shrink-0 lg:w-80 bg-white rounded-3xl p-6 lg:p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group">
                <div class="flex lg:flex-col items-center lg:items-center justify-between lg:justify-center lg:space-y-6">
                    <div class="lg:hidden flex items-center space-x-4 flex-1">
                        <div class="w-12 h-12 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-2xl flex items-center justify-center shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-emerald-800 font-bold text-lg">Sensor Utara 2</h3>
                            <p class="text-emerald-600 text-sm">Blok F</p>
                        </div>
                    </div>
                    
                    <div class="hidden lg:block text-center">
                        <div class="w-20 h-20 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-3xl flex items-center justify-center shadow-lg transform transition-all duration-500 group-hover:rotate-6 group-hover:scale-110 mx-auto mb-4">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-emerald-800 font-bold text-xl">Sensor Utara 2</h3>
                            <p class="text-emerald-600 text-base">Blok F</p>
                        </div>
                    </div>
                    
                    <div class="flex flex-col items-center space-y-3">
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer sensor-toggle" data-sensor="utara2">
                            <div class="relative w-12 h-6 lg:w-14 lg:h-7 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[4px] after:bg-white after:rounded-full after:h-5 after:w-5 lg:after:h-6 lg:after:w-6 after:transition-all peer-checked:bg-emerald-500 shadow-inner"></div>
                        </label>
                        <span class="sensor-status text-red-500 text-sm lg:text-base font-semibold">MATI</span>
                    </div>
                </div>
            </div>

            <!-- Sensor Card 7 -->
            <div class="lg:flex-shrink-0 lg:w-80 bg-white rounded-3xl p-6 lg:p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group">
                <div class="flex lg:flex-col items-center lg:items-center justify-between lg:justify-center lg:space-y-6">
                    <div class="lg:hidden flex items-center space-x-4 flex-1">
                        <div class="w-12 h-12 bg-gradient-to-br from-red-500 to-red-600 rounded-2xl flex items-center justify-center shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-emerald-800 font-bold text-lg">Sensor Pintu</h3>
                            <p class="text-emerald-600 text-sm">Blok G</p>
                        </div>
                    </div>
                    
                    <div class="hidden lg:block text-center">
                        <div class="w-20 h-20 bg-gradient-to-br from-red-500 to-red-600 rounded-3xl flex items-center justify-center shadow-lg transform transition-all duration-500 group-hover:rotate-6 group-hover:scale-110 mx-auto mb-4">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-emerald-800 font-bold text-xl">Sensor Pintu</h3>
                            <p class="text-emerald-600 text-base">Blok G</p>
                        </div>
                    </div>
                    
                    <div class="flex flex-col items-center space-y-3">
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer sensor-toggle" checked data-sensor="pintu">
                            <div class="relative w-12 h-6 lg:w-14 lg:h-7 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[4px] after:bg-white after:rounded-full after:h-5 after:w-5 lg:after:h-6 lg:after:w-6 after:transition-all peer-checked:bg-emerald-500 shadow-inner"></div>
                        </label>
                        <span class="sensor-status text-emerald-600 text-sm lg:text-base font-semibold">AKTIF</span>
                    </div>
                </div>
            </div>

            <!-- Sensor Card 8 -->
            <div class="lg:flex-shrink-0 lg:w-80 bg-white rounded-3xl p-6 lg:p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group">
                <div class="flex lg:flex-col items-center lg:items-center justify-between lg:justify-center lg:space-y-6">
                    <div class="lg:hidden flex items-center space-x-4 flex-1">
                        <div class="w-12 h-12 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-2xl flex items-center justify-center shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-emerald-800 font-bold text-lg">Sensor Gedung</h3>
                            <p class="text-emerald-600 text-sm">Blok H</p>
                        </div>
                    </div>
                    
                    <div class="hidden lg:block text-center">
                        <div class="w-20 h-20 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-3xl flex items-center justify-center shadow-lg transform transition-all duration-500 group-hover:rotate-6 group-hover:scale-110 mx-auto mb-4">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-emerald-800 font-bold text-xl">Sensor Gedung</h3>
                            <p class="text-emerald-600 text-base">Blok H</p>
                        </div>
                    </div>
                    
                    <div class="flex flex-col items-center space-y-3">
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer sensor-toggle" data-sensor="gedung">
                            <div class="relative w-12 h-6 lg:w-14 lg:h-7 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[4px] after:bg-white after:rounded-full after:h-5 after:w-5 lg:after:h-6 lg:after:w-6 after:transition-all peer-checked:bg-emerald-500 shadow-inner"></div>
                        </label>
                        <span class="sensor-status text-red-500 text-sm lg:text-base font-semibold">MATI</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions (Mobile) -->
    <div class="lg:hidden mt-6 grid grid-cols-2 gap-4">
        <button class="bg-emerald-500 text-white p-4 rounded-2xl font-semibold transition-all duration-300 transform active:scale-95 flex items-center justify-center space-x-2">
            <i class="fas fa-power-off"></i>
            <span>Aktifkan Semua</span>
        </button>
        <button class="bg-red-500 text-white p-4 rounded-2xl font-semibold transition-all duration-300 transform active:scale-95 flex items-center justify-center space-x-2">
            <i class="fas fa-stop"></i>
            <span>Matikan Semua</span>
        </button>
    </div>
</section>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Toggle functionality
        const sensorToggles = document.querySelectorAll('.sensor-toggle');
        const masterToggle = document.querySelector('.master-toggle');
        
        sensorToggles.forEach(toggle => {
            toggle.addEventListener('change', function() {
                const statusElement = this.closest('.group').querySelector('.sensor-status');
                const sensorName = this.getAttribute('data-sensor');
                
                if (this.checked) {
                    statusElement.textContent = 'AKTIF';
                    statusElement.className = 'sensor-status text-emerald-600 text-sm lg:text-base font-semibold';
                    
                    // Show toast notification
                    if (window.BioWatch) {
                        window.BioWatch.showToast(`Sensor ${sensorName} telah diaktifkan`, 'success');
                    }
                } else {
                    statusElement.textContent = 'MATI';
                    statusElement.className = 'sensor-status text-red-500 text-sm lg:text-base font-semibold';
                    
                    if (window.BioWatch) {
                        window.BioWatch.showToast(`Sensor ${sensorName} telah dimatikan`, 'warning');
                    }
                }
                
                updateMasterToggle();
            });
        });

        // Master toggle functionality
        if (masterToggle) {
            masterToggle.addEventListener('change', function() {
                const isChecked = this.checked;
                
                sensorToggles.forEach(toggle => {
                    toggle.checked = isChecked;
                    const event = new Event('change');
                    toggle.dispatchEvent(event);
                });
                
                if (window.BioWatch) {
                    const message = isChecked ? 'Semua sensor telah diaktifkan' : 'Semua sensor telah dimatikan';
                    const type = isChecked ? 'success' : 'warning';
                    window.BioWatch.showToast(message, type);
                }
            });
        }

        // Update master toggle based on individual sensors
        function updateMasterToggle() {
            if (!masterToggle) return;
            
            const activeSensors = Array.from(sensorToggles).filter(toggle => toggle.checked).length;
            const totalSensors = sensorToggles.length;
            
            // Update mobile stats if exists
            const activeCount = document.querySelector('.master-control .text-emerald-600');
            const inactiveCount = document.querySelector('.master-control .text-red-500');
            const uptimePercentage = document.querySelector('.master-control .text-blue-500');
            
            if (activeCount) activeCount.textContent = activeSensors;
            if (inactiveCount) inactiveCount.textContent = totalSensors - activeSensors;
            if (uptimePercentage) {
                const percentage = Math.round((activeSensors / totalSensors) * 100);
                uptimePercentage.textContent = `${percentage}%`;
            }
            
            // Update master toggle state
            masterToggle.checked = activeSensors === totalSensors;
        }

        // Desktop scroll functionality
        const container = document.getElementById('sensorContainer');
        const scrollLeft = document.getElementById('scrollLeft');
        const scrollRight = document.getElementById('scrollRight');

        if (scrollLeft && scrollRight && container) {
            scrollLeft.addEventListener('click', () => {
                container.scrollBy({
                    left: -400,
                    behavior: 'smooth'
                });
            });

            scrollRight.addEventListener('click', () => {
                container.scrollBy({
                    left: 400,
                    behavior: 'smooth'
                });
            });

            // Update scroll button visibility
            function updateScrollButtons() {
                const scrollLeftPos = container.scrollLeft;
                const maxScroll = container.scrollWidth - container.clientWidth;

                scrollLeft.style.opacity = scrollLeftPos > 0 ? '1' : '0.5';
                scrollRight.style.opacity = scrollLeftPos < maxScroll ? '1' : '0.5';
            }

            container.addEventListener('scroll', updateScrollButtons);
            updateScrollButtons();
        }

        // Quick action buttons (mobile)
        const quickActionButtons = document.querySelectorAll('.lg\\:hidden button');
        quickActionButtons.forEach(button => {
            button.addEventListener('click', function() {
                const isActivateAll = this.textContent.includes('Aktifkan');
                
                sensorToggles.forEach(toggle => {
                    toggle.checked = isActivateAll;
                    const event = new Event('change');
                    toggle.dispatchEvent(event);
                });
                
                if (masterToggle) {
                    masterToggle.checked = isActivateAll;
                }
            });
        });

        // Card animations on scroll (mobile)
        const cards = document.querySelectorAll('.group');
        const cardObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationDelay = `${entry.target.dataset.index * 0.1}s`;
                    entry.target.classList.add('animate__animated', 'animate__fadeInUp');
                }
            });
        }, { threshold: 0.2 });

        cards.forEach((card, index) => {
            card.dataset.index = index;
            cardObserver.observe(card);
        });

        // Initialize master toggle state
        updateMasterToggle();

        // Touch feedback for mobile
        if ('ontouchstart' in window) {
            cards.forEach(card => {
                card.addEventListener('touchstart', function() {
                    this.style.transform = 'scale(0.98)';
                });
                
                card.addEventListener('touchend', function() {
                    this.style.transform = 'scale(1)';
                });
            });
        }

        // Hide scrollbar but keep functionality (desktop)
        if (container && window.innerWidth >= 1024) {
            container.style.scrollbarWidth = 'none';
            container.style.msOverflowStyle = 'none';
        }
    });
</script>
@endpush