@extends('layouts.app')
@section('title', 'Page Not Found — NJ Design')
@section('content')
    <div class="min-h-[70vh] flex flex-col items-center justify-center text-center px-6">
        <div class="text-red-500 text-7xl md:text-9xl font-black mb-2">404</div>
        <h1 class="text-2xl md:text-3xl font-bold mb-3">Oops, that page doesn't exist.</h1>
        <p class="text-gray-600 text-sm mb-8 max-w-md">It might have been moved, or you typed the wrong URL. Let's get you
            back on track.</p>
        <a href="{{ route('home') }}"
            class="bg-red-500 hover:bg-red-600 text-white font-bold px-8 py-3.5 rounded-full shadow-lg transition text-sm">Back
            to Home</a>
    </div>
@endsection