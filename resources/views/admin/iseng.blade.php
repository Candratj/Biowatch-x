<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Biowatch Dashboard</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="{{ asset('assets/img/tlc.png') }}" type="image/png">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#059669',
                        secondary: '#10B981',
                        accent: '#34D399',
                        dark: '#047857',
                        light: '#A7F3D0',
                        emerald: {
                            50: '#ECFDF5',
                            100: '#D1FAE5',
                            200: '#A7F3D0',
                            300: '#6EE7B7',
                            400: '#34D399',
                            500: '#10B981',
                            600: '#059669',
                            700: '#047857',
                            800: '#065F46',
                            900: '#064E3B',
                        }
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    },
                }
            }
        }
    </script>

    <style>
        .transition-smooth {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .hover-lift {
            transition: transform 0.3s ease;
        }

        .hover-lift:hover {
            transform: translateY(-2px);
        }

        .gradient-bg {
            background: linear-gradient(135deg, #059669 0%, #10B981 100%);
        }

        .emerald-gradient {
            background: linear-gradient(135deg, #059669 0%, #10B981 100%);
        }

        .text-gradient {
            background: linear-gradient(135deg, #059669 0%, #10B981 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .sidebar-z {
            z-index: 30;
        }

        .dropdown-z {
            z-index: 50;
        }

        .main-padding {
            padding-top: 80px;
            min-height: calc(100vh - 64px);
            transition: margin-left 0.3s ease;
        }

        @media (min-width: 1024px) {
            .main-padding {
                margin-left: 16rem;
            }
        }

        @keyframes shimmer {
            0% {
                transform: translateX(-100%);
            }

            100% {
                transform: translateX(100%);
            }
        }

        .animate-shimmer {
            animation: shimmer 2s infinite;
        }

        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #059669;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #10B981;
        }

        /* Active menu styles */
        .menu-active {
            background: linear-gradient(135deg, #059669 0%, #10B981 100%);
            color: white;
            box-shadow: 0 4px 12px rgba(5, 150, 105, 0.3);
            border-left: 4px solid #FFFFFF;
        }

        .menu-active i {
            color: white !important;
        }

        .menu-inactive {
            color: #6B7280;
            background: transparent;
        }

        .menu-inactive:hover {
            background: rgba(5, 150, 105, 0.1);
            color: #059669;
            border-left: 4px solid #059669;
        }

        /* Sidebar specific styles */
        .sidebar-header {
            background: linear-gradient(135deg, #059669 0%, #10B981 100%);
            border-radius: 0 0 20px 20px;
        }

        .sidebar-menu {
            background: #F9FAFB;
        }

        .menu-section-title {
            color: #059669;
            font-weight: 600;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 1rem;
            padding-left: 1rem;
        }

        .menu-item {
            margin-bottom: 0.25rem;
            border-radius: 0 25px 25px 0;
            border-left: 4px solid transparent;
        }

        .menu-item:hover {
            margin-right: 8px;
        }

        .logo-container {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border-radius: 12px;
            padding: 12px;
            margin-bottom: 1rem;
        }

        .dropdown-arrow {
            transition: transform 0.3s ease;
        }

        .dropdown-arrow.rotated {
            transform: rotate(180deg);
        }

        .submenu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }

        .submenu.open {
            max-height: 200px;
        }

        .submenu-item {
            padding-left: 3rem;
            font-size: 0.875rem;
            color: #6B7280;
        }

        .submenu-item:hover {
            color: #059669;
            background: rgba(5, 150, 105, 0.05);
        }

        /* Overlay for mobile sidebar */
        .sidebar-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 20;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

        .sidebar-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        /* New styles for the modern design */
        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .status-badge {
            transition: all 0.3s ease;
        }

        .status-badge:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        .underline-animation {
            position: relative;
        }

        .underline-animation:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 0;
            background-color: #059669;
            transition: width 0.3s ease;
        }

        .underline-animation:hover:after {
            width: 100%;
        }
    </style>

    @stack('styles')
</head>

<body class="bg-gradient-to-br from-green-50 to-emerald-50 font-sans overflow-x-hidden">
    <!-- Header -->
    <header class="fixed top-0 left-0 right-0 z-40 emerald-gradient shadow-lg h-16">
        <div class="h-full px-4 flex items-center">
            <div class="flex items-center justify-between w-full">
                <!-- Logo Section -->
                <div class="flex items-center">
                    <button onclick="toggleSidebar()"
                        class="inline-flex items-center p-2 text-sm text-white rounded-lg hover:bg-white/20 focus:outline-none focus:ring-2 focus:ring-white/30 transition-smooth lg:hidden">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                            </path>
                        </svg>
                    </button>
                    <div class="flex items-center ml-3">
                        <div
                            class="icon-bg w-12 h-12 rounded-xl flex items-center justify-center shadow-lg hover:scale-110 transition-smooth bg-white/20">
                            <i class="fas fa-leaf text-white text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <h1 class="text-white font-bold text-xl">Biowatch-X</h1>
                            <p class="text-white/80 text-sm">Eco Monitoring System</p>
                        </div>
                    </div>
                </div>

                <!-- User Section -->
                <div class="flex items-center space-x-4">
                    <!-- User Welcome -->
                    <div class="hidden md:flex items-center bg-white/10 backdrop-blur-sm rounded-xl px-4 py-2">
                        <div class="flex items-center space-x-2">
                            <div class="relative">
                                <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z">
                                    </path>
                                </svg>
                                <div
                                    class="absolute -top-0.5 -right-0.5 w-1.5 h-1.5 bg-emerald-300 rounded-full animate-ping">
                                </div>
                            </div>
                            <div>
                                <span class="text-sm font-medium text-white/90">Selamat datang,</span>
                                <span class="ml-1 font-bold text-white">Administrator</span>
                            </div>
                        </div>
                    </div>

                    <!-- Notification -->
                    <div class="relative">
                        <button class="relative p-2 text-white hover:bg-white/20 rounded-lg transition-smooth">
                            <i class="fas fa-bell text-lg"></i>
                            <span
                                class="absolute -top-1 -right-1 bg-emerald-300 text-emerald-800 text-xs font-bold rounded-full px-1.5 py-0.5 shadow-lg">
                                3
                            </span>
                        </button>
                    </div>

                    <!-- User Dropdown -->
                    <div class="relative">
                        <button type="button" onclick="toggleUserDropdown()"
                            class="flex items-center space-x-2 p-2 rounded-lg hover:bg-white/20 focus:outline-none focus:ring-2 focus:ring-white/30 transition-smooth">
                            <div
                                class="bg-white/20 w-9 h-9 rounded-full flex items-center justify-center text-white font-bold text-sm shadow-md">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="text-left hidden lg:block">
                                <p class="text-white font-medium text-sm">Administrator</p>
                            </div>
                            <svg class="w-4 h-4 text-white/70 transition-transform duration-200" id="dropdown-arrow"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>

                        <!-- Dropdown Menu -->
                        <div id="user-dropdown"
                            class="z-50 hidden absolute right-0 mt-2 w-64 bg-white rounded-xl shadow-xl border border-gray-100 dropdown-z">
                            <div class="px-4 py-3 border-b border-gray-100">
                                <div class="flex items-center space-x-3">
                                    <div
                                        class="emerald-gradient w-12 h-12 rounded-full flex items-center justify-center text-white font-bold shadow-lg">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium text-gray-900">Administrator</p>
                                        <p class="text-sm text-gray-500">admin@biowatch.com</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Menu Items -->
                            <ul class="py-1">
                                <li>
                                    <a href="#"
                                        class="flex items-center px-4 py-3 text-sm text-gray-700 font-medium hover:bg-gray-50">
                                        <div class="bg-emerald-100 p-2 rounded-lg mr-3">
                                            <i class="fas fa-user text-emerald-600"></i>
                                        </div>
                                        Profil Saya
                                    </a>
                                </li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit"
                                            class="w-full flex items-center px-4 py-3 text-sm text-red-600 font-medium hover:bg-gray-50 text-left">
                                            <div class="bg-red-100 p-2 rounded-lg mr-3">
                                                <i class="fas fa-sign-out-alt text-red-600"></i>
                                            </div>
                                            Keluar
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Sidebar Overlay (Mobile) -->
    <div id="sidebar-overlay" class="sidebar-overlay" onclick="toggleSidebar()"></div>

    <!-- Sidebar -->
    <aside id="sidebar"
        class="fixed top-0 left-0 sidebar-z w-64 h-screen pt-16 transition-transform duration-300 ease-in-out -translate-x-full lg:translate-x-0 bg-white shadow-xl border-r border-gray-200">
        <div class="h-full px-4 pb-4 overflow-y-auto">
            <!-- Menu Utama -->
            <div class="mb-6 mt-6">
                <h3 class="text-sm font-bold text-gray-700 mb-4 px-2">Menu Utama</h3>
                <ul class="space-y-2">
                    <li>
                        <a href="#"
                            class="flex items-center p-3 rounded-xl transition-smooth hover-lift menu-active">
                            <i class="fas fa-home w-5 h-5 text-white"></i>
                            <span class="ml-3 font-medium">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center p-3 rounded-xl transition-smooth hover-lift menu-inactive">
                            <i class="fas fa-bell w-5 h-5"></i>
                            <span class="ml-3 font-medium">Notifikasi Alat</span>
                            <i class="fas fa-chevron-down ml-auto text-xs"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center p-3 rounded-xl transition-smooth hover-lift menu-inactive">
                            <i class="fas fa-database w-5 h-5"></i>
                            <span class="ml-3 font-medium">Data Sensor</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center p-3 rounded-xl transition-smooth hover-lift menu-inactive">
                            <i class="fas fa-cog w-5 h-5"></i>
                            <span class="ml-3 font-medium">Pengaturan</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="transition-smooth main-padding" id="main-content">
        <div class="px-4 sm:px-6 lg:px-8" id="main-wrapper">
            <!-- Breadcrumb -->
            <nav class="flex items-center space-x-2 text-sm text-gray-500 mb-6">
                <span class="text-emerald-600 font-medium">Biowatch-X</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
                <span>Dashboard</span>
            </nav>

            <!-- Header Section -->
            <div class="text-center mb-12 transform transition-all duration-500 hover:scale-105">
                <span
                    class="inline-block bg-gradient-to-r from-emerald-100 to-teal-200 text-emerald-800 px-4 py-1.5 rounded-full text-sm font-medium shadow-sm hover:shadow-md transition-all duration-300 hover:-translate-y-1">
                    Sistem Monitoring
                </span>
                <h2
                    class="text-4xl font-bold bg-gradient-to-r from-emerald-700 to-teal-600 bg-clip-text text-transparent mt-3 relative group">
                    Status Sistem
                    <span
                        class="absolute -bottom-2 left-1/2 w-0 h-1 bg-gradient-to-r from-emerald-600 to-teal-500 group-hover:w-48 transition-all duration-300 transform -translate-x-1/2"></span>
                </h2>
                <p class="text-emerald-800 mt-6 max-w-2xl mx-auto transition-all duration-300 hover:text-emerald-900">
                    Pantau status sensor dan deteksi terakhir dari sistem monitoring kami
                </p>
            </div>

            <!-- Top Statistics Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mb-8">
                <!-- Sensor Online -->
                <div
                    class="group relative rounded-2xl overflow-hidden shadow-lg transition-all duration-300 transform hover:-translate-y-2 hover:shadow-xl bg-white card-hover">
                    <div class="p-6">
                        <div class="flex items-start justify-between mb-6">
                            <div class="flex items-center">
                                <div
                                    class="bg-emerald-500 p-3 rounded-xl shadow-md mr-4 transition-transform duration-500 group-hover:rotate-6 group-hover:scale-110">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-sm font-medium text-gray-600">Sensor Online</h3>
                                    <p class="text-3xl font-bold text-emerald-600 mt-2">6</p>
                                    <p class="text-xs text-gray-500">dari 8 total sensor</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex items-center text-emerald-600 bg-emerald-50 rounded-lg p-2 transition-all duration-300 group-hover:bg-emerald-100">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-xs font-medium">Semua berfungsi normal</span>
                        </div>
                    </div>
                </div>

                <!-- Sensor Offline -->
                <div
                    class="group relative rounded-2xl overflow-hidden shadow-lg transition-all duration-300 transform hover:-translate-y-2 hover:shadow-xl bg-white card-hover">
                    <div class="p-6">
                        <div class="flex items-start justify-between mb-6">
                            <div class="flex items-center">
                                <div
                                    class="bg-red-500 p-3 rounded-xl shadow-md mr-4 transition-transform duration-500 group-hover:rotate-6 group-hover:scale-110">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-sm font-medium text-gray-600">Sensor Offline</h3>
                                    <p class="text-3xl font-bold text-red-500 mt-2">1</p>
                                    <p class="text-xs text-gray-500">perlu perhatian</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex items-center text-red-600 bg-red-50 rounded-lg p-2 transition-all duration-300 group-hover:bg-red-100">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z">
                                </path>
                            </svg>
                            <span class="text-xs font-medium">Periksa sensor 3</span>
                        </div>
                    </div>
                </div>

                <!-- Peringatan -->
                <div
                    class="group relative rounded-2xl overflow-hidden shadow-lg transition-all duration-300 transform hover:-translate-y-2 hover:shadow-xl bg-white card-hover">
                    <div class="p-6">
                        <div class="flex items-start justify-between mb-6">
                            <div class="flex items-center">
                                <div
                                    class="bg-yellow-500 p-3 rounded-xl shadow-md mr-4 transition-transform duration-500 group-hover:rotate-6 group-hover:scale-110">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-sm font-medium text-gray-600">Peringatan</h3>
                                    <p class="text-3xl font-bold text-yellow-500 mt-2">1</p>
                                    <p class="text-xs text-gray-500">baterai rendah</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex items-center text-yellow-600 bg-yellow-50 rounded-lg p-2 transition-all duration-300 group-hover:bg-yellow-100">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            <span class="text-xs font-medium">Perlu penggantian</span>
                        </div>
                    </div>
                </div>

                <!-- Deteksi Hari Ini -->
                <div
                    class="group relative rounded-2xl overflow-hidden shadow-lg transition-all duration-300 transform hover:-translate-y-2 hover:shadow-xl bg-white card-hover">
                    <div class="p-6">
                        <div class="flex items-start justify-between mb-6">
                            <div class="flex items-center">
                                <div
                                    class="bg-blue-500 p-3 rounded-xl shadow-md mr-4 transition-transform duration-500 group-hover:rotate-6 group-hover:scale-110">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 17h5l-5 5-5-5h5V8h5l-5-5-5 5h5v9z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-sm font-medium text-gray-600">Deteksi Hari Ini</h3>
                                    <p class="text-3xl font-bold text-blue-500 mt-2">12</p>
                                    <p class="text-xs text-gray-500">aktivitas terdeteksi</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex items-center text-blue-600 bg-blue-50 rounded-lg p-2 transition-all duration-300 group-hover:bg-blue-100">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z">
                                </path>
                            </svg>
                            <span class="text-xs font-medium">Monitoring aktif</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Status Sensor Section -->
            <div class="bg-white rounded-xl shadow-lg p-6 mb-8 card-hover">
                <div class="flex items-center space-x-2 mb-6">
                    <div class="w-8 h-8 bg-emerald-100 rounded-full flex items-center justify-center">
                        <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold text-gray-900 underline-animation">Status Sensor Biowatch-X
                        </h2>
                        <p class="text-sm text-gray-600">Monitoring real-time untuk deteksi dan pengusiran hama babi
                            hutan & orangutan</p>
                    </div>
                </div>

                <!-- Sensors Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <!-- Sensor 1 -->
                    <div
                        class="group bg-gray-50 rounded-xl p-4 border-l-4 border-emerald-500 transition-all duration-300 hover:bg-white hover:shadow-md">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="font-medium text-gray-900">Sensor 1</h3>
                            <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <p class="text-sm text-gray-600 mb-2">Area Utara</p>
                        <span
                            class="inline-block px-2 py-1 text-xs font-medium bg-emerald-100 text-emerald-800 rounded-full status-badge">online</span>
                        <p class="text-xs text-gray-500 mt-2">Deteksi terakhir: 2 jam lalu</p>
                        <p class="text-xs text-gray-900 font-medium">Baterai: <span
                                class="text-emerald-600">85%</span></p>
                    </div>

                    <!-- Sensor 2 -->
                    <div
                        class="group bg-gray-50 rounded-xl p-4 border-l-4 border-emerald-500 transition-all duration-300 hover:bg-white hover:shadow-md">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="font-medium text-gray-900">Sensor 2</h3>
                            <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <p class="text-sm text-gray-600 mb-2">Area Selatan</p>
                        <span
                            class="inline-block px-2 py-1 text-xs font-medium bg-emerald-100 text-emerald-800 rounded-full status-badge">online</span>
                        <p class="text-xs text-gray-500 mt-2">Deteksi terakhir: 30 menit lalu</p>
                        <p class="text-xs text-gray-900 font-medium">Baterai: <span
                                class="text-emerald-600">92%</span></p>
                    </div>

                    <!-- Sensor 3 -->
                    <div
                        class="group bg-gray-50 rounded-xl p-4 border-l-4 border-red-500 transition-all duration-300 hover:bg-white hover:shadow-md">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="font-medium text-gray-900">Sensor 3</h3>
                            <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </div>
                        <p class="text-sm text-gray-600 mb-2">Area Timur</p>
                        <span
                            class="inline-block px-2 py-1 text-xs font-medium bg-red-100 text-red-800 rounded-full status-badge">offline</span>
                        <p class="text-xs text-gray-500 mt-2">Deteksi terakhir: 1 hari lalu</p>
                        <p class="text-xs text-gray-900 font-medium">Baterai: <span class="text-red-600">15%</span>
                        </p>
                    </div>

                    <!-- Sensor 4 -->
                    <div
                        class="group bg-gray-50 rounded-xl p-4 border-l-4 border-emerald-500 transition-all duration-300 hover:bg-white hover:shadow-md">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="font-medium text-gray-900">Sensor 4</h3>
                            <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <p class="text-sm text-gray-600 mb-2">Area Barat</p>
                        <span
                            class="inline-block px-2 py-1 text-xs font-medium bg-emerald-100 text-emerald-800 rounded-full status-badge">online</span>
                        <p class="text-xs text-gray-500 mt-2">Deteksi terakhir: 5 menit lalu</p>
                        <p class="text-xs text-gray-900 font-medium">Baterai: <span
                                class="text-emerald-600">78%</span></p>
                    </div>

                    <!-- Sensor 5 -->
                    <div
                        class="group bg-gray-50 rounded-xl p-4 border-l-4 border-emerald-500 transition-all duration-300 hover:bg-white hover:shadow-md">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="font-medium text-gray-900">Sensor 5</h3>
                            <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <p class="text-sm text-gray-600 mb-2">Area Tengah</p>
                        <span
                            class="inline-block px-2 py-1 text-xs font-medium bg-emerald-100 text-emerald-800 rounded-full status-badge">online</span>
                        <p class="text-xs text-gray-500 mt-2">Deteksi terakhir: 1 jam lalu</p>
                        <p class="text-xs text-gray-900 font-medium">Baterai: <span
                                class="text-emerald-600">88%</span></p>
                    </div>

                    <!-- Sensor 6 -->
                    <div
                        class="group bg-gray-50 rounded-xl p-4 border-l-4 border-yellow-500 transition-all duration-300 hover:bg-white hover:shadow-md">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="font-medium text-gray-900">Sensor 6</h3>
                            <svg class="w-5 h-5 text-yellow-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z">
                                </path>
                            </svg>
                        </div>
                        <p class="text-sm text-gray-600 mb-2">Area Hutan A</p>
                        <span
                            class="inline-block px-2 py-1 text-xs font-medium bg-yellow-100 text-yellow-800 rounded-full status-badge">warning</span>
                        <p class="text-xs text-gray-500 mt-2">Deteksi terakhir: 15 menit lalu</p>
                        <p class="text-xs text-gray-900 font-medium">Baterai: <span class="text-yellow-600">45%</span>
                        </p>
                    </div>

                    <!-- Sensor 7 -->
                    <div
                        class="group bg-gray-50 rounded-xl p-4 border-l-4 border-emerald-500 transition-all duration-300 hover:bg-white hover:shadow-md">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="font-medium text-gray-900">Sensor 7</h3>
                            <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <p class="text-sm text-gray-600 mb-2">Area Hutan B</p>
                        <span
                            class="inline-block px-2 py-1 text-xs font-medium bg-emerald-100 text-emerald-800 rounded-full status-badge">online</span>
                        <p class="text-xs text-gray-500 mt-2">Deteksi terakhir: 3 jam lalu</p>
                        <p class="text-xs text-gray-900 font-medium">Baterai: <span
                                class="text-emerald-600">67%</span></p>
                    </div>

                    <!-- Sensor 8 -->
                    <div
                        class="group bg-gray-50 rounded-xl p-4 border-l-4 border-emerald-500 transition-all duration-300 hover:bg-white hover:shadow-md">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="font-medium text-gray-900">Sensor 8</h3>
                            <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <p class="text-sm text-gray-600 mb-2">Area Perimeter</p>
                        <span
                            class="inline-block px-2 py-1 text-xs font-medium bg-emerald-100 text-emerald-800 rounded-full status-badge">online</span>
                        <p class="text-xs text-gray-500 mt-2">Deteksi terakhir: 45 menit lalu</p>
                        <p class="text-xs text-gray-900 font-medium">Baterai: <span
                                class="text-emerald-600">91%</span></p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Scripts -->
    <script>
        let sidebarOpen = false;

        function toggleUserDropdown() {
            const dropdown = document.getElementById('user-dropdown');
            const arrow = document.getElementById('dropdown-arrow');

            if (dropdown.classList.contains('hidden')) {
                dropdown.classList.remove('hidden');
                setTimeout(() => {
                    dropdown.classList.remove('opacity-0', 'scale-95');
                    dropdown.classList.add('opacity-100', 'scale-100');
                }, 10);
                arrow.style.transform = 'rotate(180deg)';
            } else {
                dropdown.classList.remove('opacity-100', 'scale-100');
                dropdown.classList.add('opacity-0', 'scale-95');
                arrow.style.transform = 'rotate(0deg)';
                setTimeout(() => {
                    dropdown.classList.add('hidden');
                }, 200);
            }
        }

        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebar-overlay');

            if (sidebarOpen) {
                sidebar.classList.add('-translate-x-full');
                overlay.classList.remove('active');
                sidebarOpen = false;
            } else {
                sidebar.classList.remove('-translate-x-full');
                overlay.classList.add('active');
                sidebarOpen = true;
            }
        }

        // Close dropdown when clicking outside
        document.addEventListener('click', function(event) {
            const dropdown = document.getElementById('user-dropdown');
            const button = event.target.closest('button[onclick="toggleUserDropdown()"]');

            if (!button && dropdown && !dropdown.contains(event.target)) {
                dropdown.classList.remove('opacity-100', 'scale-100');
                dropdown.classList.add('opacity-0', 'scale-95');
                document.getElementById('dropdown-arrow').style.transform = 'rotate(0deg)';
                setTimeout(() => {
                    dropdown.classList.add('hidden');
                }, 200);
            }
        });

        // Handle window resize
        window.addEventListener('resize', function() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebar-overlay');

            if (window.innerWidth >= 1024) {
                sidebar.classList.remove('-translate-x-full');
                overlay.classList.remove('active');
                sidebarOpen = false;
            } else if (sidebarOpen) {
                sidebar.classList.add('-translate-x-full');
                overlay.classList.remove('active');
                sidebarOpen = false;
            }
        });

        // Add real-time updates simulation for the dashboard
        function updateStatus() {
            const timeElement = document.querySelector('.text-3xl.font-bold.text-blue-500');
            if (timeElement) {
                const detections = Math.floor(Math.random() * 5) + 10;
                timeElement.textContent = detections;
            }

            // Update sensor status randomly
            document.querySelectorAll('.status-badge').forEach(badge => {
                const random = Math.random();
                if (random > 0.95) { // 5% chance to change status
                    if (badge.classList.contains('bg-emerald-100')) {
                        badge.classList.remove('bg-emerald-100', 'text-emerald-800');
                        badge.classList.add('bg-red-100', 'text-red-800');
                        badge.textContent = 'offline';
                    } else if (badge.classList.contains('bg-red-100')) {
                        badge.classList.remove('bg-red-100', 'text-red-800');
                        badge.classList.add('bg-emerald-100', 'text-emerald-800');
                        badge.textContent = 'online';
                    }
                }
            });
        }

        // Update every 10 seconds
        setInterval(updateStatus, 10000);

        // Add hover effects for cards
        document.querySelectorAll('.card-hover').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
            });

            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });

        // Mobile touch interactions
        document.querySelectorAll('.card-hover').forEach(card => {
            card.addEventListener('touchstart', function() {
                this.classList.add('scale-105');
                setTimeout(() => {
                    this.classList.remove('scale-105');
                }, 200);
            });
        });
    </script>
</body>

</html>
