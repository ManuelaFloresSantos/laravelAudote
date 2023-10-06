@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Home</title>
  
</head>
<body>
    
    <div> <h1 class="text-lg-start"> AuDote </h1> </div>
<div>
    <div class="btn">
       <button class="btn btn-outline-warning position-absolute top-10  bottom-15 start-50 translate-middle"> <a class="link-body-emphasis link-offset-2 link-underline-opacity-0 link-underline-opacity-0-hover text-reset fw-semibold " href="{{ url('anunciar') }}"> Por para adoção </a>
    </div>
</div>
</body>
</html>
 
@endsection
