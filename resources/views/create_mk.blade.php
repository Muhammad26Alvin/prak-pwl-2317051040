@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<div class="container my-5 main-content">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-primary text-white text-center rounded-top-4">
                    <h3 class="mb-0">Buat Mata Kuliah Baru</h3>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('matakuliah.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="nama_mk" class="form-label fw-semibold">Nama Mata Kuliah</label>
                            <input type="text" id="nama_mk" name="nama_mk" class="form-control shadow-sm" placeholder="Masukkan nama mata kuliah" required>
                        </div>

                        <div class="mb-4">
                            <label for="sks" class="form-label fw-semibold">SKS</label>
                            <input type="number" id="sks" name="sks" class="form-control shadow-sm" placeholder="Masukkan jumlah SKS" required>
                        </div>

                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary px-4">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
