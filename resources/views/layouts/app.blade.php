<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Biowatch-x') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('ckeditor')
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        * {
            font-family: 'Inter', sans-serif;
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
        }
        
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .admin-sidebar {
            background: rgba(15, 23, 42, 0.95);
            backdrop-filter: blur(20px);
            border-right: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .admin-header {
            background: rgba(15, 23, 42, 0.95);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .nav-item {
            transition: all 0.3s ease;
        }
        
        .nav-item:hover {
            background: rgba(34, 197, 94, 0.1);
            border-radius: 0.5rem;
            transform: translateX(4px);
        }
        
        .nav-item.active {
            background: rgba(34, 197, 94, 0.2);
            color: #22c55e;
            border-radius: 0.5rem;
        }
        
        .card-hover {
            transition: all 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-2px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
    </style>
</head>

<body class="gradient-bg min-h-screen text-white">
    <!-- Admin Header -->
    <header class="admin-header fixed top-0 left-0 right-0 z-50 h-16">
        <div class="flex items-center justify-between px-6 h-full">
            <div class="flex items-center space-x-4">
                <button id="sidebar-toggle" class="md:hidden text-white hover:text-green-400 transition-colors">
                    <i class="fas fa-bars text-xl"></i>
                </button>
                <div class="flex items-center space-x-3">
                    <div class="w-8 h-8 bg-green-600 rounded-lg flex items-center justify-center">
                        <i class="fas fa-leaf text-white"></i>
                    </div>
                    <div>
                        <h1 class="text-lg font-bold text-white">BioWatch-x</h1>
                        <p class="text-xs text-gray-400">Admin Dashboard</p>
                    </div>
                </div>
            </div>
            
            <div class="flex items-center space-x-4">
                <!-- Notifications -->
                <button class="relative text-gray-400 hover:text-white transition-colors">
                    <i class="fas fa-bell text-lg"></i>
                    <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full w-4 h-4 flex items-center justify-center">3</span>
                </button>
                
                <!-- User Menu -->
                <div class="flex items-center space-x-2">
                    <div class="w-8 h-8 bg-green-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-user text-white text-sm"></i>
                    </div>
                    <span class="hidden md:block text-sm text-white">Admin</span>
                </div>
            </div>
        </div>
    </header>

    <!-- Sidebar -->
    <aside id="sidebar" class="admin-sidebar fixed left-0 top-16 bottom-0 w-64 transform -translate-x-full md:translate-x-0 transition-transform z-40">
        <div class="p-6">
            <nav class="space-y-2">
                <a href="#" class="nav-item active flex items-center space-x-3 px-3 py-2 text-sm">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
                <a href="#" class="nav-item flex items-center space-x-3 px-3 py-2 text-sm text-gray-400">
                    <i class="fas fa-broadcast-tower"></i>
                    <span>Sensors</span>
                </a>
                <a href="#" class="nav-item flex items-center space-x-3 px-3 py-2 text-sm text-gray-400">
                    <i class="fas fa-video"></i>
                    <span>Cameras</span>
                </a>
                <a href="#" class="nav-item flex items-center space-x-3 px-3 py-2 text-sm text-gray-400">
                    <i class="fas fa-exclamation-triangle"></i>
                    <span>Alerts</span>
                </a>
                <a href="#" class="nav-item flex items-center space-x-3 px-3 py-2 text-sm text-gray-400">
                    <i class="fas fa-chart-bar"></i>
                    <span>Analytics</span>
                </a>
                <a href="#" class="nav-item flex items-center space-x-3 px-3 py-2 text-sm text-gray-400">
                    <i class="fas fa-users"></i>
                    <span>Users</span>
                </a>
                <a href="#" class="nav-item flex items-center space-x-3 px-3 py-2 text-sm text-gray-400">
                    <i class="fas fa-cog"></i>
                    <span>Settings</span>
                </a>
            </nav>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="md:ml-64 pt-16 min-h-screen">
        <div class="p-6">
            @yield('content')
        </div>
    </main>

    <!-- Overlay for mobile sidebar -->
    <div id="sidebar-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-30 hidden md:hidden"></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" crossorigin="anonymous"></script>
    
    <script>
        // Sidebar toggle functionality
        document.addEventListener('DOMContentLoaded', function() {
            const sidebarToggle = document.getElementById('sidebar-toggle');
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebar-overlay');
            
            sidebarToggle?.addEventListener('click', function() {
                sidebar.classList.toggle('-translate-x-full');
                overlay.classList.toggle('hidden');
            });
            
            overlay?.addEventListener('click', function() {
                sidebar.classList.add('-translate-x-full');
                overlay.classList.add('hidden');
            });
            
            // Navigation active state
            const navItems = document.querySelectorAll('.nav-item');
            navItems.forEach(item => {
                item.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    navItems.forEach(nav => {
                        nav.classList.remove('active', 'text-green-400');
                        nav.classList.add('text-gray-400');
                    });
                    
                    this.classList.remove('text-gray-400');
                    this.classList.add('active', 'text-green-400');
                });
            });
        });
    </script>
</body>

</html>