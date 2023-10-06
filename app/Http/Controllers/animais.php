<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
// use Illuminate\Support\Facades\Storage;
use Storage;

class animais extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function form()
    {
        return view('form');
    }

    // public function anunciados(){
    //     return view('anunciados');
    // }

    public function anunciar()
    {
        return view('anunciar');
    }


    public function animais()
    {
        $animais = Animal::paginate(3);
        return view('animais', compact('animais'));
    }


    public function anunciados(Request $request)
    {
        $dados = $request->except('_token', 'submit');
        $animal = new Animal();
        $this->validate($request, $animal->rules, $animal->messages); // aplica regras de validação da model
        if ($request->hasFile('imagem')) { // testa se foi enviado um imagem no formulário
            $novoNome = $request->file('imagem')->store('imagens', 'public');
            $dados['imagem'] = $novoNome;
        }
        $insert = Animal::create($dados);
       
        if ($insert)
            // Passa uma session flash success (sessão temporária)
            return redirect()->route('animais')->with('success', 'Pet cadastrado!');
        else // Redireciona para a rota de cadstro com uma mensagem de erro
            return redirect()->route('anunciar')->with(['error' => 'Falha ao inserir pet']);
           
    }




    public function apaga($id)
    {
        $animal = Animal::find($id);
        if ($animal->getAttributes()['imagem'] != NULL) // testa se tinha um nome de arquivo no banco
            Storage::disk('public')->delete($animal->getAttributes()['imagem']);
        $delete = $animal->delete();
        if ($delete)
            return redirect()->route('home')->with('success', 'Pet removido com sucesso!');
        else
            return redirect()->route('home', $id)->with(['erros' => 'Falha ao remover pet']);
    }

    public function edita($id)
    {
        $animal = Animal::find($id);
        return view('editaAnimal', compact('animal'));
    }

    public function Animal(Request $request)
    {
        $dataForm = $request->except('_token');
        // valida as entradas do formulário
        $animais = new Animal;
        $this->validate($request, $animais->rules, $animais->messages);
        return ("STORE");
    }

    public function atualiza(Request $request, $id)
    {
        $dados = $request->except('_token', 'submit');
        $animal = Animal::find($id);
        // $this->validate($request, $animal->rules, $animal->messages);
        if ($request->hasFile('imagem')) {
            if ($animal->getAttributes()['imagem'] != NULL)
                Storage::disk('public')->delete($animal->getAttributes()['imagem']);
            $novoNome = $request->file('imagem')->store('imagens', 'public');
            $dados['imagem'] = $novoNome;
        } else
            unset($dados['imagem']);
        $update = $animal->update($dados);
        // return $dados;
        if ($update)
            return redirect()->route('animais')->with('success', 'Pet atualizado com sucesso!');
        else
            return redirect()->route('editaAnimal', $id)->with(['erros' => 'Falha ao editar']);
            // return $update;
    }
}
