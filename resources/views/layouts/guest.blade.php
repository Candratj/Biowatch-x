<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'BioWatch-x - Sistem Monitoring Cerdas')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        * {
            font-family: 'Inter', sans-serif;
        }
        
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
        }
        
        .mobile-container {
            max-width: 428px;
            margin: 0 auto;
        }
        
        @media (min-width: 768px) {
            .mobile-container {
                max-width: 100%;
            }
        }
        
        .live-dot {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }
        
        .tab-btn {
            transition: all 0.3s ease;
        }
        
        .tab-btn.active {
            background: rgba(34, 197, 94, 0.2);
            color: #22c55e;
            border: 1px solid #22c55e;
        }
        
        .bottom-nav {
            background: rgba(15, 23, 42, 0.95);
            backdrop-filter: blur(20px);
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .nav-item {
            transition: all 0.3s ease;
        }
        
        .nav-item.active {
            color: #22c55e;
        }
        
        .nav-item:hover {
            color: #22c55e;
            transform: translateY(-2px);
        }
    </style>
</head>

<body class="gradient-bg min-h-screen text-white overflow-x-hidden">
    <!-- Mobile Header -->
    <header class="sticky top-0 z-50 glass-effect">
        <div class="mobile-container px-4 py-4">
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-xl md:text-2xl font-bold">BioWatch-x</h1>
                    <p class="text-gray-400 text-xs md:text-sm">Monitoring System</p>
                </div>
                <div class="flex items-center space-x-3">
                    <span class="live-dot bg-red-500 text-white px-2 md:px-3 py-1 rounded-full text-xs font-semibold flex items-center">
                        <div class="w-1.5 h-1.5 md:w-2 md:h-2 bg-white rounded-full mr-1 md:mr-2 animate-pulse"></div>
                        LIVE
                    </span>
                    <button class="text-gray-400 hover:text-white transition-colors">
                        <i class="fas fa-cog text-lg md:text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>
    
    <!-- Main Content -->
    <main class="pb-20 md:pb-8">
        <div class="mobile-container px-4">
            @yield('content')
        </div>
    </main>
    
    <!-- Bottom Navigation (Mobile) -->
    <nav class="md:hidden fixed bottom-0 left-0 right-0 bottom-nav">
        <div class="flex justify-around items-center py-2">
            <a href="#status" class="nav-item active flex flex-col items-center py-2 px-3 text-xs">
                <i class="fas fa-home text-lg mb-1"></i>
                <span>Home</span>
            </a>
            <a href="#cameras" class="nav-item flex flex-col items-center py-2 px-3 text-xs text-gray-400">
                <i class="fas fa-video text-lg mb-1"></i>
                <span>Cameras</span>
            </a>
            <a href="#alerts" class="nav-item flex flex-col items-center py-2 px-3 text-xs text-gray-400">
                <i class="fas fa-bell text-lg mb-1"></i>
                <span>Alerts</span>
            </a>
            <a href="#settings" class="nav-item flex flex-col items-center py-2 px-3 text-xs text-gray-400">
                <i class="fas fa-cog text-lg mb-1"></i>
                <span>Settings</span>
            </a>
        </div>
    </nav>
    
    <!-- Desktop Navigation (Hidden on mobile) -->
    <nav class="hidden md:block fixed top-20 left-0 right-0 z-40">
        <div class="container mx-auto px-4">
            <div class="flex justify-center space-x-4">
                <a href="#status" class="tab-btn active px-4 py-2 rounded-full text-sm font-medium">Status Sistem</a>
                <a href="#cameras" class="tab-btn glass-effect px-4 py-2 rounded-full text-sm font-medium text-gray-400">Cameras</a>
                <a href="#alerts" class="tab-btn glass-effect px-4 py-2 rounded-full text-sm font-medium text-gray-400">Alerts</a>
                <a href="#control" class="tab-btn glass-effect px-4 py-2 rounded-full text-sm font-medium text-gray-400">Control</a>
            </div>
        </div>
    </nav>
    
    @stack('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" crossorigin="anonymous"></script>
    
    <script>
        // Navigation functionality
        document.addEventListener('DOMContentLoaded', function() {
            const navItems = document.querySelectorAll('.nav-item');
            const tabBtns = document.querySelectorAll('.tab-btn');
            
            // Mobile navigation
            navItems.forEach(item => {
                item.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Remove active class from all items
                    navItems.forEach(nav => nav.classList.remove('active'));
                    
                    // Add active class to clicked item
                    this.classList.add('active');
                    
                    // Scroll to section
                    const target = this.getAttribute('href');
                    if (target !== '#settings') {
                        document.querySelector(target)?.scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                });
            });
            
            // Desktop navigation
            tabBtns.forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Remove active class from all buttons
                    tabBtns.forEach(tab => {
                        tab.classList.remove('active');
                        tab.classList.add('glass-effect', 'text-gray-400');
                    });
                    
                    // Add active class to clicked button
                    this.classList.add('active');
                    this.classList.remove('glass-effect', 'text-gray-400');
                    
                    // Scroll to section
                    const target = this.getAttribute('href');
                    document.querySelector(target)?.scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
        });
    </script>
</body>

</html>