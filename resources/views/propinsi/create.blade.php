@extends('layouts.app')

@section('content')
<h4>Tambah Propinsi Baru</h4>

<form action="{{ route('propinsi.store') }}" method="post">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="nama_propinsi">Nama Propinsi</label>
        <input type="text" class="form-control" name="nama_propinsi" placeholder="Masukkan nama propinsi">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-info">Simpan</button>
        <a href="{{ route('propinsi.index') }}" class="btn btn-default">Kembali</a>
    </div>
</form>
@endsection
