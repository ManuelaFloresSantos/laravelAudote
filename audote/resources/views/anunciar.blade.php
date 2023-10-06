@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Anunciar </title>
</head>
<body>
<div class="card-body">

    <form method="POST" action="{{ route('anunciados') }}" enctype ="multipart/form-data">
    @csrf
    <p> Nome pet </p>
    <input id="nome" placeholder="nome animal" type="name" name="nome" required> <br>
    <p> Porte Pet</p>
    <input id="porte" type="radio" name="porte" value="pequeno"> Pequeno <br>
    <input id="porte" type="radio" name="porte" value="medio"> Médio <br>
    <input id="porte" type="radio" name="porte" value="grande"> Grande <br>
    <p> Idade Pet</p>
    <input id="idade" placeholder="idade animal" type="text" name="idade" required>
    <p> Detalhes </p>
    <input id="detalhes" type="checkbox" name="detalhes" value="docil"> Dócil <br>
    <input id="detalhes" type="checkbox" name="detalhes" value="inteligente"> Inteligente <br>
    <input id="detalhes" type="checkbox" name="detalhes" value="obediente"> Obediente <br>
    <input id="detalhes" type="checkbox" name="detalhes" value="divertido"> Divertido <br>
    <input  type="file" name="imagem" required> <br>
    <p> Descreva um pouco mais sobre o pet: </p>
    <input id="descricao" type="text" name="descricao" required>
    


    <button type="submit" class="btn btn-primary"> </button>

        
    </form>
               
</body>
</html>


@endsection