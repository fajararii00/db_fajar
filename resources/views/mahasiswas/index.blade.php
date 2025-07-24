@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Daftar Mahasiswa</h1>
    <a href="{{ route('mahasiswas.create') }}" class="btn btn-primary mb-3">Tambah Mahasiswa</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Kelas</th>
                <th>Prodi</th>
                <th>Angkatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($mahasiswas as $m)
            <tr>
                <td>{{ $m->nama }}</td>
                <td>{{ $m->nim }}</td>
                <td>{{ $m->kelas }}</td>
                <td>{{ $m->prodi->nama ?? '-' }}</td>
                <td>{{ $m->angkatan }}</td>
                <td>
                    <a href="{{ route('mahasiswas.edit', $m) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('mahasiswas.destroy', $m) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="6" class="text-center">Belum ada data mahasiswa.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
