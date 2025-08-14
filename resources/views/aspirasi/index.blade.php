@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Aspirasi Mahasiswa</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Topik</th>
                <th>Isi</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($aspirasi as $index => $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama ?? '-' }}</td>
                    <td>{{ $item->email ?? '-' }}</td>
                    <td>{{ $item->topik }}</td>
                    <td>{{ $item->isi }}</td>
                    <td>{{ $item->created_at->format('d M Y H:i') }}</td>
                    <td>
                        <form action="{{ route('aspirasi.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin hapus aspirasi ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $aspirasi->links() }}
</div>
@endsection
