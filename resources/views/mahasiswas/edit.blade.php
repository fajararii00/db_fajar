@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Edit Mahasiswa</h1>
    <form action="{{ route('mahasiswas.update', $mahasiswa) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" value="{{ $mahasiswa->nama }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>NIM</label>
            <input type="text" name="nim" value="{{ $mahasiswa->nim }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Kelas</label>
            <input type="text" name="kelas" value="{{ $mahasiswa->kelas }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Prodi</label>
            <select name="prodi_id" class="form-control" required>
                @foreach($prodis as $p)
                    <option value="{{ $p->id }}" {{ $mahasiswa->prodi_id == $p->id ? 'selected' : '' }}>{{ $p->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Angkatan</label>
            <input type="number" name="angkatan" value="{{ $mahasiswa->angkatan }}" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('mahasiswas.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
