<?php
    session_start();

    include 'conexion.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    //convierte el encriptado a la contraseña normal
    $contrasena = hash('sha512', $contrasena);

    /* 
    esto nos imprime la contraseña encriptada, 
    con esto nos damos cuenta que sha512 tiene 129 caracteres
    por lo que en el phpmyadmin la cantidad debe ser mayor para que no guarde la contraseña recortada    
    
    echo $contrasena;
    die();
    */

    $validar_login = mysqli_query($conexion, "SELECT * FROM datos WHERE 
        correo='$correo' and contrasena='$contrasena' ");

    if(mysqli_num_rows($validar_login) > 0) {
        //variable de sesion, sirve para verificar que si hay una sesion iniciado pueda entrar a ciertas paginas
        $_SESSION['usuario'] = $correo; //correo de usuario que ha iniciado la sesion
        header("location: ../bienvenido.php");
        exit;
    } else {
        echo '
            <script>
                alert("1111 El usuario no existe");
                window.location = "../index.php";
            </script>
        ';
        exit;
    }
?>