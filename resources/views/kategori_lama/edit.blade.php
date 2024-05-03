@extends('layout.app')

{{-- Customize layout section --}}

@section('subtitle', 'Kategori')
@section('content_header_title', 'Kategori')
@section('content_header_subtitle', 'Edit')

{{-- Content body::main page content --}}

@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Data</h3>
            </div>
            <div>
                <form method="POST" action="/PWL_POS/public/kategori/edit_simpan/{{ $kategori->kategori_id }}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
            
                    <label>Kategori Kode</label>
                    <input type="text" name="username" placeholder="Masukkan Username" value="{{ $kategori->kategori_kode }}">
                    <br>
                    <label>Kategori Nama</label>
                    <input type="text" name="nama" placeholder="Masukkan Nama" value="{{ $kategori->kategori_nama }}">
                    <br>
                    <br><br>
                    <input type="submit" name="btn btn-success" value="simpan">
                
                </form>
            </div>
        </div>
    </div>
@endsection