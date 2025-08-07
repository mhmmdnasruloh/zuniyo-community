@extends('layouts.app')


@section('content')
<div class="container mt-4">
    <h2>Tambah Komunitas</h2>

    <form action="{{ route('komunitas.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Nama Komunitas</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label>Universitas</label>
            <input type="text" name="universitas" class="form-control">
        </div>

        <div class="mb-3">
            <label>Logo (opsional)</label>
            <input type="file" name="logo" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('komunitas.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
