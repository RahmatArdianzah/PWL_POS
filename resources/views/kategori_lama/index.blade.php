@extends('layout.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Kategori')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Kategori')

@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Kategori</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover table-sm" id="table_kategori">
                    <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Kategori Kode</th>
                            <th>Kategori Nama</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kategories as $kategori)
                            <tr align="center">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $kategori->kategori_kode }}</td>
                                <td>{{ $kategori->kategori_nama }}</td>
                                <td>
                                    <a href="{{ url('kategori/edit') }}" class="btn btn-sm btn-warning">Edit</a>
                                    {{-- <form action="{{ url('kategori/delete' . $kategori->id) }}" method="get" class="d-inline">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                    </form> --}}
                                </td>
                                {{-- <td class="text-center">
                                    <a href="{{ url('edit' . $kategori->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('kategori.delete', $kategori->id) }}" method="get" class="d-inline">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                                </td> --}}
                                {{-- <td>{{  }}</td> --}}
                                {{-- <td>{{ $kategori->id }}</td> <td>{{ $kategori->kode }}</td>  <td>{{ $kategori->nama }}</td>  <td>
                                    <a href="{{ url('kategori/' . $kategori->id . '/edit') }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ url('kategori/' . $kategori->id) }}" method="get" class="d-inline">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                                </td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
                <div class="card-tools">
                    <a class="btn btn-sm btn-primary mt-1" href="{{ url('kategori/create') }}">Tambah Data Kategori</a>
                </div>
            </div>
        </div>
    </div>
@endsection 

@push('css')
    {{-- {{ $dataTable->table() }}     --}}
@endpush


{{-- Kode Awal --}}

{{-- @extends('layout.app')

Customize layout sections

@section('subtitle', 'Kategori')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Kategori')

@section('content')
    <div class="Container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Kategori</h3>
                <div class="card-tools">
                    <a class="btn btn-sm btn-primary mt-1" href="{{ url('kategori/create') }}">Tambah</a>
                </div>
            </div>
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
@endsection

@push('css')
    {{ $dataTable->scripts() }}    
@endpush --}}