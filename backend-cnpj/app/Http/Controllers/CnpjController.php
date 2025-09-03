<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CnpjController extends Controller
{
    public function consultar(Request $request)
    {
        $cnpj = $request->query('cnpj');
        if (!$cnpj) {
            return response()->json(['error' => 'CNPJ não fornecido'], 400);
        }

        $url = "https://brasilapi.com.br/api/cnpj/v1/{$cnpj}";
        $response = Http::get($url);

        if ($response->failed()) {
            return response()->json(['error' => 'Erro ao consultar API'], 500);
        }

        return response()->json($response->json());
    }
}