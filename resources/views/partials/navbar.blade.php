{{-- Mobile Header --}}
<div class="lg:hidden fixed top-0 left-0 right-0 z-50 bg-gradient-to-r from-emerald-500 to-emerald-600 text-white shadow-lg">
    <div class="flex items-center justify-between p-4">
        <div class="flex items-center space-x-3">
            <div class="w-10 h-10 bg-white rounded-xl flex items-center justify-center backdrop-blur-sm overflow-hidden">
                <img src="{{ asset('assets/images/logo.png') }}" alt="BioWatch-x Logo" class="w-9 h-9 object-contain">
            </div>
            <div>
                <h1 class="text-lg font-bold">BioWatch-x</h1>
                <p class="text-xs opacity-80">Sistem Monitoring Cerdas</p>
            </div>
        </div>
        <button id="mobile-menu-toggle" class="p-2 rounded-lg bg-white bg-opacity-20 backdrop-blur-sm transition-all duration-300 hover:bg-opacity-30">
            <i class="fas fa-bars text-lg"></i>
        </button>
    </div>
</div>

{{-- Mobile Sidebar Overlay --}}
<div id="mobile-sidebar-overlay" class="lg:hidden fixed inset-0 bg-black bg-opacity-50 z-40 transition-opacity duration-300 opacity-0 pointer-events-none">
</div>

{{-- Mobile Sidebar --}}
<div id="mobile-sidebar" class="lg:hidden fixed top-0 left-0 h-full w-64 max-w-[75vw] bg-gradient-to-b from-emerald-600 to-emerald-700 text-white z-50 transform -translate-x-full transition-transform duration-300 ease-in-out shadow-2xl">
    {{-- Sidebar Header --}}
    <div class="flex items-center justify-between p-4 border-b border-emerald-500">
        <div class="flex items-center space-x-2">
            <div class="w-8 h-8 bg-white rounded-lg flex items-center justify-center backdrop-blur-sm overflow-hidden">
                <img src="{{ asset('assets/images/logo.png') }}" alt="BioWatch-x Logo" class="w-7 h-7 object-contain">
            </div>
            <div>
                <h2 class="text-sm font-bold">BioWatch-x</h2>
                <p class="text-xs opacity-80">Menu Navigasi</p>
            </div>
        </div>
        <button id="mobile-sidebar-close" class="p-2 rounded-lg bg-white bg-opacity-20 backdrop-blur-sm transition-all duration-300 hover:bg-opacity-30">
            <i class="fas fa-times text-sm"></i>
        </button>
    </div>
    
    {{-- Login Button - Moved to top --}}
    <div class="p-4 border-b border-emerald-500">
        <a href="{{ route('login') }}" class="flex items-center justify-center space-x-2 p-3 bg-white text-emerald-600 rounded-lg font-semibold transition-all duration-300 hover:bg-emerald-50 text-sm">
            <i class="fas fa-sign-in-alt text-xs"></i>
            <span>Login</span>
        </a>
    </div>
    
    {{-- Navigation Menu --}}
    <nav class="flex-1 p-4 overflow-y-auto">
        <div class="space-y-2">
            <a href="#status" class="flex items-center space-x-3 p-3 rounded-lg bg-white bg-opacity-10 hover:bg-opacity-20 transition-all duration-300 group">
                <i class="fas fa-chart-line text-emerald-100 w-4"></i>
                <span class="font-medium text-white text-sm">Status Sistem</span>
            </a>

            <a href="#kontrol" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-white hover:bg-opacity-10 transition-all duration-300 group">
                <i class="fas fa-cogs text-emerald-100 w-4"></i>
                <span class="font-medium text-white text-sm">Pendeteksian</span>
            </a>
            
            <a href="#pemantauan" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-white hover:bg-opacity-10 transition-all duration-300 group">
                <i class="fas fa-video text-emerald-100 w-4"></i>
                <span class="font-medium text-white text-sm">Pemantauan</span>
            </a>

            <a href="#peringatan" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-white hover:bg-opacity-10 transition-all duration-300 group">
                <i class="fas fa-bell text-emerald-100 w-4"></i>
                <span class="font-medium text-white text-sm">Peringatan</span>
                <div class="ml-auto">
                    <span class="bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center font-bold">3</span>
                </div>
            </a>

            <a href="#faq" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-white hover:bg-opacity-10 transition-all duration-300 group">
                <i class="fas fa-question-circle text-emerald-100 w-4"></i>
                <span class="font-medium text-white text-sm">FAQ</span>
            </a>
        </div>
    </nav>
