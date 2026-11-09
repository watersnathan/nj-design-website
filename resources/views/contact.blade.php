@extends('layouts.app')

@section('title', 'Contact Us — NJ Design')
@section('meta_description', 'Get a free consultation. Tell us about your website, software, POS, or graphics design project.')

@section('content')
    <div
        class="min-h-screen bg-[#fafafa] py-16 md:py-24 px-6 md:px-16 flex flex-col justify-center items-center relative overflow-hidden font-sans">

        <!-- Ambient Background -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none -z-10">
            <div class="absolute top-[20%] left-[10%] w-[30%] h-[30%] bg-red-100/50 rounded-full blur-[100px]"></div>
            <div class="absolute bottom-[10%] right-[10%] w-[40%] h-[40%] bg-orange-50/50 rounded-full blur-[100px]"></div>
        </div>

        <div
            class="max-w-5xl w-full grid grid-cols-1 md:grid-cols-5 bg-white rounded-[2.5rem] shadow-2xl border border-gray-100 overflow-hidden relative z-10 reveal">

            <!-- Left Side: Info -->
            <div
                class="md:col-span-2 bg-black text-white p-10 md:p-12 flex flex-col justify-between relative overflow-hidden">
                <div class="absolute -right-10 -bottom-10 w-48 h-48 bg-green-500/20 rounded-full blur-[60px]"></div>

                <div class="relative z-10">
                    <h3 class="text-3xl font-bold mb-4">Let's talk on WhatsApp.</h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-8">Fill out the form and hit send. It will
                        automatically open your WhatsApp app with a pre-written message to our team.</p>

                    <div class="space-y-6 text-sm">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-green-400">
                                <i class="fa-brands fa-whatsapp text-xl"></i>
                            </div>
                            <div>
                                <p class="text-gray-500 text-xs uppercase tracking-wider font-bold">WhatsApp</p>
                                <p class="font-medium">+256 786 377 185</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-gray-300">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div>
                                <p class="text-gray-500 text-xs uppercase tracking-wider font-bold">Call Us</p>
                                <p class="font-medium">+256 740 687 351</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Form -->
            <div class="md:col-span-3 p-10 md:p-12">
                <h1 class="text-3xl font-black text-gray-900 mb-2">Send a Message</h1>
                <p class="text-gray-500 text-sm mb-8">We usually respond within a few minutes on WhatsApp.</p>

                <form id="whatsapp-form" class="space-y-5">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <label for="name"
                                class="block text-xs font-bold uppercase tracking-wider text-gray-700 mb-2">Your
                                Name</label>
                            <input id="name" type="text" required
                                class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:bg-white transition-colors text-sm"
                                placeholder="Jane Doe">
                        </div>
                        <div>
                            <label for="email"
                                class="block text-xs font-bold uppercase tracking-wider text-gray-700 mb-2">Email Address
                                <span class="text-gray-400 normal-case font-normal">(optional)</span></label>
                            <input id="email" type="email"
                                class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:bg-white transition-colors text-sm"
                                placeholder="jane@example.com">
                        </div>
                    </div>

                    <div>
                        <label for="service"
                            class="block text-xs font-bold uppercase tracking-wider text-gray-700 mb-2">What do you
                            need?</label>
                        <select id="service" required
                            class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:bg-white transition-colors text-sm">
                            <option value="" disabled selected>Select a service...</option>
                            <option value="Website Development">Website Development</option>
                            <option value="Software System">Software System</option>
                            <option value="Point of Sale (POS) System">Point of Sale (POS) System</option>
                            <option value="Graphics Design">Graphics Design</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                    <div>
                        <label for="message"
                            class="block text-xs font-bold uppercase tracking-wider text-gray-700 mb-2">Project
                            Details</label>
                        <textarea id="message" rows="4" required
                            class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:bg-white transition-colors text-sm"
                            placeholder="Tell us a bit about your project..."></textarea>
                    </div>

                    <button type="submit"
                        class="w-full bg-green-500 hover:bg-green-600 text-white font-bold py-4 rounded-xl shadow-lg shadow-green-500/30 transition-all transform hover:-translate-y-0.5 tracking-wide text-sm flex items-center justify-center gap-2 mt-2">
                        <i class="fa-brands fa-whatsapp text-lg"></i>
                        <span>SEND VIA WHATSAPP</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.getElementById('whatsapp-form').addEventListener('submit', function (e) {
            e.preventDefault(); // Stop the form from submitting normally

            // 1. Get the values
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const service = document.getElementById('service').value;
            const message = document.getElementById('message').value;

            // 2. Your WhatsApp Number (Include the country code, NO plus sign)
            const myPhoneNumber = '256786377185';

            // 3. Build the message
            let text = `*New Project Inquiry*%0A%0A`;
            text += `*Name:* ${name}%0A`;

            if (email) {
                text += `*Email:* ${email}%0A`;
            }

            text += `*Service Needed:* ${service}%0A%0A`;
            text += `*Project Details:*%0A${message}`;

            // 4. Create the WhatsApp URL
            const waUrl = `https://wa.me/${myPhoneNumber}?text=${text}`;

            // 5. Open WhatsApp
            window.open(waUrl, '_blank');
        });
    </script>
@endpush