<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'BioWatch-x - Sistem Monitoring Cerdas')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Tailwind Custom Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f0fdf4',
                            100: '#dcfce7',
                            200: '#bbf7d0',
                            300: '#86efac',
                            400: '#4ade80',
                            500: '#22c55e',
                            600: '#16a34a',
                            700: '#15803d',
                            800: '#166534',
                            900: '#14532d'
                        }
                    }
                }
            }
        }
    </script>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
    
    <style>
        /* Custom Styles */
        .gradient-bg {
            background: linear-gradient(135deg, #22c55e 0%, #16a34a 100%);
        }
        
        .card-shadow {
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .glassmorphism {
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.18);
        }
        
        /* Mobile optimizations */
        @media (max-width: 768px) {
            .mobile-card {
                border-radius: 1.5rem;
                padding: 1.5rem;
                margin-bottom: 1rem;
            }
            
            .mobile-text-lg {
                font-size: 1.125rem;
                line-height: 1.75rem;
            }
            
            .mobile-text-sm {
                font-size: 0.875rem;
                line-height: 1.25rem;
            }
        }
        
        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }
        
        /* Custom scrollbar for webkit browsers */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #22c55e;
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: #16a34a;
        }
        
        /* Hide scrollbar for mobile devices */
        @media (max-width: 768px) {
            ::-webkit-scrollbar {
                display: none;
            }
            
            * {
                -ms-overflow-style: none;
                scrollbar-width: none;
            }
        }
    </style>
</head>

<body class="bg-gradient-to-br from-emerald-50 to-green-100 font-sans overflow-x-hidden">
    @include('partials.navbar')
    
    <main class="relative">
        @yield('content')
    </main>
    
    @include('partials.footer')
    
    @stack('scripts')
    
    <!-- Global JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize page
            console.log('BioWatch-x Dashboard loaded');
            
            // Mobile viewport height fix
            function setVh() {
                let vh = window.innerHeight * 0.01;
                document.documentElement.style.setProperty('--vh', `${vh}px`);
            }
            
            setVh();
            window.addEventListener('resize', setVh);
            window.addEventListener('orientationchange', setVh);
            
            // Performance optimization: Lazy load images
            const images = document.querySelectorAll('img[data-src]');
            const imageObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                        imageObserver.unobserve(img);
                    }
                });
            });
            
            images.forEach(img => imageObserver.observe(img));
            
            // Error handling for missing elements
            window.addEventListener('error', function(e) {
                console.warn('BioWatch-x: Element not found or error occurred', e);
            });
        });
        
        // Global utility functions (simplified - no toast notifications)
        window.BioWatch = {
            formatTime: function(minutes) {
                if (minutes < 60) {
                    return `${minutes} menit`;
                } else if (minutes < 1440) {
                    const hours = Math.floor(minutes / 60);
                    return `${hours} jam`;
                } else {
                    const days = Math.floor(minutes / 1440);
                    return `${days} hari`;
                }
            }
        };
    </script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" crossorigin="anonymous"></script>
</body>

</html>