@extends('layouts.admin')

@section('bumdes')

<div class="content-wrapper">
    <!-- content header (page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">data produk</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">data produk</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        
<div class="container">
    <a href="/tambahproduk" class="btn btn-success">Tambah Produk</a>
        <div class="row g-3 align-items-center mt-2">
            <div class="col-auto">
            <form action="/produk" method="GET">
            <input type="search"  name="search" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
            </form>
            </div>
        </div>
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">foto</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Harga</th>
                    <th scope="col">No Telepon</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($data as $row)
                    <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <td>{{ $row->nama }}</td>
                        <td>
                            <img src="{{ asset('fotoproduk/'.$row->foto) }}" alt="" style="width: 100px;">
                        </td>
                        <td>{{ $row->Namaproduk }}</td>
                        <td>{{ $row->harga }}</td>
                        <td>{{ $row->Notelepon }}</td>
                        <td>{{ $row->created_at->diffForHumans() }}</td>
                        <td>
                            <a href="/tampildata/{{ $row->id }}" class="btn btn-info">Edit</a>
                            <a href="/delete/{{ $row->id }}" class="btn btn-danger delete" data-id="{{ $row->id }}" data-nama="{{ $row->nama }}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $data->links() }}
    </div>
</div>
@endsection