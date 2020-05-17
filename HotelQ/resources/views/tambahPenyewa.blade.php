@extends('indexmaster')
@section('title')
@extends('layouts.app')

@section('konten')
<h3>Tambah Penyewa</h3><hr>
<form action="/penyewa/savePenyewa" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="nama_penyewa">Nama Penyewa</label>
        <input type="text" name="nama_penyewa" required class="form-control" placeholder="Nama">
      </div>
    <div class="form-group">
        <label for="no_hp">No. Hp</label>
        <input type="number" required  class="form-control" name="no_hp" placeholder="no hp">
      </div>
    <div class="form-group">
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <input type="text" required  class="form-control" name="jenis_kelamin" placeholder="jenis kelamin">
      </div>
    <input type="submit" value="tambahPenyewa" class="btn btn-primary">
</form>
@endsection