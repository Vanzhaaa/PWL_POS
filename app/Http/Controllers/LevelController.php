<?php

namespace App\Http\Controllers;

class LevelController extends Controller
{
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'Level User',
            'list' => ['Home', 'Data Pengguna', 'Level User']
        ];

        $activeMenu = 'level';

        return view('level', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
}
