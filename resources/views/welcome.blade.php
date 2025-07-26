@extends('layouts.guest')

@section('title', 'BioWatch-x - Sistem Monitoring Cerdas')

@section('content')
    {{-- Status Sistem --}}
    @include('sections.status-sistem')

    {{-- Kontrol Sensor --}}
    @include('sections.kontrol-sensor')

    {{-- Pemantauan Langsung --}}
    @include('sections.pemantauan-langsung')

    {{-- Status Sensor --}}
    @include('sections.status-sensor')

    {{-- Peringatan Terkini --}}
    @include('sections.peringatan-terkini')

    {{-- FAQ --}}
    @include('sections.faq')
@endsection