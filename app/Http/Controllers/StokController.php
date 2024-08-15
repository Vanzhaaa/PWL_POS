<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StokController extends Controller
{
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'Stok Barang',
            'list' => ['Home', 'Data Transaksi', 'Stok Barang']
        ];

        $activeMenu = 'stok';

        return view('stok', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
}
