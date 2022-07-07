<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">    
    <title>Prueba $_GET | $_POST</title>
</head>
<body>
    <!--el # en action es para enviar la info al mismo documento 
        por convencion se pone en mayuscula el method POST o GET
        enctype="multipart/form sirve para poder adjuntar archivos mediante el formulario
    -->
    <div>
        <h2>ENVIAR CON METODO GET</h2>
        <form action="procesa_get.php" method="GET">
            <label for="numero1">Ingrese el primer numero</label>
            <input type="number" id="numero1" name="numero1">

            <label for="numero2">Ingrese el segundo numero</label>
            <input type="number" id="numero2" name="numero2">

            <input class="button" type="submit" name="Enviar" value="Enviar">    
        </form>
    </div>
    <div>
        <h2>ENVIAR CON METODO POST</h2>
        <form action="procesa_post.php" method="POST">
            <label for="numero1">Numero 11</label>
            <input type="number" id="numeroA" name="numeroA">

            <label for="numero2">Numero 22</label>
            <input type="number" id="numeroB" name="numeroB">

            <input class="button" type="submit" name="Enviar" value="Enviar">    
        </form>
    </div>
</body>
</html>