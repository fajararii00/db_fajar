@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Edit Prodi</h1>
    <form action="{{ route('prodis.update', $prodi) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Nama Prodi</label>
            <input type="text" name="nama" value="{{ $prodi->nama }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Fakultas</label>
            <input type="text" name="fakultas" value="{{ $prodi->fakultas }}" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('prodis.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