</div>

{{-- Desktop Navbar --}}
<header class="hidden lg:block mb-20">
    <nav class="fixed w-full z-20 top-0 start-0 bg-gradient-to-r from-emerald-500 to-emerald-600 shadow-lg backdrop-blur-sm">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto py-3 px-6">
            <!-- Logo dengan efek hover -->
            <a href="#" class="flex items-center space-x-3 group">
                <div class="relative overflow-hidden rounded-lg transition-all duration-300 transform group-hover:scale-105 bg-white bg-opacity-20 p-1 backdrop-blur-sm">
                    <div class="w-12 h-12 bg-white rounded-md flex items-center justify-center overflow-hidden">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="BioWatch-x Logo" class="w-11 h-11 object-contain">
                    </div>
                </div>
                <div class="flex flex-col">
                    <span class="text-2xl font-bold text-white transition-all duration-300 group-hover:text-emerald-100">BioWatch-x</span>
                    <span class="text-sm text-emerald-100 transition-all duration-300 group-hover:text-white">Sistem Monitoring Cerdas</span>
                </div>
            </a>

            <!-- Desktop Menu dengan efek hover - CENTERED -->
            <div class="hidden lg:flex lg:items-center lg:space-x-8 text-sm font-medium absolute left-1/2 transform -translate-x-1/2" id="menu">
                <a href="#status" class="text-white py-2 px-4 rounded-lg hover:bg-white hover:bg-opacity-20 backdrop-blur-sm transition-all duration-300 transform hover:scale-105 hover:shadow-md relative overflow-hidden group">
                    <span class="relative z-10">Status Sistem</span>
                    <div class="absolute bottom-0 left-0 w-0 h-1 bg-emerald-200 group-hover:w-full transition-all duration-300"></div>
                </a>
                <a href="#kontrol" class="text-white py-2 px-4 rounded-lg hover:bg-white hover:bg-opacity-20 backdrop-blur-sm transition-all duration-300 transform hover:scale-105 hover:shadow-md relative overflow-hidden group">
                    <span class="relative z-10">Pendeteksian</span>
                    <div class="absolute bottom-0 left-0 w-0 h-1 bg-emerald-200 group-hover:w-full transition-all duration-300"></div>
                </a>
                <a href="#pemantauan" class="text-white py-2 px-4 rounded-lg hover:bg-white hover:bg-opacity-20 backdrop-blur-sm transition-all duration-300 transform hover:scale-105 hover:shadow-md relative overflow-hidden group">
                    <span class="relative z-10">Pemantauan</span>
                    <div class="absolute bottom-0 left-0 w-0 h-1 bg-emerald-200 group-hover:w-full transition-all duration-300"></div>
                </a>
                <a href="#peringatan" class="text-white py-2 px-4 rounded-lg hover:bg-white hover:bg-opacity-20 backdrop-blur-sm transition-all duration-300 transform hover:scale-105 hover:shadow-md relative overflow-hidden group">
                    <span class="relative z-10">Peringatan</span>
                    <div class="absolute bottom-0 left-0 w-0 h-1 bg-emerald-200 group-hover:w-full transition-all duration-300"></div>
                </a>
                <a href="#faq" class="text-white py-2 px-4 rounded-lg hover:bg-white hover:bg-opacity-20 backdrop-blur-sm transition-all duration-300 transform hover:scale-105 hover:shadow-md relative overflow-hidden group">
                    <span class="relative z-10">FAQ</span>
                    <div class="absolute bottom-0 left-0 w-0 h-1 bg-emerald-200 group-hover:w-full transition-all duration-300"></div>
                </a>
            </div>

            <!-- Right Side Items -->
            <div class="hidden lg:flex lg:items-center lg:space-x-4">
                <!-- Notification Bell with Badge -->
                <div class="relative">
                    <button class="text-white p-2 rounded-lg hover:bg-white hover:bg-opacity-20 backdrop-blur-sm transition-all duration-300 transform hover:scale-105 hover:shadow-md relative">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
                        </svg>
                        <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center font-bold animate-pulse">3</span>
                    </button>
                </div>

                <!-- Settings Button -->
                <button class="text-white p-2 rounded-lg hover:bg-white hover:bg-opacity-20 backdrop-blur-sm transition-all duration-300 transform hover:scale-105 hover:shadow-md">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                    </svg>
                </button>

                <!-- Login Button -->
                <a href="{{ route('login') }}" class="text-emerald-600 py-2 px-4 rounded-lg bg-white hover:bg-emerald-50 font-semibold transition-all duration-300 transform hover:scale-105 hover:shadow-md flex items-center space-x-2">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                    </svg>
                    <span>Login</span>
                </a>
            </div>
        </div>
    </nav>
