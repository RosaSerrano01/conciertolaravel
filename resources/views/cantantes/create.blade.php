<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>registro de cantantes.</title>
</head>
<body class="bg-info p-2" style="--bs-bg-opacity: .4;">
@include('cantantes.navbar')
    <div id="body" class="bg-dark p-2" style="--bs-bg-opacity: .2;">
<div class="alert alert-dark text-center" role="alert">
<font face="Comic Sans MS,arial,verdana"><h1>Registrar Nuevo Cantante</h1></font>
</div>

<form action = "{{ url('cantante') }}" method="post">
      
   @csrf
   @include('cantantes.form')
</form>
</div>

<style>
#body
{
margin-left:2%;
margin-right:2%;
margin-top:2%;
margin-bottom:2%;
border-radius:0.5em;
}
</style>