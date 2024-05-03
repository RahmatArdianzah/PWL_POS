@extends('layout.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Kategori')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Kategori')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Manage Kategori</div>
            {{-- <div class="card-body">{{ $dataTable->table() }}</div> --}}
            <div class="card-body">
                {{ $dataTable->table() }}
                <div class="card-tools">
                    <a class="btn btn-sm btn-primary mt-1" href="{{ url('kategori/create') }}">Tambah Data Kategori</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('css')
    {{ $dataTable->scripts() }}    
@endpush
@push('js')

@endpush
