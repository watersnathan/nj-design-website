@extends('layouts.app')

@section('title', 'Contact Us — NJ Design')
@section('meta_description', 'Get a free consultation. Tell us about your website, software, or graphics design project.')

@section('content')
    <div class="min-h-screen bg-white py-16 px-6 md:px-16 flex flex-col justify-center items-center">
        <div class="max-w-2xl w-full">
            <div class="text-center mb-8 reveal">
                <h1 class="text-4xl md:text-5xl font-serif italic text-red-900 font-normal mb-3">Contact us now!</h1>
                <p class="text-gray-600 text-sm">Fill out the form below or reach us via our WhatsApp lines in the footer.
                </p>
            </div>

            @if ($errors->any())
                <div class="mb-6 p-4 bg-red-50 border border-red-300 text-red-700 rounded-xl text-sm">
                    <p class="font-bold mb-1"><i class="fa-solid fa-triangle-exclamation mr-1"></i> Please fix the following:
                    </p>
                    <ul class="list-disc list-inside space-y-0.5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('contact.store') }}" method="POST"
                class="bg-gray-50 p-8 md:p-10 rounded-3xl shadow-sm border border-gray-100 space-y-6 reveal">
                @csrf

                <div>
                    <label for="name" class="block text-xs font-bold uppercase tracking-wider text-gray-700 mb-2">Your
                        Name</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name"
                        class="w-full px-4 py-3 bg-white border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 text-sm @error('name') border-red-500 @enderror"
                        placeholder="Jane Doe">
                    @error('name')
                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                </div>

                <div>
                    <label for="email" class="block text-xs font-bold uppercase tracking-wider text-gray-700 mb-2">Email
                        Address</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email"
                        class="w-full px-4 py-3 bg-white border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 text-sm @error('email') border-red-500 @enderror"
                        placeholder="jane@example.com">
                    @error('email')
                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                </div>

                <div>
                    <label for="subject" class="block text-xs font-bold uppercase tracking-wider text-gray-700 mb-2">Subject
                        <span class="text-gray-400 normal-case font-normal">(optional)</span></label>
                    <input id="subject" type="text" name="subject" value="{{ old('subject') }}" autocomplete="off"
                        class="w-full px-4 py-3 bg-white border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 text-sm"
                        placeholder="Website, software, graphics...">
                </div>

                <div>
                    <label for="message" class="block text-xs font-bold uppercase tracking-wider text-gray-700 mb-2">What do
                        you need?</label>
                    <textarea id="message" name="message" rows="4" required
                        class="w-full px-4 py-3 bg-white border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 text-sm @error('message') border-red-500 @enderror"
                        placeholder="Tell us a bit about your project...">{{ old('message') }}</textarea>
                    @error('message')
                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                </div>

                <button type="submit" id="submit-btn"
                    class="w-full bg-red-500 hover:bg-red-600 disabled:opacity-70 disabled:cursor-not-allowed text-white font-bold py-3.5 rounded-xl shadow-lg transition tracking-wide text-sm flex items-center justify-center gap-2">
                    <i class="fa-solid fa-paper-plane"></i>
                    <span>SEND MESSAGE</span>
                </button>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.getElementById('submit-btn')?.addEventListener('click', function () {
            const form = this.closest('form');
            if (form && form.checkValidity()) {
                this.disabled = true;
                this.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i><span>SENDING...</span>';
            }
        });
    </script>
@endpush