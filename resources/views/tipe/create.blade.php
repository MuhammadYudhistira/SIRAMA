@extends('layouts.app')

@section('title', "Tambah Gedung")

@section('bread_crumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb " style="background-color:white">
        <li class="breadcrumb-item"><a href=" "><i class="fas fa-bed icon mr-2"></i>Kelola Kamar</a></li>
        <li class="breadcrumb-item"><a href="/tipe">Jenis Gedung</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tambah Jenis Gedung</li>
    </ol>
</nav>
@endsection

@section('content')
<body>
    <div class="card pt-1" style="box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);border-radius:10px; width:70%">
        <div class="card-body px-5">
            <center><t style="font-size:30px;">Form Tambah Jenis Gedung</t></center><br>
            <form action="/tipe" method="post" class="mb-5">
                @csrf
                <div class="mb-3">
                    <b>Nama</b>
                    <input type="text" class="form-control" id="nomor" placeholder="Masukkan Nama..." name="nama">
                </div>
                <div class="mb-3">
                    <b>Harga</b>
                    <input type="number" class="form-control" id="status" placeholder="Masukkan Harga..." name="harga" min="1">
                </div>
                <br>
                <div class="">
                    <button type="submit" class="btn btn-success px-3">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</body>
@endsection
