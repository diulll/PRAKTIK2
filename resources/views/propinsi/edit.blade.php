@extends('layouts.app')

@section('content')
<h4>Ubah Propinsi</h4>

<form action="{{ route('propinsi.update', $propinsi->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="nama_propinsi">Nama Propinsi</label>
        <input type="text" class="form-control" name="nama_propinsi"
               value="{{ old('nama_propinsi', $propinsi->nama_propinsi) }}" required>
    </div>

    <br>
    <div class="form-group">
        <button type="submit" class="btn btn-info">Simpan Perubahan</button>
        <a href="{{ route('propinsi.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</form>
@endsection
