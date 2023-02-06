@extends('layouts.app')

@section('title', "Daftar Kamar")



@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Daftar Tipe Kamar</h3>
    <button><a href="/kamar/create">Tambah Tipe Kamar</a></button> <br><br>
    <table class="table  table-bordered border-dark table-hover">
        <thead>
            <tr class="bg-secondary">
                <th scope="col" class="text-center">No.</th>
                <th scope="col" class="text-center">Nomor Kamar</th>
                <th scope="col" class="text-center">Harga</th>
                <th scope="col" class="text-center">Tipe Kamar</th>
                <th scope="col" class="text-center">Jumlah Maksimal</th>
                <th scope="col" class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kamar as $k)
            <tr>
                <td class="text-center">{{ $loop->iteration }}.</td>
                <td class="text-center">{{ $k->nomor }}</td>
                <td class="text-center">{{ $k->tipe->nama }}</td>
                <td class="text-center">Rp.{{ $k->tipe->harga }}</td>
                <td class="text-center">{{ $k->maksimal}}</td>
                <td class="text-center">

                    <a href="/kamar/{{ $k->id }}/edit" class="btn btn-warning">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                      </svg>
                    </a>
                    <a href="/kamar/{{ $k->id }}" class="btn btn-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                          </svg>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
@endsection