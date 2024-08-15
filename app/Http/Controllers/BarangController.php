<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'Data Barang',
            'list' => ['Home', 'Data Barang', 'Data Barang']
        ];

        $activeMenu = 'barang';

        return view('barang', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
}
