<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController; // Pastikan ini di-import jika perlu

class WelcomeController extends BaseController
{
    public function index()
    {
        // Membuat objek breadcrumb
        $breadcrumb = (object) [
            'title' => 'Selamat Datang',
            'list' => ['Home', 'Welcome']
        ];

        // Menetapkan menu yang aktif
        $activeMenu = 'dashboard';

        // Mengembalikan view dengan data
        return view('welcome', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
}
