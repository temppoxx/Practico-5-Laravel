<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario juicio</title>
    <style>
        textarea {
            resize: none;
        }
    </style>
</head>

<body>
    <form action="/formulario" method="post">
        @csrf
        <input type="text" name="nombre" required placeholder="Nombre del alumno"><br><br>
        <input type="number" name="nota" min="1" max="12" required placeholder="Nota"><br><br>
        <textarea name="juicio" cols="20" rows="2" required placeholder="Juicio conceptual" onkeypress="if (this.value.length >= 43) { return false; }"></textarea><br><br>
        <input type="number" name="numerodelista" min="1" required placeholder="Numero de lista"><br><br>
        <input type="submit" value="Guardar">
    </form>

</body>

</html>