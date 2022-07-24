<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
</head>
<body>
    <h1>Bienvenido</h1>

    <a href="./escribeme">Contacto</a>
    <br>
    <a href="{{route('contacto')}}">Contacto con nombre en ruta</a>

    {{-- para imprimir nuestra variable obtenida --}}
    <p>{{$user}}</p>
    {{-- para imprimir solo un campo de nuestra variable obtenida  --}}
    <p>{{$user -> name}}</p>
</body>
</html>
