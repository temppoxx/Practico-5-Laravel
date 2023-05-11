<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletin de {{ $nombre }}</title>
    <link rel="stylesheet" href="/css/styleBoletin.css">
</head>

<body>
    <div class="container">
        <h1>- Juicio para boletín -</h1><br>
        <div class="contenido">
            <div id="nombre">Nombre: {{ $nombre }}</div>
            <div id="nota">Nota: {{ $nota }}</div>
            <div id="juicio">Juicio: {{ $juicio }}</div>
            <div id="numerodelista">N° de Lista: {{ $numerodelista }}</div>
        <br>
        <button type="button" onclick="window.print()">Imprimir</button>
    </div>
</body>

</html>