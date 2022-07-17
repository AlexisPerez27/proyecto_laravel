<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Custom</title>
</head>
<body>
    <h1><?php echo $msj; ?></h1> <!-- este mensaje de impresion con php nativo -->
    <h1>{{$msj}} {{$edad}}</h1> <!--- este es un mensaje de impresion con blade de laravel-->

</body>
</html>
