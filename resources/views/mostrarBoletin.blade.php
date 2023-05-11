<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletin de {{ $nombre }}</title>
    <style>
        button {
            position: relative;
            margin-left: 30%;
        }
        .container {
            width: 350px;
            position: relative;
            margin: auto;
            margin-top: 20%;
        }

        table {
            width: 300px;
            height: 150px;
            border: 2px solid black;
        }

        th {
            border: 1px solid black;
        }

        td {
            border: 1px solid black;
            padding-left: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <table>
            <h1>Juicio para la reunión</h1>
            <tr>
                <th>Nombre</th>
                <td>
                    {{ $nombre }}
                </td>
            </tr>
            <tr>
                <th>Nro. de lista</th>
                <td>
                    {{ $numerodelista }}
                </td>
            </tr>
            <tr>
                <th>Nota</th>
                <td>
                    {{ $nota}}
                </td>
            </tr>
            <tr>
                <th>Juicio</th>
                <td>
                    {{ $juicio }}
                </td>
            </tr>
        </table>
        <br>
        <button type="button" onclick="window.print()">Imprimir</button>
    </div>
</body>

</html>