<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'Transaksi Penjualan',
            'list' => ['Home', 'Data Transaksi', 'Transaksi Penjualan']
        ];

        $activeMenu = 'penjualan';

        return view('penjualan', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
}
