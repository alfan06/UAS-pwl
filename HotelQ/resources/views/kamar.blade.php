@extends('indexmaster')
@extends('layouts.app')
@section('title','kamar')
@section('judul_halaman','Data Kamar')

@section('konten')
<h3>Daftar Kamar</h3><hr>
<table class="table table-bordered" id="listKamar">
    <thead>
        <tr>
            <th>Room Name</th>
            <th>Type Room</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1 ?>
        @foreach($kamar as $kmr)
        <tr>
            <td>{{ $kmr['nama_kamar'] }}</td>
            <td>{{ $kmr['jenis_kamar'] }}</td>
            <td>{{ $kmr['harga'] }}</td>
            <td>
                <a href="/kamar/detailKamar/{{ $kmr['id_kamar'] }}" class="badge badge-info">Detail</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection