@extends('indexmaster')
@extends('layouts.app')
@section('title','penyewa')

@section('konten')
<a href="/penyewa/tambahPenyewa" class="btn btn-primary">Tambah Penyewa</a>
<br/>
<br/>
<table class="table table-bordered">
    <thead class="thead-dark">
        <th>Nama Penyewa</th>
        <th>Nomer Hp</th>
        <th>Jenis Kelamin</th>
    </thead>
    <tbody>
        @foreach($penyewa as $pyw)
        <tr>
            <td>{{ $pyw['nama_penyewa'] }}</td>
            <td>{{ $pyw['no_hp'] }}</td>
            <td>{{ $pyw['jenis_kelamin'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
