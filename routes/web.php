<?php

use Illuminate\Support\Facades\Route;

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