@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Tambah Prodi</h1>
    <form action="{{ route('prodis.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Prodi</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Fakultas</label>
            <input type="text" name="fakultas" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('prodis.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
