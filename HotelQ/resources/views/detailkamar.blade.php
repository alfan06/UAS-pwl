@extends('indexmaster')
@section('title')
@extends('layouts.app')
@section('konten')

<!-- isi bagian konten halaman -->
@section('konten')
    <a href="/kamar" class="btn btn-danger">Kembali</a>
    <br/>
    <br/>
    @foreach($kamar as $kmr)
    <h5 class="card-title">{{ $kmr['nama_kamar'] }}</h5>
    <p class="card-text">
        <label for=""><b> Nama : </b></label>
        {{ $kmr['nama_kamar'] }} </p>
    <p class="card-text">
        <label for=""><b> Type : </b></label>
        {{ $kmr['jenis_kamar'] }} </p>
    <p class="card-text">
        <label for=""><b> Harga : </b></label>
        { {$kmr['harga'] }} </p>
    @endforeach
@endsection