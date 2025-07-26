{{-- Footer - Hidden on mobile, shown on desktop --}}
<footer class="hidden md:block glass-effect text-white py-6 mt-12">
    <!-- Accent line at top -->
    <div class="absolute top-0 left-0 right-0 h-0.5 bg-gradient-to-r from-green-400 via-green-500 to-green-400"></div>

    <div class="container max-w-6xl mx-auto px-4 relative z-10">
        <!-- Desktop Navigation Buttons -->
        <div class="flex justify-center items-center space-x-6">
            <!-- Dashboard Button -->
            <a href="{{ route('admin.dashboard') }}" class="group bg-green-600 hover:bg-green-500 text-white font-medium py-3 px-6 rounded-xl flex items-center space-x-3 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                <div class="w-8 h-8 bg-white bg-opacity-20 rounded-lg flex items-center justify-center">
                    <i class="fas fa-th-large text-base"></i>
                </div>
                <span class="text-sm font-medium">Open Dashboard</span>
            </a>

            <!-- Map View Button -->
            <button class="group bg-transparent border-2 border-green-600 hover:bg-green-600 text-green-400 hover:text-white font-medium py-3 px-6 rounded-xl flex items-center space-x-3 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                <div class="w-8 h-8 bg-green-600 bg-opacity-20 group-hover:bg-white group-hover:bg-opacity-20 rounded-lg flex items-center justify-center transition-colors duration-300">
                    <i class="fas fa-map text-base"></i>
                </div>
                <span class="text-sm font-medium">View Map</span>
            </button>

            <!-- Live Camera Button -->
            <button class="group bg-transparent border-2 border-green-600 hover:bg-green-600 text-green-400 hover:text-white font-medium py-3 px-6 rounded-xl flex items-center space-x-3 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                <div class="w-8 h-8 bg-green-600 bg-opacity-20 group-hover:bg-white group-hover:bg-opacity-20 rounded-lg flex items-center justify-center transition-colors duration-300">
                    <i class="fas fa-video text-base"></i>
                </div>
                <span class="text-sm font-medium">Live Camera</span>
            </button>

            <!-- Settings Button -->
            <button class="group bg-transparent border-2 border-green-600 hover:bg-green-600 text-green-400 hover:text-white font-medium py-3 px-6 rounded-xl flex items-center space-x-3 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                <div class="w-8 h-8 bg-green-600 bg-opacity-20 group-hover:bg-white group-hover:bg-opacity-20 rounded-lg flex items-center justify-center transition-colors duration-300">
                    <i class="fas fa-cog text-base"></i>
                </div>
                <span class="text-sm font-medium">Settings</span>
            </button>
        </div>

        <!-- Footer Info -->
        <div class="mt-8 pt-6 border-t border-gray-600 flex justify-between items-center">
            <div class="text-center flex-1">
                <p class="text-gray-400 text-sm">© 2024 BioWatch-x. All rights reserved.</p>
                <p class="text-gray-500 text-xs mt-1">Smart Wildlife Monitoring System</p>
            </div>
        </div>

        <!-- Bottom indicator -->
        <div class="flex justify-center mt-4">
            <div class="w-12 h-1 bg-green-600 rounded-full"></div>
        </div>
    </div>
</footer>