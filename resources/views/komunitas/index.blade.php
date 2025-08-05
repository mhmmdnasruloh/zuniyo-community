@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Daftar Komunitas Mahasiswa</h2>
    <a href="{{ route('komunitas.create') }}" class="btn btn-primary mb-3">Tambah Komunitas</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Form Search -->
    <form action="{{ route('komunitas.index') }}" method="GET" class="mb-3 d-flex">
        <input type="text" name="search" class="form-control me-2" placeholder="Cari komunitas..." value="{{ request('search') }}">
        <button type="submit" class="btn btn-outline-primary">Cari</button>
    </form>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Universitas</th>
                <th>Logo</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($komunitas as $item)
            <tr>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->deskripsi }}</td>
                <td>{{ $item->universitas }}</td>
                <td>
                    @if($item->logo)
                        <img src="{{ asset('storage/' . $item->logo) }}" width="60">
                    @else
                        -
                    @endif
                </td>
                <td>
                    <a href="{{ route('komunitas.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('komunitas.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Yakin hapus?')" class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            
            @endforeach
        </tbody>
    </table>

    

    <div class="d-flex justify-content-center">
        {{ $komunitas->links() }}
    </div>
</div>
@endsection
