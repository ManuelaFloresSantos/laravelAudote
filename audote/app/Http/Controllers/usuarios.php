<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class usuarios extends Controller
{
    public function anunciar(Request $request)
    {
        $nome = $request->input('nome');
        

        return response()->json([
            'nome' => $nome,
        
        ]);
    }
}
