<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'Data User',
            'list' => ['Home', 'Data Pengguna', 'Data User']
        ];

        $activeMenu = 'user';

        return view('user', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
}
