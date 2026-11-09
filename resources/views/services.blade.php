@extends('layouts.app')

@section('title', 'Our Services — NJ Design')
@section('meta_description', 'Website development, custom software systems, and graphics design built to grow your business.')

@section('content')
    <div class="min-h-screen bg-[#fafafa] py-16 md:py-24 px-6 md:px-16 relative overflow-hidden font-sans">

        <!-- Ambient Background -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none -z-10">
            <div class="absolute top-[-10%] left-[20%] w-[30%] h-[30%] bg-red-100/60 rounded-full blur-[100px]"></div>
            <div class="absolute bottom-[10%] right-[10%] w-[30%] h-[40%] bg-orange-100/40 rounded-full blur-[100px]"></div>
        </div>

        <div class="max-w-7xl mx-auto w-full relative z-10">

            <!-- Header -->
            <div class="text-center max-w-3xl mx-auto mb-20 space-y-4 reveal">
                <span
                    class="inline-block bg-white border border-gray-200 text-red-600 font-extrabold px-4 py-1.5 rounded-full text-xs tracking-widest uppercase shadow-sm">
                    Our Expert Solutions
                </span>
                <h1 class="text-4xl md:text-6xl font-black tracking-tight text-gray-900 leading-tight">
                    Services Built For <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-red-400">Your Growth</span>
                </h1>
                <p class="text-lg text-gray-600 leading-relaxed">
                    We combine rigorous technical precision and stunning visual design to build digital experiences that
                    stand out and convert.
                </p>
            </div>

            <!-- Services Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-20">

                <!-- Service 1 -->
                <div
                    class="group bg-white rounded-[2rem] p-8 md:p-10 shadow-sm hover:shadow-2xl border border-gray-100 hover:border-red-100 transition-all duration-500 hover:-translate-y-2 relative overflow-hidden reveal">
                    <div
                        class="absolute -right-10 -top-10 w-40 h-40 bg-red-50 rounded-full blur-2xl group-hover:bg-red-100 transition-colors duration-500">
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-red-500 to-red-600 text-white rounded-2xl flex items-center justify-center text-2xl mb-8 shadow-lg shadow-red-500/30 group-hover:scale-110 transition-transform duration-500">
                            <i class="fa-solid fa-globe"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-gray-900">Website Development</h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-8">From corporate landing pages to full-scale
                            interactive web platforms built with Laravel and Tailwind CSS.</p>

                        <ul class="space-y-3 text-sm font-semibold text-gray-700 border-t border-gray-100 pt-6">
                            <li class="flex items-center gap-3"><i class="fa-solid fa-circle-check text-red-500"></i>
                                Responsive Mobile-First Design</li>
                            <li class="flex items-center gap-3"><i class="fa-solid fa-circle-check text-red-500"></i> SEO
                                Optimized Codebase</li>
                            <li class="flex items-center gap-3"><i class="fa-solid fa-circle-check text-red-500"></i> Secure
                                & Fast Loading</li>
                        </ul>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="group bg-black rounded-[2rem] p-8 md:p-10 shadow-2xl border border-gray-800 hover:border-gray-700 transition-all duration-500 hover:-translate-y-2 relative overflow-hidden reveal"
                    style="animation-delay: 0.1s;">
                    <div
                        class="absolute -right-10 -top-10 w-40 h-40 bg-red-500/20 rounded-full blur-2xl group-hover:bg-red-500/30 transition-colors duration-500">
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-16 h-16 bg-gray-800 text-white rounded-2xl flex items-center justify-center text-2xl mb-8 shadow-lg group-hover:scale-110 transition-transform duration-500">
                            <i class="fa-solid fa-laptop-code"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-white">Software Systems</h3>
                        <p class="text-gray-400 text-sm leading-relaxed mb-8">Custom business web apps, inventory tracking
                            tools, and client management databases to automate workflows.</p>

                        <ul class="space-y-3 text-sm font-semibold text-gray-300 border-t border-gray-800 pt-6">
                            <li class="flex items-center gap-3"><i class="fa-solid fa-circle-check text-red-500"></i> Custom
                                Database Architecture</li>
                            <li class="flex items-center gap-3"><i class="fa-solid fa-circle-check text-red-500"></i> User
                                Role Management</li>
                            <li class="flex items-center gap-3"><i class="fa-solid fa-circle-check text-red-500"></i> Secure
                                Authentication Systems</li>
                        </ul>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="group bg-white rounded-[2rem] p-8 md:p-10 shadow-sm hover:shadow-2xl border border-gray-100 hover:border-red-100 transition-all duration-500 hover:-translate-y-2 relative overflow-hidden reveal"
                    style="animation-delay: 0.2s;">
                    <div
                        class="absolute -right-10 -top-10 w-40 h-40 bg-red-50 rounded-full blur-2xl group-hover:bg-red-100 transition-colors duration-500">
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-red-500 to-red-600 text-white rounded-2xl flex items-center justify-center text-2xl mb-8 shadow-lg shadow-red-500/30 group-hover:scale-110 transition-transform duration-500">
                            <i class="fa-solid fa-palette"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-gray-900">Graphics Design</h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-8">Striking visual brand identity, modern logo
                            creation, social media kits, and promotional marketing graphics.</p>

                        <ul class="space-y-3 text-sm font-semibold text-gray-700 border-t border-gray-100 pt-6">
                            <li class="flex items-center gap-3"><i class="fa-solid fa-circle-check text-red-500"></i> Unique
                                Brand Identity & Logos</li>
                            <li class="flex items-center gap-3"><i class="fa-solid fa-circle-check text-red-500"></i> Social
                                Media Marketing Kits</li>
                            <li class="flex items-center gap-3"><i class="fa-solid fa-circle-check text-red-500"></i> Print
                                & Digital Assets</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Bottom CTA -->
            <div
                class="relative bg-gray-900 rounded-[2.5rem] p-10 md:p-16 flex flex-col md:flex-row justify-between items-center shadow-2xl overflow-hidden reveal">
                <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10">
                </div>
                <div class="absolute -left-20 -bottom-20 w-64 h-64 bg-red-500/20 rounded-full blur-[80px]"></div>

                <div class="space-y-3 text-center md:text-left mb-8 md:mb-0 relative z-10">
                    <h2 class="text-3xl md:text-4xl font-bold text-white">Have a custom project in mind?</h2>
                    <p class="text-gray-400 text-base max-w-lg">Let's talk about your exact requirements and get you sorted
                        today with a solution built just for you.</p>
                </div>
                <a href="{{ route('contact') }}"
                    class="relative z-10 bg-red-500 hover:bg-red-600 text-white font-bold px-10 py-4 rounded-full shadow-lg shadow-red-500/30 transition transform hover:-translate-y-1 text-sm tracking-wide shrink-0">
                    Contact Us Now
                </a>
            </div>
        </div>
    </div>
@endsection