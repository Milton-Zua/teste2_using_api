<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CatController extends Controller
{
    public function show()
    {
        try {
            $response = Http::withHeaders([
                'x-api-key' => config('services.catapi.key')
            ])->get(config('services.catapi.endpoint'));

            if ($response->successful()) {
                return response()->json([
                    'status' => 'success',
                    'data' => $response->json(),
                ]);
            }

            return response()->json([
                'status' => 'error',
                'message' => 'Erro na chamada da API.',
                'code' => $response->status(),
            ], $response->status());

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'exception',
                'message' => $e->getMessage(),
            ], 500);
        }
    }
}
