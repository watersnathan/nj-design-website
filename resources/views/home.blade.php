@extends('layouts.app')

@section('title', 'NJ Design — Websites, Software Systems & Graphics Design')
@section('meta_description', 'NJ Design builds fast modern websites, custom software systems, POS systems, and unforgettable brand graphics. Get sorted today.')

@section('content')
    <div
        class="min-h-screen bg-[#fafafa] flex flex-col font-sans overflow-x-hidden selection:bg-red-500 selection:text-white">

        <!-- ============================== -->
        <!-- HERO SECTION                   -->
        <!-- ============================== -->
        <section class="relative flex items-center justify-center px-4 sm:px-6 md:px-16 py-16 md:py-24 overflow-hidden">

            <!-- Ambient Background Glows & Pattern -->
            <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none -z-10">
                <div class="absolute -top-[10%] -left-[10%] w-[40%] h-[50%] bg-red-200/50 rounded-full blur-[120px]"></div>
                <div class="absolute bottom-[10%] right-[10%] w-[30%] h-[40%] bg-orange-100/60 rounded-full blur-[100px]">
                </div>
                <div
                    class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-[0.03]">
                </div>
            </div>

            <div class="max-w-7xl w-full grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-12 items-center relative z-10">

                <!-- Left Side: Copy & CTAs -->
                <div class="flex flex-col items-center lg:items-start text-center lg:text-left space-y-8 reveal">

                    <!-- Trust Badge -->
                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white border border-gray-200 shadow-sm">
                        <span class="flex h-2 w-2 relative">
                            <span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-red-500"></span>
                        </span>
                        <span class="text-xs font-bold text-gray-700 uppercase tracking-widest">Available for new
                            projects</span>
                    </div>

                    <!-- Main Headline -->
                    <h1 class="text-5xl sm:text-6xl lg:text-7xl font-black text-gray-900 leading-[1.05] tracking-tight">
                        We build digital <br class="hidden lg:block">
                        <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-red-400">experiences</span>
                        <br class="hidden lg:block">
                        that convert.
                    </h1>

                    <!-- Subheadline -->
                    <p class="text-lg sm:text-xl text-gray-600 max-w-xl leading-relaxed">
                        In need of a <strong class="text-gray-900">website</strong>, <strong class="text-gray-900">software
                            system</strong>, <strong class="text-gray-900">POS system</strong>, or <strong
                            class="text-gray-900">graphics design</strong>? NJ Design crafts pixel-perfect, high-performance
                        solutions to grow your business.
                    </p>

                    <!-- CTAs -->
                    <div class="flex flex-col sm:flex-row gap-4 w-full sm:w-auto pt-2">
                        <a href="{{ route('contact') }}"
                            class="group relative inline-flex items-center justify-center bg-red-500 hover:bg-red-600 text-white font-bold px-8 py-4 rounded-full shadow-xl shadow-red-500/30 transition-all duration-300 transform hover:-translate-y-1 text-sm tracking-wide overflow-hidden">
                            <span
                                class="absolute inset-0 w-full h-full bg-white/20 transform -skew-x-12 -translate-x-full group-hover:translate-x-full transition-transform duration-1000"></span>
                            <span class="relative flex items-center gap-2">
                                We've You Sorted <i
                                    class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                            </span>
                        </a>
                        <a href="{{ route('services') }}"
                            class="inline-flex items-center justify-center bg-white border-2 border-gray-100 hover:border-gray-200 text-gray-800 font-bold px-8 py-4 rounded-full shadow-sm hover:shadow-md transition-all duration-300 text-sm tracking-wide">
                            Explore Services
                        </a>
                    </div>

                    <!-- Trust Indicators -->
                    <div class="pt-6 flex items-center gap-6 text-sm font-medium text-gray-500">
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-check-circle text-green-500"></i> 100% Custom Code
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-bolt text-yellow-500"></i> Fast Delivery
                        </div>
                    </div>
                </div>

                <!-- Right Side: Premium 3D Phone Mockup -->
                <div class="relative flex justify-center items-center reveal">

                    <!-- Decorative Glass Cards -->
                    <div
                        class="absolute top-10 -left-6 sm:left-0 w-48 h-64 bg-white/60 backdrop-blur-xl border border-white/80 rounded-3xl shadow-xl transform -rotate-6 z-0 hidden sm:block">
                    </div>
                    <div
                        class="absolute bottom-10 -right-6 sm:right-0 w-48 h-64 bg-red-500/10 backdrop-blur-xl border border-white/50 rounded-3xl shadow-xl transform rotate-6 z-0 hidden sm:block">
                    </div>

                    <!-- iPhone Chassis -->
                    <div
                        class="relative w-[300px] sm:w-[340px] bg-gray-900 rounded-[3rem] p-3 shadow-2xl border-4 border-gray-800 z-10 transform transition-transform duration-700 hover:scale-105 hover:rotate-1">

                        <!-- Dynamic Island -->
                        <div
                            class="absolute top-5 left-1/2 transform -translate-x-1/2 w-32 h-7 bg-black rounded-full z-30 flex items-center justify-between px-3">
                            <div class="w-2.5 h-2.5 bg-gray-800 rounded-full"></div>
                            <div class="w-3 h-3 bg-blue-900/50 rounded-full border border-blue-800/30"></div>
                        </div>

                        <!-- Screen -->
                        <div
                            class="bg-white rounded-[2.4rem] overflow-hidden relative pt-12 pb-6 shadow-inner h-[600px] flex flex-col">

                            <!-- Screen Header -->
                            <div class="px-6 text-center pb-4">
                                <span class="text-[10px] font-black text-gray-400 uppercase tracking-widest block mb-1">NJ
                                    Design</span>
                                <h3 class="text-xl font-bold text-gray-900">Welcome Home</h3>
                            </div>

                            <!-- App Content Simulation -->
                            <div class="flex-grow px-4 space-y-4">
                                <!-- Feature Card 1 -->
                                <div
                                    class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-2xl p-5 border border-gray-100 shadow-sm relative overflow-hidden group">
                                    <div class="absolute -right-4 -top-4 w-16 h-16 bg-red-500/10 rounded-full blur-xl">
                                    </div>
                                    <div
                                        class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-red-100 text-red-600 mb-3">
                                        <i class="fa-solid fa-code text-xs"></i>
                                    </div>
                                    <h4 class="font-bold text-gray-900 text-sm mb-1">Websites</h4>
                                    <p class="text-[11px] text-gray-500 leading-snug">Lightning-fast, responsive platforms
                                        tailored to convert.</p>
                                </div>

                                <!-- Feature Card 2 -->
                                <div class="bg-black text-white rounded-2xl p-5 shadow-lg relative overflow-hidden group">
                                    <div class="absolute -right-4 -top-4 w-16 h-16 bg-red-500/30 rounded-full blur-xl">
                                    </div>
                                    <div
                                        class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-gray-800 text-white mb-3">
                                        <i class="fa-solid fa-laptop-code text-xs"></i>
                                    </div>
                                    <h4 class="font-bold text-sm mb-1">Software Systems</h4>
                                    <p class="text-[11px] text-gray-400 leading-snug">Secure, scalable architecture to
                                        automate your workflow.</p>
                                </div>

                                <!-- Feature Card 3 -->
                                <div
                                    class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-2xl p-5 border border-gray-100 shadow-sm relative overflow-hidden group">
                                    <div
                                        class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-red-100 text-red-600 mb-3">
                                        <i class="fa-solid fa-palette text-xs"></i>
                                    </div>
                                    <h4 class="font-bold text-gray-900 text-sm mb-1">Graphics Design</h4>
                                    <p class="text-[11px] text-gray-500 leading-snug">Unforgettable brand identities and
                                        marketing assets.</p>
                                </div>
                            </div>

                            <!-- Screen Footer Button -->
                            <div class="px-6 pt-4">
                                <div
                                    class="w-full bg-red-500 text-white text-xs font-bold text-center py-3 rounded-xl shadow-md shadow-red-500/20">
                                    GET STARTED
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Notification Badge -->
                    <div
                        class="absolute -right-4 bottom-20 bg-white p-3 rounded-2xl shadow-xl border border-gray-100 flex items-center gap-3 z-20 animate-float hidden sm:flex">
                        <div class="w-8 h-8 rounded-full bg-green-100 text-green-600 flex items-center justify-center">
                            <i class="fa-solid fa-check text-xs"></i>
                        </div>
                        <div>
                            <p class="text-[10px] text-gray-500 font-bold uppercase tracking-wider">Status</p>
                            <p class="text-xs font-bold text-gray-900">Project Delivered</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================== -->
        <!-- STATS STRIP                    -->
        <!-- ============================== -->
        <section class="bg-white border-y border-gray-100 py-10 px-6 md:px-16 relative z-20">
            <div class="max-w-7xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                @foreach ([
                        ['50+', 'Projects Delivered'],
                        ['30+', 'Happy Clients'],
                        ['24h', 'Response Time'],
                        ['100%', 'Custom Built'],
                    ] as [$num, $label])
                    <div class="reveal">
                        <div class="text-3xl md:text-4xl font-black text-red-500">{{ $num }}</div>
                        <div class="text-xs font-semibold uppercase tracking-widest text-gray-500 mt-1">{{ $label }}</div>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- ============================== -->
        <!-- CORE EXPERTISE                 -->
        <!-- ============================== -->
        <section class="bg-gray-50 py-20 px-4 sm:px-6 md:px-16">
            <div class="max-w-7xl mx-auto">
                <div class="text-center max-w-2xl mx-auto mb-16 reveal">
                    <span
                        class="text-red-600 font-extrabold text-xs uppercase tracking-widest bg-red-50 px-3.5 py-1.5 rounded-full border border-red-100">Core
                        Expertise</span>
                    <h2 class="text-3xl md:text-4xl font-black tracking-tight text-gray-900 mt-3 mb-3">What We Bring To The
                        Table</h2>
                    <p class="text-gray-600 text-sm">Empowering modern businesses with bulletproof tech solutions and
                        high-converting design.</p>
                </div>

                <!-- Changed to 2x2 Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    @foreach ([
                            ['01', 'Modern Websites', 'Lightning-fast, mobile-responsive web platforms tailored specifically to captivate and convert your target audience.', 'fa-globe', 'red'],
                            ['02', 'Custom Software', 'Scalable software systems, portals, and workflow automation built securely to streamline your business operations.', 'fa-code', 'black'],
                            ['03', 'Point of Sale (POS)', 'Smart, reliable POS systems for retail, restaurants, and pharmacies. Track sales, manage inventory, and print receipts with ease.', 'fa-cash-register', 'red'],
                            ['04', 'Graphics & Branding', 'Unique logos, high-end marketing collateral, and digital graphics giving your brand an unforgettable identity.', 'fa-palette', 'black'],
                        ] as [$num, $title, $desc, $icon, $color])
                        <div
                            class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 group reveal">
                            <div
                                class="w-14 h-14 {{ $color === 'red' ? 'bg-red-500 group-hover:bg-black' : 'bg-black group-hover:bg-red-500' }} text-white rounded-2xl flex items-center justify-center font-black text-xl mb-6 shadow-md transition group-hover:rotate-6">
                                <i class="fa-solid {{ $icon }}"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-3 text-gray-900">{{ $title }}</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">{{ $desc }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- ============================== -->
        <!-- CALL TO ACTION                 -->
        <!-- ============================== -->
        <section class="bg-white py-20 px-4 text-center reveal">
            <h2
                class="text-4xl md:text-6xl font-serif italic text-red-900 font-normal transition duration-300 hover:scale-105 cursor-pointer">
                Contact us now!</h2>
            <a href="{{ route('contact') }}"
                class="mt-4 inline-block text-sm font-bold text-black underline underline-offset-4 hover:text-red-600 transition">Get
                a free project consultation &rarr;</a>
        </section>

    </div>
@endsection