@extends('kontaks.layout')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h3>Daftar Kontak</h3>
    <a href="{{ route('kontaks.create') }}" class="btn btn-primary">+ Tambah Kontak</a>
</div>
<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>#</th>
            <th>Nama saya</th>
            <th>Alamat saya</th>
            <th>No Telepon</th>
            <th width="160">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($kontaks as $i => $k)
        <tr>
            <td>{{ $i + 1 }}</td>
            <td>{{ $k->nama_lengkap }}</td>
            <td>{{ $k->alamat }}</td>
            <td>{{ $k->no_telepon }}</td>
            <td>
                <a href="{{ route('kontaks.edit', $k) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('kontaks.destroy', $k) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus?')">
                    @csrf @method('DELETE')
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr><td colspan="5" class="text-center">Belum ada data.</td></tr>
        @endforelse
    </tbody>
</table>
@endsection
