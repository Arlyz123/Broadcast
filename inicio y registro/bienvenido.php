<!-- este codigo php va despues de agregar la linea 15 en login.php -->
<?php
    session_start();
    if(!isset($_SESSION['usuario'])) {
        echo '
            <script>
                alert("Debes iniciar sesion");
                window.location = "index.php";
            </script>
        ';
        session_destroy();
        die();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bienvenida</title>
    
</head>
<body>

    <h1>HOLAAAAAAAAAA</h1>
    <a href="php/cerrar_sesion.php">cerrar </a>

</body>
</html>