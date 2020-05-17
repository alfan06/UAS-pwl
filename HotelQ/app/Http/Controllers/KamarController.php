<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;


class KamarController extends Controller {
    public function index() {
        $client = new Client();
        $request = $client->get('http://localhost/pesanHotel/api/kamar');
        $response = $request->getBody();

        $kamar = json_decode($response, true);
        return view('kamar', ['kamar' => $kamar]);
    }

    public function getKamar() {
        $client = new Client();
        $request = $client->get('http://localhost/pesanHotel/api/kamar');
        $response = $request->getBody();

        $sekolah = json_decode($response, true);
        return view('kamar', ['kamar' => $kamar]);
    }

    public function detailKamar($id) {
        $client = new Client();
        $request = $client->get('http://localhost/pesanHotel/api/kamar?id=' . $id);
        $response = $request->getBody();
        $kamar['kamar'] = json_decode($response, true);

        return view('detailkamar', ['kamar' => $kamar]);
    }
}