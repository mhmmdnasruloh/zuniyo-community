@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Daftar Kontribusi Komunitas</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Judul</th>
                <th>Isi</th>
                <th>Dikirim Pada</th>
            </tr>
        </theaad>
        <tbody>
            @forelse ($kontribusi as $item)
            <tr>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->email ?? '-' }}</td>
                <td>{{ $item->judul }}</td>
                <td>{{ $item->isi }}</td>
                <td>{{ $item->created_at->format('d-m-Y H:i') }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="5">Belum ada kontribusi.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
    {{ $kontribusi->links('pagination::bootstrap-4') }}
    </div>

</div>
@endsection
