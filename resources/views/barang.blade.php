@extends('layouts.template')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ $breadcrumb->title }}</h3>
    </div>
    <div class="card-body">
        <p>Ini adalah halaman untuk mengelola data barang.</p>
        <!-- Tambahkan konten spesifik untuk Data Barang di sini -->
    </div>
</div>
@endsection
