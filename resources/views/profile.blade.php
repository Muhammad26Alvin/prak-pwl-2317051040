@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<div class="min-vh-100 d-flex align-items-center justify-content-center" 
     style="background: linear-gradient(to right, #fde047, #ffffff, #b45309);">

    <!-- Card Horizontal -->
    <div class="d-flex bg-white bg-opacity-50 rounded-4 shadow-lg p-4" style="width: 700px;">
        
        <!-- Left: Foto -->
        <div class="d-flex flex-column align-items-center pe-4 border-end">
            <img src="{{ asset('storage/alvin_idv.png') }}" alt="Profile"
                 class="rounded-circle border border-3 border-white shadow mb-3" width="120" height="120">
            <h5 class="fw-bold mb-0">{{ $Nama }}</h5>
        </div>

        <!-- Right: Info -->
        <div class="d-flex flex-column justify-content-center ps-4 flex-grow-1 gap-3">
            <div class="bg-white bg-opacity-75 rounded py-2 px-3 fw-semibold shadow-sm">NPM: {{ $NPM }}</div>
            <div class="bg-white bg-opacity-75 rounded py-2 px-3 fw-semibold shadow-sm">Kelas: {{ $Kelas }}</div>
            <div class="bg-white bg-opacity-75 rounded py-2 px-3 shadow-sm">Tentang Saya</div>
            <div class="bg-white bg-opacity-75 rounded py-2 px-3 shadow-sm">Kontak Saya</div>
        </div>
    </div>

</div>
@endsection
