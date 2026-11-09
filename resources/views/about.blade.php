@extends('layouts.app')

@section('title', 'About Us — NJ Design')
@section('meta_description', 'Meet NJ Design — a team crafting digital excellence through websites, software systems, POS systems, and creative graphics.')

@section('content')
    <div class="min-h-screen bg-white py-20 md:py-28 px-6 md:px-16 relative overflow-hidden font-sans">

        <!-- Ambient Background -->
        <div class="absolute top-0 right-0 w-[40%] h-[40%] bg-red-50 rounded-full blur-[120px] pointer-events-none -z-10">
        </div>

        <div class="max-w-5xl mx-auto text-center space-y-8 relative z-10 reveal">
            <span
                class="inline-block bg-white border border-gray-200 text-red-600 font-extrabold px-4 py-1.5 rounded-full text-xs tracking-widest uppercase shadow-sm">About
                NJ Design</span>
            <h1 class="text-5xl md:text-7xl font-black tracking-tight text-gray-900 leading-[1.1]">
                Crafting Digital <br class="hidden md:block">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-red-400">Excellence</span> & <br
                    class="hidden md:block">
                Creative Solutions
            </h1>
            <p class="text-lg md:text-xl text-gray-600 leading-relaxed max-w-3xl mx-auto pt-4">
                At <strong class="text-black">NJ Design</strong>, we transform ideas into powerful digital experiences.
                Whether you need a stunning, high-performance website, a complex custom software system, a Point of Sale
                system, or eye-catching graphic designs, our team has you sorted.
            </p>
        </div>

        <!-- Core Pillars -->
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 my-24 relative z-10">
            @foreach ([
                    ['01', 'Innovation First', 'We leverage modern web technologies and clean architecture to build scalable solutions that grow with your business.', 'red'],
                    ['02', 'Client-Centric Approach', 'Your goals are our mission. We work closely with you from concept to launch to ensure your exact vision comes to life.', 'black'],
                    ['03', 'Pixel-Perfect Design', 'From branding and graphics to responsive layouts, we ensure every detail looks professional and captivating.', 'red'],
                ] as [$num, $title, $desc, $color])
                <div
                    class="bg-gray-50 border border-gray-100 p-10 rounded-[2rem] shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-300 reveal">
                    <div
                        class="w-14 h-14 {{ $color === 'red' ? 'bg-red-500' : 'bg-black' }} text-white rounded-2xl flex items-center justify-center font-black text-xl mb-8 shadow-md">
                        {{ $num }}
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900">{{ $title }}</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">{{ $desc }}</p>
                </div>
            @endforeach
        </div>

        <!-- CTA -->
        <div
            class="max-w-5xl mx-auto w-full bg-black text-white rounded-[2.5rem] p-10 md:p-16 flex flex-col md:flex-row justify-between items-center shadow-2xl space-y-8 md:space-y-0 relative overflow-hidden reveal">
            <div class="absolute -right-20 -bottom-20 w-64 h-64 bg-red-500/20 rounded-full blur-[80px]"></div>
            <div class="space-y-3 text-center md:text-left relative z-10">
                <h2 class="text-3xl md:text-4xl font-bold">Ready to start your project?</h2>
                <p class="text-gray-400 text-base max-w-lg">Let's discuss how NJ Design can help your business stand out
                    from the competition.</p>
            </div>
            <a href="{{ route('contact') }}"
                class="relative z-10 bg-red-500 hover:bg-red-600 text-white font-bold px-10 py-4 rounded-full shadow-lg shadow-red-500/30 transition transform hover:-translate-y-1 text-sm tracking-wide shrink-0">
                Get in Touch
            </a>
        </div>

    </div>
@endsection