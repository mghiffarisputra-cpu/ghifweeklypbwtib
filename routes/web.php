<?php

use App\Http\Controllers\PageController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/berita', function () {
    return view('berita');
})->name('berita');

Route::get('/', function () {
    return view('home',[
        "title" => "home"
    ]);
});

Route::get('/Profile', function () {
    return view('Profile',[
        "title" => "profile",
        "name" => "m ghiffari",
        "nim" => "13242520064",
        "prodi" => "teknologi informasi" ]);
});


Route::get('/profile', function () {
    return view('profile', [
        'name'  => 'm ghiffari',
        'nim'   => '13242520064',
        'prodi' => 'teknologi informasis'
    ]);
});

    Route::get('/', [PageController::class, 'home'])
    ->name('home');

    Route::get('/profile', [PageController::class, 'profile'])
    ->name('profile');

    Route::get('/berita', [PageController::class, 'berita'])
    ->name('berita');

