<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Animal extends Model
{
    public $timestamps = false;
    protected $fillable = ['nome', 'tipo', 'idade', 'porte', 'detalhes', 'descricao', 'imagem'];
    public $table = 'animais';
    use HasFactory;

    public $rules = [
        'nome' => 'required|min:3|max:50',
        'tipo' => 'required',
        'porte' => 'required',
        'imagem' => 'required',
        'idade' => 'required',
        'descricao' => 'required|min:10|max:50',

    ];

    public $messages = [
        'nome.required' => 'Nos diga o nome do pet!',
        'nome.min' => 'O nome do pet deve ter no mínimo 3 caracteres',
        'nome.max' => 'O nome do pet deve ter no máximo 50 caracteres',
        'tipo' => 'O campo "O que é?" é obrigatório',
        'porte' => 'O campo "Porte pet" é obrigatório',
        'imagem.required' => 'É necessário por foto do pet para o cadastro!',
        'descricao.required' => 'O campo descrição é obrigatório',
        'idade.required' => 'O campo idade é obrigatório',
        'descricao.min' => 'O campo descrição deve ter no minímo 10 caracteres',

    ];
}
