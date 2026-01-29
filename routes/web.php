<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// 1. The Login Page (First thing she sees)
Route::get('/', function () {
    return view('login');
})->name('login');

// 2. The Logic to check the date
Route::post('/check-date', function (Request $request) {
    // 🚨 CHANGE THIS DATE to your anniversary (YYYY-MM-DD)
    $correctDate = '2025-07-05'; 

    if ($request->input('date') === $correctDate) {
        session(['authenticated' => true]);
        return redirect()->route('question');
    }
    
    // If she gets it wrong
    return back()->with('error', 'Wrong date! Are you really my girlfriend? 🤨');
})->name('check.date');

// 3. The Question Page (Protected)
Route::get('/question', function () {
    // If she didn't login, kick her back to start
    if (!session('authenticated')) {
        return redirect()->route('login');
    }
    return view('question');
})->name('question');

// 4. The Success Page
Route::get('/yay', function () {
    return view('yay');
})->name('yay');