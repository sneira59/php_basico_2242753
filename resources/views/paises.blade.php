<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 class="text-danger">Lista de paises</h1>
    <table class="table table-dark">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Capital</th>
                <th>Moneda</th>
                <th>Poblacion</th>
            </tr>
         </thead>
        <tbody>
        @foreach ($naciones as $nombre => $nacion)
        <tr>
            <th>{{$nombre}}</th>
            <td>{{$nacion[ "capital"]}}</td>
            <td>{{$nacion[ "moneda"]}}</td>
            <td>{{$nacion[ "poblacion"]}}</td>

        </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>