<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class animais extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function form(){
        return view('form');
    }

    // public function anunciados(){
    //     return view('anunciados');
    // }

    public function anunciar(){
        return view('anunciar');
    }

    
    public function animais(){
        $animais = Animal::paginate(3);
        return view('animais', compact('animais'));
    }


    public function anunciados(Request $request){
        $dados = $request->except('_token', 'submit');
        $animal = new Animal();
        //$this->validate($request, $produto->rules, $produto->messages); // aplica regras de validação da model
        if ($request->hasFile('imagem')){ // testa se foi enviado um imagem no formulário
        $novoNome = $request->file('imagem')->store('imagens', 'public');
        $dados['imagem'] = $novoNome;
        }
        $insert = Animal::create($dados);
        if($insert)
        // Passa uma session flash success (sessão temporária)
        return redirect()->route('animais')->with('success', 'Produto inserido com sucesso!');
        else // Redireciona para a rota de cadstro com uma mensagem de erro
        return redirect()->route('anunciar')->with(['error'=> 'Falha ao inserir produto']);
        }

  
}
