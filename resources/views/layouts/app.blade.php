<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'NJ Design — Websites, Software Systems & Graphics Design')</title>
    <meta name="description"
        content="@yield('meta_description', 'NJ Design builds fast, modern websites, custom software systems, and unforgettable brand graphics for businesses that want to stand out.')">
    <meta name="theme-color" content="#ef4444">

    {{-- Open Graph --}}
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title', 'NJ Design')">
    <meta property="og:description"
        content="@yield('meta_description', 'Websites, software systems, and graphics design built for growth.')">
    <meta property="og:image" content="{{ asset('images/logo.png') }}">

    {{-- Twitter --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'NJ Design')">
    <meta name="twitter:description"
        content="@yield('meta_description', 'Websites, software systems, and graphics design built for growth.')">

    <link rel="icon" type="image/jpeg" href="{{ asset('favicon.jpeg') }}">

    {{-- Tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Inter', 'ui-sans-serif', 'system-ui'] },
                    keyframes: {
                        'fade-in-up': { '0%': { opacity: 0, transform: 'translateY(16px)' }, '100%': { opacity: 1, transform: 'translateY(0)' } },
                        'float': { '0%,100%': { transform: 'translateY(0)' }, '50%': { transform: 'translateY(-10px)' } },
                        'toast-in': { '0%': { opacity: 0, transform: 'translateY(-10px)' }, '100%': { opacity: 1, transform: 'translateY(0)' } },
                    },
                    animation: {
                        'fade-in-up': 'fade-in-up .7s ease-out forwards',
                        'float': 'float 4s ease-in-out infinite',
                        'toast-in': 'toast-in .3s ease-out forwards',
                    }
                }
            }
        }
    </script>

    {{-- Inter font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    {{-- Icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        html {
            font-family: 'Inter', ui-sans-serif, system-ui, sans-serif;
        }

        [x-cloak] {
            display: none !important;
        }

        .reveal {
            opacity: 0;
            transform: translateY(24px);
            transition: opacity .6s ease, transform .6s ease;
        }

        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
    @stack('head')
</head>

<body class="bg-white text-gray-900 antialiased flex flex-col min-h-screen selection:bg-red-500 selection:text-white">

    {{-- Skip link --}}
    <a href="#main"
        class="sr-only focus:not-sr-only focus:absolute focus:top-2 focus:left-2 focus:z-[100] focus:bg-red-500 focus:text-white focus:px-4 focus:py-2 focus:rounded-lg">Skip
        to content</a>

    {{-- Header --}}
    <header class="w-full py-4 px-6 md:px-16 bg-white/85 backdrop-blur-md border-b border-gray-100 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto flex justify-between items-center">

            <a href="{{ route('home') }}" class="flex items-center gap-2 group" aria-label="NJ Design home">
                <img src="{{ asset('images/logo.png') }}" alt="NJ Design logo"
                    class="h-10 md:h-12 w-auto object-contain transition-transform group-hover:scale-105">
            </a>

            {{-- Desktop Nav --}}
            <nav class="hidden md:flex items-center space-x-1 text-sm font-medium" aria-label="Primary">
                @foreach ([
                                ['home', 'Home'],
                                ['services', 'Services'],
                                ['about', 'About'],
                                ['contact', 'Contact'],
                            ] as [$route, $label])
                            <a href="{{ route($route) }}" class="px-4 py-2 rounded-full transition
                                          {{ request()->routeIs($route)
                    ? 'bg-red-500 text-white shadow-sm'
                    : 'text-gray-700 hover:text-red-500 hover:bg-red-50' }}">
                                {{ $label }}
                            </a>
                @endforeach

                <a href="{{ route('contact') }}"
                    class="ml-2 bg-black hover:bg-red-500 text-white px-5 py-2.5 rounded-full transition shadow-sm">
                    Hire Us
                </a>
            </nav>

            {{-- Mobile trigger --}}
            <button id="mobile-menu-btn" type="button"
                class="md:hidden inline-flex items-center justify-center w-10 h-10 rounded-lg text-gray-700 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-red-500"
                aria-controls="mobile-menu" aria-expanded="false" aria-label="Open menu">
                <i class="fa-solid fa-bars text-lg" id="menu-icon"></i>
            </button>
        </div>

        {{-- Mobile menu panel --}}
        <div id="mobile-menu"
            class="md:hidden hidden mt-3 rounded-2xl border border-gray-100 bg-white shadow-xl overflow-hidden">
            <nav class="flex flex-col p-2" aria-label="Mobile">
                @foreach ([
                        ['home', 'Home', 'fa-house'],
                        ['services', 'Services', 'fa-briefcase'],
                        ['about', 'About', 'fa-circle-info'],
                        ['contact', 'Contact', 'fa-envelope'],
                    ] as [$route, $label, $icon])
                    <a href="{{ route($route) }}"
                        class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium transition
                                  {{ request()->routeIs($route) ? 'bg-red-50 text-red-600' : 'text-gray-700 hover:bg-gray-50' }}">
                        <i class="fa-solid {{ $icon }} w-4 text-center"></i> {{ $label }}
                    </a>
                @endforeach

                <a href="{{ route('contact') }}"
                    class="mt-1 flex items-center justify-center gap-2 bg-red-500 hover:bg-red-600 text-white px-4 py-3 rounded-xl text-sm font-bold transition">
                    <i class="fa-solid fa-bolt"></i> Hire Us
                </a>
            </nav>
        </div>
    </header>

    {{-- Toast --}}
    @if (session('success'))
        <div id="toast" class="fixed top-20 right-6 z-[60] max-w-sm animate-toast-in" role="status" aria-live="polite">
            <div class="flex items-start gap-3 bg-black text-white rounded-2xl px-5 py-4 shadow-2xl border border-gray-800">
                <div class="w-8 h-8 rounded-full bg-green-500 flex items-center justify-center shrink-0">
                    <i class="fa-solid fa-check text-sm"></i>
                </div>
                <p class="text-sm leading-relaxed">{{ session('success') }}</p>
                <button onclick="this.parentElement.parentElement.remove()" class="text-gray-400 hover:text-white ml-2"
                    aria-label="Dismiss">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
        </div>
    @endif

    <main id="main" class="flex-grow">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="w-full bg-black text-white pt-14 pb-8 px-6 md:px-12">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-10 mb-10">
            <div class="md:col-span-2 space-y-4">
                <img src="{{ asset('images/logo.png') }}" alt="NJ Design"
                    class="h-10 w-auto object-contain brightness-0 invert">
                <p class="text-gray-400 text-sm leading-relaxed max-w-sm">
                    We build fast websites, reliable software systems, and memorable brand graphics for businesses that
                    want to stand out.
                </p>
                <div class="flex items-center space-x-3 text-gray-300 text-sm pt-2">
                    <a href="#" aria-label="Facebook"
                        class="w-9 h-9 rounded-full bg-white/5 hover:bg-red-500 flex items-center justify-center transition"><i
                            class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" aria-label="Instagram"
                        class="w-9 h-9 rounded-full bg-white/5 hover:bg-red-500 flex items-center justify-center transition"><i
                            class="fa-brands fa-instagram"></i></a>
                    <a href="#" aria-label="Twitter"
                        class="w-9 h-9 rounded-full bg-white/5 hover:bg-red-500 flex items-center justify-center transition"><i
                            class="fa-brands fa-twitter"></i></a>
                    <a href="#" aria-label="YouTube"
                        class="w-9 h-9 rounded-full bg-white/5 hover:bg-red-500 flex items-center justify-center transition"><i
                            class="fa-brands fa-youtube"></i></a>
                </div>
            </div>

            <div>
                <h4 class="text-xs font-bold uppercase tracking-widest text-gray-500 mb-4">Company</h4>
                <ul class="space-y-2.5 text-sm">
                    <li><a href="{{ route('home') }}" class="text-gray-300 hover:text-red-400 transition">Home</a></li>
                    <li><a href="{{ route('services') }}"
                            class="text-gray-300 hover:text-red-400 transition">Services</a></li>
                    <li><a href="{{ route('about') }}" class="text-gray-300 hover:text-red-400 transition">About</a>
                    </li>
                    <li><a href="{{ route('contact') }}" class="text-gray-300 hover:text-red-400 transition">Contact</a>
                    </li>
                </ul>
            </div>

            <div>
                <h4 class="text-xs font-bold uppercase tracking-widest text-gray-500 mb-4">Get in touch</h4>
                <ul class="space-y-3 text-sm">
                    <li class="flex items-center gap-2">
                        <i class="fa-brands fa-whatsapp text-green-400"></i>
                        <a href="https://wa.me/256786377185?text=Hello%20NJ%20Design,%20I%20am%20interested%20in%20your%20services."
                            target="_blank" rel="noopener"
                            class="text-gray-300 hover:text-green-400 transition underline decoration-dotted">+256 786
                            377 185</a>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fa-solid fa-phone text-gray-300"></i>
                        <a href="tel:+256740687351" class="text-gray-300 hover:text-red-400 transition">+256 740 687
                            351</a>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fa-solid fa-envelope text-gray-300"></i>
                        <a href="mailto:njdesignstore@gmail.com"
                            class="text-gray-300 hover:text-red-400 transition">njdesignstore@gmail.com</a>
                    </li>
                </ul>
            </div>
        </div>

        <div
            class="max-w-7xl mx-auto pt-6 border-t border-white/10 flex flex-col sm:flex-row justify-between items-center gap-3 text-xs text-gray-500">
            <p>&copy; {{ date('Y') }} NJ Design. All rights reserved.</p>
            <div class="flex space-x-4">
                <a href="#" class="hover:text-white transition">Privacy Policy</a>
                <span class="text-gray-700">|</span>
                <a href="#" class="hover:text-white transition">Terms</a>
            </div>
        </div>
    </footer>

    {{-- Back to top --}}
    <button id="back-to-top" type="button"
        class="fixed bottom-24 right-6 w-11 h-11 rounded-full bg-black text-white shadow-2xl opacity-0 pointer-events-none transition-all duration-300 hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-red-500 z-50"
        aria-label="Back to top">
        <i class="fa-solid fa-arrow-up text-sm"></i>
    </button>

    {{-- WhatsApp float --}}
    <a href="https://wa.me/256786377185?text=Hello%20NJ%20Design,%20I%20need%20help%20with%20a%20project."
        target="_blank" rel="noopener"
        class="fixed bottom-6 right-6 bg-green-500 hover:bg-green-600 text-white w-14 h-14 rounded-full flex items-center justify-center shadow-2xl transition-all duration-300 transform hover:scale-110 z-50 group"
        aria-label="Chat on WhatsApp">
        <i class="fa-brands fa-whatsapp text-3xl"></i>
        <span
            class="absolute right-16 bg-black text-white text-xs font-semibold px-3 py-1.5 rounded-lg shadow-lg opacity-0 group-hover:opacity-100 transition duration-200 whitespace-nowrap pointer-events-none">Chat
            on WhatsApp</span>
    </a>

    <script>
            // Mobile menu
            (function () {
                const btn = document.getElementById('mobile-menu-btn');
                const menu = document.getElementById('mobile-menu');
                const icon = document.getElementById('menu-icon');
                if (!btn || !menu) return;

                btn.addEventListener('click', () => {
                    const open = !menu.classList.contains('hidden');
                    menu.classList.toggle('hidden');
                    btn.setAttribute('aria-expanded', String(!open));
                    icon.className = !open ? 'fa-solid fa-xmark text-lg' : 'fa-solid fa-bars text-lg';
                });
            })();

        // Back to top
        (function () {
            const btn = document.getElementById('back-to-top');
            if (!btn) return;
            const onScroll = () => {
                const show = window.scrollY > 400;
                btn.classList.toggle('opacity-0', !show);
                btn.classList.toggle('pointer-events-none', !show);
            };
            window.addEventListener('scroll', onScroll, { passive: true });
            btn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
            onScroll();
        })();

        // Scroll reveal
        (function () {
            const els = document.querySelectorAll('.reveal');
            if (!els.length) return;
            if (!('IntersectionObserver' in window)) {
                els.forEach(el => el.classList.add('visible'));
                return;
            }
            const io = new IntersectionObserver((entries) => {
                entries.forEach(e => {
                    if (e.isIntersecting) { e.target.classList.add('visible'); io.unobserve(e.target); }
                });
            }, { threshold: 0.12 });
            els.forEach(el => io.observe(el));
        })();

        // Auto-dismiss toast
        (function () {
            const toast = document.getElementById('toast');
            if (!toast) return;
            setTimeout(() => {
                toast.style.transition = 'opacity .4s ease, transform .4s ease';
                toast.style.opacity = '0';
                toast.style.transform = 'translateY(-10px)';
                setTimeout(() => toast.remove(), 400);
            }, 6000);
        })();
    </script>
    @stack('scripts')
</body>

</html>