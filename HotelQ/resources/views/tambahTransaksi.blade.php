@extends('indexmaster')
@section('title')
@extends('layouts.app')

@section('konten')
<h3>Tambah Transaksi</h3><hr>
<form action="/transaksi/saveTransaksi" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="nama">Tenant Name</label>
            <select class="form-control" name="id_penyewa" id="id_penyewa">
                <option selected="selected">pilih Penyewa</option>
                @foreach($penyewa as $pyw)
                    <option value="{{ $pyw['id_penyewa'] }}">{{ $pyw['nama_penyewa'] }} - {{ $pyw['no_hp'] }}</option>
                @endforeach
            </select>

    </div>
    <div class="form-group">
        <label for="nama">Nama Kamar</label>
            <select class="form-control" name="id_kamar" id="id_kamar">
                <option selected="selected">pilih kamar</option>
                @foreach($kamar as $kmr) 
                    <option value="{{ $kmr['id_kamar'] }}">{{ $kmr['nama_kamar'] }} - {{ $kmr['jenis_kamar'] }}</option>
                @endforeach
            </select>
    </div>
    <input type="submit" value="tambah transaksi" class="btn btn-primary">
</form>
@endsection