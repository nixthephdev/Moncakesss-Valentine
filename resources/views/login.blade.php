@extends('layout')

@section('content')
    <div class="bg-white p-8 rounded-2xl shadow-xl max-w-sm w-full border-4 border-love-pink transform transition hover:scale-105 duration-300">
        <h1 class="text-3xl text-love-red mb-6">Hey Beautiful! ❤️</h1>
        <p class="text-gray-600 mb-4">To access your surprise, please enter the day we became official:</p>
        
        <form action="{{ route('check.date') }}" method="POST" class="space-y-4">
            @csrf
            <input type="date" name="date" required 
                class="w-full border-2 border-love-pink rounded-lg p-3 focus:outline-none focus:border-love-red text-center text-gray-700 shadow-sm">
            
            @if(session('error'))
                <p class="text-red-500 text-sm font-bold animate-pulse">{{ session('error') }}</p>
            @endif

            <button type="submit" 
                class="w-full bg-love-red text-white py-3 rounded-lg font-bold text-lg shadow-md hover:bg-red-600 transition transform active:scale-95">
                Unlock My Heart 🔓
            </button>
        </form>
    </div>
@endsection