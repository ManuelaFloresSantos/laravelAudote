@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
	<title> Cadastrar </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
    <link href="audotepasta/css/bootstrap.min.css" rel="stylesheet">
    <link href="audotepasta/css/style.css" rel="stylesheet">
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="audotepasta/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="audotepasta/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="audotepasta/vendor/animate/animate.css">
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="audote2bs/vendor/css-hamburgers/hamburgers.min.css"> -->
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="audote2bs/vendor/select2/select2.min.css"> -->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="audotepasta/css/util.css">
	<link rel="stylesheet" type="text/css" href="audotepasta/css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="card-body">
		@if(isset($errors) && count($errors) > 0)
		<div class="alert alert-danger">
		@foreach($errors->all() as $error)
		<p> {{$error}} </p>
		@endforeach
		</div>
		@endif

	<div class="contact1">
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="amigoscaoegato.png" alt="IMG">
			</div>

			<form class="contact1-form validate-form" method="POST" action="{{ route('atualizaAnimal', $animal['id']) }}" enctype="multipart/form-data">
                @csrf 

				<span class="contact1-form-title">
					Cadastre seu bichinho!
				</span>

				<div class="wrap-input1">
					<input class="input1" type="text" name="nome" value="{{ $animal['nome'] }}" placeholder="Nome do pet">
					<span class="shadow-input1"></span>
				</div>
				<div class="wrap-input1"> 
					<p> <strong> É cachorro ou gatinho? </strong> </p> <br>
				<input id="tipo" type="radio" name="tipo"  @if ($animal['tipo'] == 'gato') checked @endif name="tipo"
                    value="gato"> <strong> Gatinho </strong> <br>
                <input id="tipo" type="radio" name="tipo" @if ($animal['tipo'] == 'cachorro') checked @endif name="tipo"
                    value="cachorro"><strong> Cachorrito </strong> <br>
			</div>
			<br>
			<div class="wrap-input1">
			<p> <strong> Selecione o porte do seu pet: </strong> </p> <br>
                <input id="porte" type="radio" name="porte"@if ($animal['porte'] == 'pequeno') checked @endif name="porte"
                    value="pequeno"> <strong> Pequeno </strong> <br>
                <input id="porte" type="radio" name="porte"  @if ($animal['porte'] == 'medio') checked @endif name="porte"
                    value="medio">  <strong> Médio </strong> <br>
                <input id="porte" type="radio" name="porte" @if ($animal['porte'] == 'grande') checked @endif name="porte"
                    value="grande">  <strong> Grande </strong> <br>
			</div>

				<div class="wrap-input1">
					<input class="input1" type="text" name="idade" value="{{ $animal['idade'] }}" placeholder="Idade do pet (apenas números)">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1">

				<p> <strong> <strong> Coloque uma foto do seu pet: </strong> </strong> </p>
                <div class="mb-3">
                <input class="form-control" id="formFile" type="file" name="imagem">
                </div>

				</div>


				<div class="wrap-input1">
					<input class="input1" type="text" name="descricao" value="{{ $animal['descricao'] }}" placeholder="Descreva seu pet! (Mais que 10 caracteres)">
					<span class="shadow-input1"></span>
				</div>

			

				<div class="container-contact1-form-btn">
					<button type="submit" class="contact1-form-btn">
						<span>
							Cadastrar
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>




	
<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
@endsection