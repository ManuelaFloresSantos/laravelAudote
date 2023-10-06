@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login </title>
</head>
<body>
    login:
    <br>

    não é cadastrado?
    <button> <a class="botao" href="{{url('form')}}"> Faça seu cadastro  </button>
</body>
</html>


@endsection