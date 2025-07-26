@extends('layouts.guest')

@section('title', 'BioWatch-x - Sistem Monitoring Cerdas')

@section('content')
    <!-- Main Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6 mt-4">
        <!-- Sensor Online -->
        <div class="glass-effect rounded-2xl p-6 transition-all duration-300 hover:scale-105">
            <div class="flex items-center justify-between mb-4">
                <div class="bg-green-500 p-3 rounded-xl shadow-lg">
                    <i class="fas fa-wifi text-white text-xl"></i>
                </div>
                <div class="text-right">
                    <p class="text-gray-400 text-sm">Sensor Online</p>
                    <p class="text-3xl md:text-4xl font-bold text-green-400">6<span class="text-xl md:text-2xl text-gray-400">/8</span></p>
                </div>
            </div>
            <div class="flex items-center text-green-400 text-sm">
                <i class="fas fa-check-circle mr-2"></i>
                <span>System Normal</span>
            </div>
        </div>

        <!-- Deteksi Terakhir -->
        <div class="glass-effect rounded-2xl p-6 transition-all duration-300 hover:scale-105">
            <div class="flex items-center justify-between mb-4">
                <div class="bg-blue-500 p-3 rounded-xl shadow-lg">
                    <i class="fas fa-eye text-white text-xl"></i>
                </div>
                <div class="text-right">
                    <p class="text-gray-400 text-sm">Deteksi Terakhir</p>
                    <p class="text-3xl md:text-4xl font-bold text-blue-400">4<span class="text-xl md:text-2xl text-gray-400">m</span></p>
                </div>
            </div>
            <div class="flex items-center text-blue-400 text-sm">
                <i class="fas fa-clock mr-2"></i>
                <span>Active Monitoring</span>
            </div>
        </div>
    </div>

    {{-- Status Sensor Section --}}
    <section id="status" class="mb-8">
        @include('sections.status-sensor')
    </section>

    {{-- Pemantauan Langsung Section --}}
    <section id="cameras" class="mb-8">
        @include('sections.pemantauan-langsung')
    </section>

    {{-- Peringatan Terkini Section --}}
    <section id="alerts" class="mb-8">
        @include('sections.peringatan-terkini')
    </section>

    {{-- Kontrol Sensor Section --}}
    <section id="control" class="mb-8">
        @include('sections.kontrol-sensor')
    </section>

    {{-- FAQ Section (Desktop Only) --}}
    <section class="hidden md:block mb-8">
        @include('sections.faq')
    </section>
@endsection