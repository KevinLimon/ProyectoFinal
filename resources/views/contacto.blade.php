<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "">
        <label for="nombre">Nombre</label><br>
        <input type="text" id="nombre" name="nombre" value="{{ $nombre }}"><br>

        <label for="correo">Correo</label><br>
        <input type="text" id="correo" name="correo" value="{{ $correo }}"><br>

        <label for="mensaje">Mensaje</label><br>
        <textarea cols="80" rows="4"></textarea>
    </form>
</body>
</html>