</header>

<!-- Spacer for mobile -->
<div class="lg:hidden h-16"></div>

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Mobile sidebar elements
        const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
        const mobileSidebar = document.getElementById('mobile-sidebar');
        const mobileSidebarOverlay = document.getElementById('mobile-sidebar-overlay');
        const mobileSidebarClose = document.getElementById('mobile-sidebar-close');

        // Function to open sidebar
        function openSidebar() {
            mobileSidebar.classList.remove('-translate-x-full');
            mobileSidebarOverlay.classList.remove('opacity-0', 'pointer-events-none');
            mobileSidebarOverlay.classList.add('opacity-100');
            document.body.classList.add('overflow-hidden'); // Prevent body scroll
            
            // Change hamburger to X
            const icon = mobileMenuToggle.querySelector('i');
            icon.classList.remove('fa-bars');
            icon.classList.add('fa-times');
        }

        // Function to close sidebar
        function closeSidebar() {
            mobileSidebar.classList.add('-translate-x-full');
            mobileSidebarOverlay.classList.add('opacity-0', 'pointer-events-none');
            mobileSidebarOverlay.classList.remove('opacity-100');
            document.body.classList.remove('overflow-hidden'); // Restore body scroll
            
            // Change X back to hamburger
            const icon = mobileMenuToggle.querySelector('i');
            icon.classList.remove('fa-times');
            icon.classList.add('fa-bars');
        }

        // Event listeners
        if (mobileMenuToggle) {
            mobileMenuToggle.addEventListener('click', function() {
                if (mobileSidebar.classList.contains('-translate-x-full')) {
                    openSidebar();
                } else {
                    closeSidebar();
                }
            });
        }

        if (mobileSidebarClose) {
            mobileSidebarClose.addEventListener('click', closeSidebar);
        }

        if (mobileSidebarOverlay) {
            mobileSidebarOverlay.addEventListener('click', closeSidebar);
        }

        // Close sidebar when pressing Escape key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape' && !mobileSidebar.classList.contains('-translate-x-full')) {
                closeSidebar();
            }
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
                
                // Close sidebar after clicking link
                if (!mobileSidebar.classList.contains('-translate-x-full')) {
                    closeSidebar();
                }
            });
        });

        // Add active state to navigation links
        const navLinks = document.querySelectorAll('nav a[href^="#"]');
        
        function updateActiveLink() {
            const scrollPosition = window.scrollY + 100;
            
            navLinks.forEach(link => {
                const targetId = link.getAttribute('href').substring(1);
                const targetElement = document.getElementById(targetId);
                
                if (targetElement) {
                    const elementTop = targetElement.offsetTop;
                    const elementHeight = targetElement.offsetHeight;
                    
                    if (scrollPosition >= elementTop && scrollPosition < elementTop + elementHeight) {
                        // For desktop links
                        navLinks.forEach(l => l.classList.remove('bg-white', 'bg-opacity-20'));
                        link.classList.add('bg-white', 'bg-opacity-20');
                        
                        // For sidebar links
                        const sidebarLinks = document.querySelectorAll('#mobile-sidebar a[href^="#"]');
                        sidebarLinks.forEach(l => {
                            l.classList.remove('bg-white', 'bg-opacity-20');
                            if (l.getAttribute('href') === link.getAttribute('href')) {
                                l.classList.add('bg-white', 'bg-opacity-20');
                            }
                        });
                    }
                }
            });
        }
        
        window.addEventListener('scroll', updateActiveLink);
        updateActiveLink(); // Initial call
    });
</script>
@endpush