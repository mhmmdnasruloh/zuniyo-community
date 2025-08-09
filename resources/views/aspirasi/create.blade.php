@extends('layouts.app')

@section('content')
<h2>Kirim Aspirasi</h2>

@if(session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
@endif

<form action="{{ url('/aspirasi') }}" method="POST">
  @csrf

  <label>Nama (opsional)</label>
  <input type="text" name="nama" class="form-control">

  <label>Email (opsional)</label>
  <input type="email" name="email" class="form-control">

  <label>Topik</label>
  <input type="text" name="topik" required class="form-control">

  <label>Isi Aspirasi</label>
  <textarea name="isi" required class="form-control"></textarea>

  <button type="submit" class="btn btn-primary mt-3">Kirim</button>
</form>
@endsection
