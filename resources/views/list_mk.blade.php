@extends('layouts.app')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<div class="container my-5 main-content">
    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap">
        <h1 class="fw-bold text-dark mb-2">Daftar Mata Kuliah</h1>
        <a href="{{ route('matakuliah.create') }}" class="btn btn-primary shadow-sm">
            + Tambah Mata Kuliah
        </a>
    </div>

    <div class="card shadow-lg rounded-4 border-0">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table custom-table mb-0 text-center align-middle">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Mata Kuliah</th>
                            <th>SKS</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mks as $mk)
                        <tr>
                            <td>{{ $mk->id }}</td>
                            <td>{{ $mk->nama_mk }}</td>
                            <td>{{ $mk->sks }}</td>
                            <td>
                                <a href="{{ route('matakuliah.edit', $mk->id) }}" 
                                   class="btn btn-sm btn-outline-primary me-1 px-3">
                                   Edit
                                </a>
                                <form action="{{ route('matakuliah.destroy', $mk->id) }}" 
                                      method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="btn btn-sm btn-outline-danger px-3"
                                            onclick="return confirm('Yakin ingin menghapus data ini?')">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
