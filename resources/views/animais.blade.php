@extends('layouts.app')

@section('content')
<br>
<br>
<br>

    <div class="container">
        <h1 class="text-center">Conheça os Pets!</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <a href='anunciar'>
            <span class="material-icons"></span>
           Adicionar outro animal 
        </a>
    </div>
    <div class="container">
        <br>
        <h2>Listagem:</h2> <br>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Idade</th>
                    <th>Porte</th>
                    <th>Descrição</th>
                    <th>Imagem</th>
                    <th>Editar</th>
                    <th>Apagar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($animais as $animal)
                    <tr>
                        <td> {{ $animal['nome'] }} </td>

                        <td> {{ $animal['tipo'] }} </td>

                        <td> {{ $animal['idade'] }} </td>

                        <td> {{ $animal['porte'] }} </td>

                        <td> {{ $animal['descricao'] }} </td>
                        <td>
                            @if (isset($animal['imagem']))
                                <img src='{{ asset("storage/{$animal->imagem}") }}' alt="{{ $animal->imagem }}"
                                    style=height=42 width=50>
                            @else
                                <img src="{{ asset('storage/imagens/padrao.png') }}" alt="{{ $animal->imagem }}" style=height=42
                                    width=50>
                            @endif
                        </td>

                        <td><a href="{{ route('editaAnimal', $animal['id']) }}">
                                <span class='material-icons'> Editar
                                </span>
                            </a>
                        </td>
                        <td><a href="apaga/{{ $animal['id'] }}">
                                <span class='material-icons'> Apagar pet
                                </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $animais->links() !!}
    </div>
@endsection
