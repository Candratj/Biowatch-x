{{-- Footer --}}
<footer class="bg-gradient-to-r from-green-300 to-green-200 text-green-800 py-4 relative shadow-lg">
    <!-- Accent color bar at top - Diubah menjadi gradien hijau -->
    <div class="absolute top-0 left-0 right-0 h-0.5 bg-gradient-to-r from-green-400 via-green-500 to-green-400">
    </div>

    <!-- Background pattern -->
    <div class="absolute inset-0 opacity-10">
        <div
            class="w-full h-full bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGQ9Ik0zNiAxOGMzLjMxNCAwIDYtMi42ODYgNi02cy0yLjY4Ni02LTYtNmMtMy4zMTQgMC02IDIuNjg2LTYgNnMyLjY4NiA2IDYgNnptMCAwIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIuMSIvPjxwYXRoIGQ9Ik0yNCAzNmMzLjMxNCAwIDYtMi42ODYgNi02cy0yLjY4Ni02LTYtNmMtMy4zMTQgMC02IDIuNjg2LTYgNnMyLjY4NiA2IDYgNnptMCAwIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIuMSIvPjwvZz48L3N2Zz4=')]">
        </div>
    </div>

    <div class="container max-w-4xl mx-auto px-4 relative z-10">
        <!-- Navigation Buttons - Android Style -->
        <div class="flex justify-center items-center space-x-3 md:space-x-6">
            <!-- Buka Dashboard Button -->
            <a href="{{ route('admin.dashboard') }}"
                class="group bg-green-600 hover:bg-green-500 text-white font-medium py-2.5 px-4 md:py-3 md:px-6 rounded-xl flex items-center space-x-2 md:space-x-3 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl active:scale-95">
                <div class="w-6 h-6 md:w-8 md:h-8 bg-white bg-opacity-20 rounded-lg flex items-center justify-center">
                    <i class="fas fa-th-large text-sm md:text-base"></i>
                </div>
                <span class="text-xs md:text-sm font-medium">Buka Dashboard</span>
            </a>

            <!-- Lihat Peta Button -->
            <button
                class="group bg-transparent border-2 border-green-600 hover:bg-green-600 text-green-700 hover:text-white font-medium py-2.5 px-4 md:py-3 md:px-6 rounded-xl flex items-center space-x-2 md:space-x-3 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl active:scale-95">
                <div
                    class="w-6 h-6 md:w-8 md:h-8 bg-green-600 bg-opacity-20 group-hover:bg-white group-hover:bg-opacity-20 rounded-lg flex items-center justify-center transition-colors duration-300">
                    <i class="fas fa-map text-sm md:text-base"></i>
                </div>
                <span class="text-xs md:text-sm font-medium">Lihat Peta</span>
            </button>

            <!-- Live Camera Button -->
            <button
                class="group bg-transparent border-2 border-green-600 hover:bg-green-600 text-green-700 hover:text-white font-medium py-2.5 px-4 md:py-3 md:px-6 rounded-xl flex items-center space-x-2 md:space-x-3 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl active:scale-95">
                <div
                    class="w-6 h-6 md:w-8 md:h-8 bg-green-600 bg-opacity-20 group-hover:bg-white group-hover:bg-opacity-20 rounded-lg flex items-center justify-center transition-colors duration-300">
                    <i class="fas fa-video text-sm md:text-base"></i>
                </div>
                <span class="text-xs md:text-sm font-medium">Live Camera</span>
            </button>
        </div>

        <!-- Bottom indicator (Android style) - juga diubah warnanya -->
        <div class="flex justify-center mt-4">
            <div class="w-12 h-1 bg-green-600 rounded-full"></div>
        </div>
    </div>
</footer>