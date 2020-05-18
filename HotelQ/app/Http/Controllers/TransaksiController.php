<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Client;

class TransaksiController extends Controller
{
    public function index() {
        $client = new Client();
        $request = $client->get('http://localhost/pesanHotel/server/api/transaksi');
        $response = $request->getBody();

        $transaksi = json_decode($response, true);
        return view('transaksi', ['transaksi' => $transaksi]);
    }

    public function getTransaksi() {
        $client = new Client();
        $request = $client->get('http://localhost/pesanHotel/api/transaksi');
        $response = $request->getBody();

        $transaksi = json_decode($response, true);
        return view('transaksi', ['transaksi' => $transaksi]);
    }

    public function addTransaksi() {
        $client = new Client();
        $request1 = $client->get('http://localhost/pesanHotel/api/penyewa');
        $response1 = $request1->getBody();
        $penyewa = json_decode($response1, true);

        $request2 = $client->get('http://localhost/pesanHotel/api/kamar');
        $response2 = $request2->getBody();
        $kamar = json_decode($response2, true);

        return view('tambahTransaksi',['penyewa' => $penyewa, 'kamar' => $kamar]);
    }

    public function saveTransaksi(Request $request)
    {
        $client = new Client();
        $client->request('POST', 'http://localhost/pesanHotel/api/transaksi', [
            'form_params' => [
                'id_kamar'      => $request->id_kamar,
                'id_penyewa'    => $request->id_penyewa,
                'tgl_sewa'      => date("Y-m-d"),
                'tgl_checkout'  => date("Y-m-d"),
                'status'        => 'Booked'
            ]
        ]);
        return redirect('/transaksi')->with(['success' => 'Transaksi data successfully added!!']);
    }
}