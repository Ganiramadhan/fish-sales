<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RajaOngkirController extends Controller
{
    public function city()
    {
        $response = Http::get('https://api.rajaongkir.com/starter/city', [
            'key' => env('RAJAONGKIR_API_KEY'),
        ]);

        return response()->json($response->json());
    }
}
