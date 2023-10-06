@extends('layouts.app')

@section('content')


<div class="container">
 <h1 class="text-center">Listagem de Animais</h1>
 @if(session('success'))
 <div class="alert alert-success">
 {{ session('success') }}
 </div>
 @endif
 @if(session('error'))
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
 <h2>Listagem dos produtos cadastrados</h2>
 <table class="table table-hover table-striped">
 <thead>
 <tr>
 <th>Nome</th>
 <th>Idade</th>
 <th>Detalhes</th>
 <th>Descrição</th>
 <th>Imagem</th>
 <th>Editar</th>
 <th>Apagar</th>
 </tr>
 </thead>
 <tbody>
 @foreach($animais as $animal)
 <tr>
 <td> {{$animal['nome']}} </td>
 
 <td> {{$animal['idade']}} </td>
 
 <td> {{$animal['detalhes']}} </td>

 <td> {{$animal['descricao']}} </td>
<td> 
 @if(isset($animal['imagem']))
 <img
src='{{asset("storage/{$animal->imagem}") }}'
alt="{{$animal->imagem}}" style = height=42 width=
50>
 @else
 <img src="{{asset('imagem/padrao.png') }}"
alt="{{$animal->imagem}}" style = height=42 width=
50>
 @endif
 </td>
 
 <td><a href="edita/{{$animal['id']}}">
 <span class='material-icons'> edit
</span>
 </a>
 </td>
 <td><a href="apaga/{{$animal['id']}}" >
 <span class='material-icons'> delete
</span>
 </td>
 </tr>
 @endforeach
 </tbody>
 </table>
 {!! $animais->links() !!}
</div>
@endsection


