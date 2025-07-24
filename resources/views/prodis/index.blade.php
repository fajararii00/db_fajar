@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Daftar Prodi</h1>
    <a href="{{ route('prodis.create') }}" class="btn btn-primary mb-3">Tambah Prodi</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Prodi</th>
                <th>Fakultas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($prodis as $p)
            <tr>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->fakultas }}</td>
                <td>
                    <a href="{{ route('prodis.edit', $p) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('prodis.destroy', $p) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
