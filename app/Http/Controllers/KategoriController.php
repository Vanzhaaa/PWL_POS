<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'Kategori Barang',
            'list' => ['Home', 'Data Barang', 'Kategori Barang']
        ];

        $activeMenu = 'kategori';

        return view('kategori', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
}
