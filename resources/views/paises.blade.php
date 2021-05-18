<!DOCTYPE html>
<html lang="esp">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vista de paises </title>
</head>
<body >
    <h1>Lista de paises</h1>
    <table class="table table-hover"  bgcolor="lightgreen">
        <thead>
            <tr>
                <th class="text-danger">Nombre</th>
                <th class="text-danger">Capital</th>
                <th class="text-danger">Moneda</th>
                <th class="text-danger">Población</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($naciones as $nombre=>$nacion)
                <tr>
                    <th>{{ $nombre}}</th>
                    <th>{{ $nacion["capital" ]}}</th>
                    <th>{{ $nacion["moneda" ]}}</th>
                    <th>{{ $nacion["poblacion" ]}}</th>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
