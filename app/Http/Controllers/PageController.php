<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('home', [
            'title' => 'Home'
        ]);
    }

    public function profile()
    {
        return view('profile', [
            'title' => 'Profile',
            'name' => 'M Ghiffari',
            'nim' => '13242520064',
            'prodi' => 'Teknologi Informasi'
        ]);
    }

    public function berita()
    {
        return view('berita', [
            'title' => 'Berita'
        ]);
    }
}
