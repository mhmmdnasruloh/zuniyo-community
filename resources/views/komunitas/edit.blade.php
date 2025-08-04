@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Edit Komunitas</h2>

    <form action="{{ route('komunitas.update', $komunitas->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama Komunitas</label>
            <input type="text" name="nama" class="form-control" value="{{ $komunitas->nama }}" required>
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control">{{ $komunitas->deskripsi }}</textarea>
        </div>

        <div class="mb-3">
            <label>Universitas</label>
            <input type="text" name="universitas" class="form-control" value="{{ $komunitas->universitas }}">
        </div>

        <div class="mb-3">
            <label>Logo (opsional)</label><br>
            @if($komunitas->logo)
                <img src="{{ asset('storage/' . $komunitas->logo) }}" width="60" class="mb-2"><br>
            @endif
            <input type="file" name="logo" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('komunitas.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
