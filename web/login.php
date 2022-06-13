<?php
include_once '../lib/helpers.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Inicio Sesión</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <!-- Bootstrap -->
    <!-- <link href="vendor/twbs/bootstrap/dist/css/bootstrap.css" rel="stylesheet"> -->
    <link href="css/login.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Iniciar sesión</h1>
        <form action="" method="post">
            <div class="form-control">
                <input type="text" required>
                <label for="">Correo electronico</label>
            </div>
            <div class="form-control">
                <input type="password" required>
                <label for="">Contraseña</label>
            </div>
            <button class="btn" type="submit">Enviar</button>
            <p class="text">No tienes cuenta?
                <a href="#">Crear una cuenta</a>
            </p>
            <p class="centrartexto text">
                <a href="#">Olvidaste contraseña?</a>
            </p>
        </form>
    </div>



</body>

<footer>
    <!-- Bootstrap -->
    <!-- <script src="vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="js/login.js"></script>
</footer>

</html>