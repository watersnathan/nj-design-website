@extends('layouts.app')

@section('title', 'Message from ' . $message->name . ' — NJ Design Admin')

@section('content')
    <div class="min-h-screen bg-[#fafafa] py-12 px-6 md:px-12 flex flex-col items-center font-sans">
        <div class="max-w-3xl w-full">

            <a href="{{ route('admin.messages.index') }}"
                class="inline-flex items-center gap-2 text-sm font-bold text-gray-500 hover:text-black transition mb-6">
                <i class="fa-solid fa-arrow-left"></i> Back to Inbox
            </a>

            <div class="bg-white rounded-3xl shadow-xl border border-gray-100 overflow-hidden">

                <!-- Header -->
                <div class="p-8 md:p-10 border-b border-gray-100 bg-gray-50/50 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-red-100 rounded-full blur-3xl opacity-50 -mr-10 -mt-10">
                    </div>
                    <div class="flex justify-between items-start relative z-10">
                        <div>
                            <h1 class="text-2xl font-black text-gray-900 mb-1">{{ $message->subject ?: 'No Subject' }}</h1>
                            <p class="text-sm text-gray-600">
                                From: <span class="font-bold text-black">{{ $message->name }}</span>
                                &lt;{{ $message->email }}&gt;
                            </p>
                        </div>
                        <div class="text-right text-xs text-gray-500 font-medium">
                            <p>{{ $message->created_at->format('M j, Y') }}</p>
                            <p>{{ $message->created_at->format('g:i A') }}</p>
                            @if($message->ip_address)
                                <p class="mt-2 text-gray-400">IP: {{ $message->ip_address }}</p>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Body -->
                <div class="p-8 md:p-10">
                    <div class="prose max-w-none text-gray-700 leading-relaxed whitespace-pre-wrap">{{ $message->message }}
                    </div>
                </div>

                <!-- Actions -->
                <div class="p-8 md:p-10 bg-gray-50 border-t border-gray-100 flex flex-wrap gap-3">
                    <a href="mailto:{{ $message->email }}?subject=Re: {{ urlencode($message->subject ?: 'Your inquiry') }}"
                        class="inline-flex items-center gap-2 bg-black hover:bg-gray-800 text-white font-bold px-6 py-3 rounded-xl transition text-sm shadow-md">
                        <i class="fa-solid fa-reply"></i> Reply via Email
                    </a>

                    <a href="https://wa.me/?text={{ urlencode('Hello ' . $message->name . ', regarding your inquiry: ') }}"
                        target="_blank"
                        class="inline-flex items-center gap-2 bg-green-500 hover:bg-green-600 text-white font-bold px-6 py-3 rounded-xl transition text-sm shadow-md">
                        <i class="fa-brands fa-whatsapp text-lg"></i> Reply on WhatsApp
                    </a>

                    <form action="{{ route('admin.messages.destroy', $message) }}" method="POST" class="ml-auto"
                        onsubmit="return confirm('Delete this message?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="inline-flex items-center gap-2 text-red-500 hover:text-red-700 font-bold px-4 py-3 transition text-sm">
                            <i class="fa-solid fa-trash"></i> Delete
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection