<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;

class PenyewaController extends Controller
{

    public function index()
    {
        $client = new Client();
        $request = $client->get('http://localhost/pesanHotel/api/penyewa');
        $response = $request->getBody();

        $penyewa = json_decode($response, true);
        return view('penyewa', ['penyewa' => $penyewa]);
    }

    public function getPenyewa()
    {
        $client = new Client();
        $request = $client->get('http://localhost/pesanHotel/api/penyewa');
        $response = $request->getBody();

        $penyewa = json_decode($response, true);
        return view('penyewa', ['penyewa' => $penyewa]);
    }

    public function detailPenyewa($id)
    {
        $client = new Client();
        $request = $client->get('http://localhost/pesanHotel/api/penyewa/id_penyewa=' . $id);
        $response = $request->getBody();
        $penyewa['penyewa'] = json_decode($response, true);

        return view('detailpenyewa', ['penyewa' => $penyewa]);
    }

    public function addPenyewa() {
        return view('tambahPenyewa');
    }

    public function savePenyewa(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $client->request('POST', 'http://localhost/pesanHotel/api/penyewa', [
            'form_params' => [
                'nama_penyewa'  => $request->nama_penyewa,
                'no_hp'         => $request->no_hp,
                'jenis_kelamin' => $request->jenis_kelamin
            ]
        ]);
        return redirect('/penyewa')->with(['success' => 'Tenant data successfully added!!']);
    }
}
