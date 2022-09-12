<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos</title>
</head>
<body>
    <h1> Contactos </h1>

    <form id="formulario" action="/contactos_form" method="post">
        @csrf
        <label for="nombre">Nombre <input type="text" name="nombre" id="nombre" value="{{ old('nombre') ?? $nombre }}"></label>
        @error('nombre')
            <i>{{ $message }}</i>
        @enderror
        <br>
        <label for="correo">Correo <input type="text" name="correo" id="correo" value="{{ old('correo') ?? $correo }}"></label>
        @error('correo')
            <i>{{ $message }}</i>
        @enderror
        <br>
        <label for="comentario">Comentario <input type="text" name="comentario" id="comentario" value="{{ old('comentario') }}"></label>
        @error('comentario')
            <i>{{ $message }}</i>
        @enderror
        <br>
        <button type="submit">Enviar</button>
    </form>
    <br>
    <form id="pasar_codigo" action=# method="get">
        <label for="codigo">Codigo <input type="text" name="codigo" id="codigo" placeholder="opcional"></label><br>
        <button type="submit">Enviar Codigo</button>
    </form>

    <?php
        if(!empty($_GET['codigo'])){
        
            Route::redirect('/contactos/{contacto_id?}', '/contactos/{codigo?}', 301);
        }
    ?>
</body>
</html>