@extends('indexmaster')
@extends('layouts.app')
@section('title','transaksi')

@section('konten')
<a href="/transaksi/tambahTransaksi" class="btn btn-primary">Tambah Transaksi</a>
<br/>
<br/>
<table class="table table-bordered">
    <thead class="thead-dark">
        <th>Nama Penyewa</th>
        <th>Room Name</th>
        <th>Status</th>
    </thead>
    <tbody>
        @foreach($transaksi as $trs)
        <tr>
            <td>{{ $trs['nama_penyewa'] }}</td>
            <td>{{ $trs['nama_kamar']}} - {{ $trs['jenis_kamar']}}</td>
            <td>{{ $trs['status'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection