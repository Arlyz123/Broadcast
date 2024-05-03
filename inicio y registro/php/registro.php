<?php

    include 'conexion.php';

    $nombre_completo = $_POST['nombre_completo'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $pais = $_POST['pais'];
    $genero = $_POST['genero'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    //para encriptar la contraseña
    $contrasena = hash('sha512', $contrasena);

    // insertar los datos en la tabla
    $query = "INSERT INTO datos(nombre_completo, fecha_nacimiento, pais, genero, correo, usuario, contrasena)
            VALUES('$nombre_completo', '$fecha_nacimiento', '$pais', '$genero', '$correo', '$usuario', '$contrasena')";

    //verificar que el correo no se repita en la base de datos
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM datos WHERE correo = '$correo' ");
    //si encuentra una fila que sea igual al correo
    if (mysqli_num_rows($verificar_correo) > 0) {
        echo '
            <script>
                alert("el correo ya esta en uso");
                window.location = "../index.php";
            </script>
        ';
        exit(); //es como un break
    }

    //verificar que el nombre no se repita en la base de datos
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM datos WHERE usuario = '$usuario' ");
    //si encuentra una fila que sea igual al nombre
    if (mysqli_num_rows($verificar_usuario) > 0) {
        echo '
            <script>
                alert("el usuario ya esta en uso");
                window.location = "../index.php";
            </script>
        ';
        exit(); //es como un break
    }


    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar) {
        echo '
            <script>
                alert("usuario registrado");
                window.location = "../index.php";
            </script>
        ';
    } else {
        echo '
            <script>
                alert("intentalo de nuevo");
                window.location = "../index.php";
            </script>
        ';
    }

    mysqli_close($conexion);

?>