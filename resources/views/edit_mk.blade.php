@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<div class="container">
    <h1>
        Edit Mata Kuliah Baru
    </h1>

    <form action="{{ route('matakuliah.update', $mk->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nama_mk">Nama Mata Kuliah</label><br>
        <input type="text" id="nama_mk" name="nama_mk" value="{{ $mk->nama_mk }}" required><br><br>

        <label for="sks">SKS</label><br>
        <input type="number" id="sks" name="sks" value="{{ $mk->sks }}" required><br><br>

        <button type="submit">Update</button>
    </form>
</div>
@endsection