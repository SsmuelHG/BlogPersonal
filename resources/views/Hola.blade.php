<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <hi>Nombre: {{$nombre}} {{$apellido}} {{$edad}}</h1>
    <h2> {{$elementos [6]}} </h2>

    @foreach ($elementos as $elemento)

        {{$elemento}}

    @if($elemento == 45)
        <h2>Es un numero</h2>
    @else
        <h2>No es un numero</h2>
    @endif
    <hr>
    @endforeach
</body>
</html>