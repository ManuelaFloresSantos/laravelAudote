<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Audote </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{ url('home') }}">Audote</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('home')}}"> Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('pagadocao')}}"> Adotar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('anunciar')}}"> Por para adoção </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('login')}}"> Login </a>
      </li>
    </ul>
  </div>
</nav>

@yield('conteudo')
    
</body>
</html>