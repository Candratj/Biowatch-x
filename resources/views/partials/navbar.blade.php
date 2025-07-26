{{-- Navbar - Hidden on mobile, shown on desktop --}}
<header class="hidden md:block mb-20">
    <nav class="fixed w-full z-20 top-0 start-0 glass-effect shadow-lg">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto py-3 px-6">
            <!-- Logo -->
            <a href="#" class="flex items-center space-x-3 group">
                <div class="relative overflow-hidden rounded-lg transition-all duration-300 transform group-hover:scale-105 bg-white p-2">
                    <div class="w-8 h-8 bg-green-600 rounded-md flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2L13.09 8.26L20 9L13.09 9.74L12 16L10.91 9.74L4 9L10.91 8.26L12 2Z" />
                            <path d="M12 8C12 8 14 10 16 12C18 14 16 16 16 16C16 16 14 14 12 16C10 14 8 16 8 16C8 16 6 14 8 12C10 10 12 8 12 8Z" />
                        </svg>
                    </div>
                </div>
                <div class="flex flex-col">
                    <span class="text-2xl font-bold text-white transition-all duration-300 group-hover:text-green-400">BioWatch-x</span>
                    <span class="text-sm text-gray-300 transition-all duration-300 group-hover:text-green-400">Sistem Monitoring Cerdas</span>
                </div>
            </a>

            <!-- Desktop Menu - CENTERED -->
            <div class="flex items-center space-x-8 text-sm font-medium absolute left-1/2 transform -translate-x-1/2" id="menu">
                <a href="#status" class="nav-link text-white py-2 px-4 rounded-lg hover:bg-green-500 hover:bg-opacity-20 transition-all duration-300 transform hover:scale-105 relative overflow-hidden group">
                    <span class="relative z-10">Status Sistem</span>
                    <div class="absolute bottom-0 left-0 w-0 h-1 bg-green-500 group-hover:w-full transition-all duration-300"></div>
                </a>
                <a href="#cameras" class="nav-link text-gray-300 py-2 px-4 rounded-lg hover:bg-green-500 hover:bg-opacity-20 hover:text-white transition-all duration-300 transform hover:scale-105 relative overflow-hidden group">
                    <span class="relative z-10">Cameras</span>
                    <div class="absolute bottom-0 left-0 w-0 h-1 bg-green-500 group-hover:w-full transition-all duration-300"></div>
                </a>
                <a href="#alerts" class="nav-link text-gray-300 py-2 px-4 rounded-lg hover:bg-green-500 hover:bg-opacity-20 hover:text-white transition-all duration-300 transform hover:scale-105 relative overflow-hidden group">
                    <span class="relative z-10">Alerts</span>
                    <div class="absolute bottom-0 left-0 w-0 h-1 bg-green-500 group-hover:w-full transition-all duration-300"></div>
                </a>
                <a href="#control" class="nav-link text-gray-300 py-2 px-4 rounded-lg hover:bg-green-500 hover:bg-opacity-20 hover:text-white transition-all duration-300 transform hover:scale-105 relative overflow-hidden group">
                    <span class="relative z-10">Control</span>
                    <div class="absolute bottom-0 left-0 w-0 h-1 bg-green-500 group-hover:w-full transition-all duration-300"></div>
                </a>
            </div>

            <!-- Right Side Items -->
            <div class="flex items-center space-x-4">
                <!-- Notification Bell with Badge -->
                <div class="relative">
                    <button class="text-gray-300 p-2 rounded-lg hover:bg-green-500 hover:bg-opacity-20 hover:text-white transition-all duration-300 transform hover:scale-105 relative">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
                        </svg>
                        <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center font-bold animate-pulse">3</span>
                    </button>
                </div>

                <!-- Settings Button -->
                <button class="text-gray-300 p-2 rounded-lg hover:bg-green-500 hover:bg-opacity-20 hover:text-white transition-all duration-300 transform hover:scale-105">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                    </svg>
                </button>

                <!-- Login Button -->
                <a href="{{ route('login') }}" class="text-white py-2 px-4 rounded-lg bg-green-600 hover:bg-green-700 font-semibold transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center space-x-2">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                    </svg>
                    <span>Login</span>
                </a>
            </div>
        </div>
    </nav>
</header>

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const navLinks = document.querySelectorAll('.nav-link');
        
        // Set active state based on current section
        function setActiveNav() {
            const sections = ['status', 'cameras', 'alerts', 'control'];
            let current = 'status'; // default
            
            sections.forEach(section => {
                const element = document.getElementById(section);
                if (element) {
                    const rect = element.getBoundingClientRect();
                    if (rect.top <= 100 && rect.bottom >= 100) {
                        current = section;
                    }
                }
            });
            
            navLinks.forEach(link => {
                link.classList.remove('text-white');
                link.classList.add('text-gray-300');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.remove('text-gray-300');
                    link.classList.add('text-white');
                }
            });
        }
        
        // Navigation click handlers
        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Remove active from all
                navLinks.forEach(nav => {
                    nav.classList.remove('text-white');
                    nav.classList.add('text-gray-300');
                });
                
                // Add active to clicked
                this.classList.remove('text-gray-300');
                this.classList.add('text-white');
                
                // Scroll to section
                const target = this.getAttribute('href');
                document.querySelector(target)?.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            });
        });
        
        // Update active nav on scroll
        window.addEventListener('scroll', setActiveNav);
        setActiveNav(); // Initial call
    });
</script>
@endpush