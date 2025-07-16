@extends('layouts.app')

@section('content')
    <div
        class="min-h-screen flex items-center justify-center bg-gradient-to-br from-green-50 to-teal-50 py-4 px-4 sm:py-12 sm:px-6 lg:px-8">
        <div
            class="max-w-md w-full space-y-6 bg-white p-6 sm:p-8 md:p-10 rounded-2xl sm:rounded-3xl shadow-xl border border-gray-100">
            <div class="text-center">
                <div class="flex justify-center mb-4 sm:mb-6">
                    <div
                        class="w-16 h-16 sm:w-20 sm:h-20 bg-gradient-to-br from-green-400 to-teal-500 rounded-full flex items-center justify-center shadow-lg">
                        <svg class="w-8 h-8 sm:w-10 sm:h-10 text-white" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                            </path>
                        </svg>
                    </div>
                </div>
                <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-2">
                    BioWatch-x
                </h2>
                <p class="text-gray-500 text-sm sm:text-base">
                    Sistem Monitoring Cerdas
                </p>
                <div class="w-12 sm:w-16 h-1 bg-gradient-to-r from-green-400 to-teal-500 rounded-full mx-auto mt-3 sm:mt-4">
                </div>
            </div>

            @if ($errors->any())
                <div class="bg-red-50 border border-red-200 rounded-xl p-4">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm text-red-700">
                                Email atau password yang Anda masukkan salah.
                            </p>
                        </div>
                    </div>
                </div>
            @endif

            <form class="mt-6 sm:mt-8 space-y-5 sm:space-y-6" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="space-y-4 sm:space-y-5">
                    <div>
                        <label for="email" class="flex items-center text-sm font-medium text-gray-600 mb-2">
                            <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                            Email
                        </label>
                        <input id="email" name="email" type="email" autocomplete="email" required
                            class="w-full px-3 sm:px-4 py-2.5 sm:py-3 border border-gray-200 rounded-lg sm:rounded-xl bg-gray-50 focus:bg-white focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-transparent transition duration-200 text-gray-700 placeholder-gray-400 text-sm sm:text-base"
                            placeholder="nama@example.com">
                    </div>

                    <div>
                        <label for="password" class="flex items-center text-sm font-medium text-gray-600 mb-2">
                            <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                </path>
                            </svg>
                            Password
                        </label>
                        <div class="relative">
                            <input id="password" name="password" type="password" autocomplete="current-password" required
                                class="w-full px-3 sm:px-4 py-2.5 sm:py-3 pr-10 sm:pr-12 border border-gray-200 rounded-lg sm:rounded-xl bg-gray-50 focus:bg-white focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-transparent transition duration-200 text-gray-700 placeholder-gray-400 text-sm sm:text-base"
                                placeholder="Masukkan password">
                            <button type="button" class="absolute inset-y-0 right-0 pr-2 sm:pr-3 flex items-center"
                                onclick="togglePassword()">
                                <svg class="h-4 w-4 sm:h-5 sm:w-5 text-gray-400 hover:text-gray-600" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember-me" name="remember" type="checkbox"
                            class="h-4 w-4 text-green-500 focus:ring-green-400 border-gray-300 rounded">
                        <label for="remember-me" class="ml-2 block text-sm text-gray-600">
                            Ingat saya
                        </label>
                    </div>
                </div>

                <div class="space-y-3 sm:space-y-4">
                    <button type="submit"
                        class="w-full flex justify-center items-center py-2.5 sm:py-3 px-4 border border-transparent text-sm sm:text-base font-semibold rounded-lg sm:rounded-xl text-white bg-gradient-to-r from-green-500 to-teal-500 hover:from-green-600 hover:to-teal-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition duration-300 transform hover:scale-105 shadow-md hover:shadow-lg">
                        <span class="mr-2">Masuk</span>
                        <svg class="w-3 h-3 sm:w-4 sm:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </button>

                    <div class="text-center">
                        <a href="#"
                            class="text-xs sm:text-sm text-gray-500 hover:text-green-500 transition duration-200">
                            Lupa password?
                        </a>
                    </div>

                    <div class="text-center">
                        <span class="text-xs sm:text-sm text-gray-500">Belum punya akun? </span>
                        <a href="#"
                            class="text-xs sm:text-sm text-green-500 hover:text-green-600 font-medium transition duration-200">
                            Daftar sekarang
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
        }
    </script>
@endsection
