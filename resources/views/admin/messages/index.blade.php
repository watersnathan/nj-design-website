@extends('layouts.app')

@section('title', 'Inbox — NJ Design Admin')

@section('content')
    <div class="min-h-screen bg-[#fafafa] py-12 px-6 md:px-12 relative font-sans">
        <div class="max-w-6xl mx-auto">

            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8 gap-4">
                <div>
                    <h1 class="text-3xl font-black text-gray-900">Inbox</h1>
                    <p class="text-gray-500 text-sm mt-1">
                        You have <span class="font-bold text-red-500">{{ $unreadCount }}</span> unread messages.
                    </p>
                </div>
                <a href="{{ route('home') }}"
                    class="text-sm font-bold text-gray-600 hover:text-black transition flex items-center gap-2">
                    <i class="fa-solid fa-arrow-left"></i> Back to Website
                </a>
            </div>

            @if(session('success'))
                <div class="mb-6 p-4 bg-green-50 border border-green-200 text-green-700 rounded-xl text-sm font-bold">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-gray-50 border-b border-gray-100 text-xs uppercase tracking-widest text-gray-500">
                                <th class="p-5 font-bold">Status</th>
                                <th class="p-5 font-bold">From</th>
                                <th class="p-5 font-bold">Subject</th>
                                <th class="p-5 font-bold">Date</th>
                                <th class="p-5 font-bold text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @forelse($messages as $message)
                                <tr class="hover:bg-gray-50 transition {{ !$message->is_read ? 'bg-red-50/30' : '' }}">
                                    <td class="p-5">
                                        @if(!$message->is_read)
                                            <span
                                                class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[10px] font-bold bg-red-100 text-red-600">
                                                <span class="w-1.5 h-1.5 rounded-full bg-red-500 animate-pulse"></span> New
                                            </span>
                                        @else
                                            <span
                                                class="inline-flex items-center px-2.5 py-1 rounded-full text-[10px] font-bold bg-gray-100 text-gray-500">
                                                Read
                                            </span>
                                        @endif
                                    </td>
                                    <td class="p-5">
                                        <div class="font-bold text-gray-900 text-sm">{{ $message->name }}</div>
                                        <div class="text-xs text-gray-500">{{ $message->email }}</div>
                                    </td>
                                    <td class="p-5 text-sm text-gray-700 font-medium max-w-xs truncate">
                                        {{ $message->subject ?: 'No subject' }}
                                    </td>
                                    <td class="p-5 text-xs text-gray-500 whitespace-nowrap">
                                        {{ $message->created_at->format('M j, Y') }}<br>
                                        {{ $message->created_at->format('g:i A') }}
                                    </td>
                                    <td class="p-5 text-right space-x-2 whitespace-nowrap">
                                        <a href="{{ route('admin.messages.show', $message) }}"
                                            class="inline-flex items-center justify-center w-8 h-8 rounded-lg bg-gray-100 text-gray-600 hover:bg-black hover:text-white transition"
                                            title="View Message">
                                            <i class="fa-solid fa-eye text-xs"></i>
                                        </a>
                                        <form action="{{ route('admin.messages.destroy', $message) }}" method="POST"
                                            class="inline-block" onsubmit="return confirm('Delete this message?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="inline-flex items-center justify-center w-8 h-8 rounded-lg bg-red-50 text-red-500 hover:bg-red-500 hover:text-white transition"
                                                title="Delete Message">
                                                <i class="fa-solid fa-trash text-xs"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="p-10 text-center text-gray-500">
                                        <div
                                            class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4 text-gray-400 text-2xl">
                                            <i class="fa-regular fa-envelope-open"></i>
                                        </div>
                                        <p class="font-bold text-gray-900">No messages yet</p>
                                        <p class="text-sm">When someone contacts you, it will show up here.</p>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="mt-6">
                {{ $messages->links() }}
            </div>
        </div>
    </div>
@endsection