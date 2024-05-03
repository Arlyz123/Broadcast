<!-- esto de aqui es cuando exista usuario nos lleve a la pagina bienvenido
    y si queremos entrar al index, nos seguira cargando la pagina de bienvenido -->
<?php
    session_start();
    if(isset($_SESSION['usuario'])) {
        header("location: bienvenido.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register</title>

    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>

            <!--formulario del login y registro-->
            <div class="contenedor__login-register">
                <!-- login -->
                <form action="php/login.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Entrar</button>
                </form>

                <!-- registro-->
                <form action="php/registro.php" method="POST" class="formulario__register">
                    <h2>Regístrarse</h2>
                    <input type="text" placeholder="Nombre completo" name="nombre_completo" required>
                    <input type="date" placeholder="Fecha de nacimiento" name="fecha_nacimiento" required>

                    <div class="select-with-image">
                        <select name="pais" id="selectPais" required>
                            <option value="" disabled selected>Seleccionar país</option>
                            <option value="peru" data-image="photos/peru.png">Peru</option>
                            <option value="chile" data-image="photos/chile.png">Chile</option>
                            <option value="argentina" data-image="photos/argentina.png">Argentina</option>
                            <option value="colombia" data-image="photos/colombia.png">Colombia</option>
                        </select>
                        <img id="selectedImage" src="">
                    </div>

                    <div class="select-with-image">
                        <select name="genero" id="selectGenero" required>
                            <option value="" disabled selected>Seleccionar género</option>
                            <option value="masculino" data-image="photos/machos.png">Masculino</option>
                            <option value="femenino" data-image="photos/chanchitos.png">Femenino</option>
                            <option value="madridista" data-image="photos/cabros.png">Madridista</option>
                        </select>
                        <img id="selectedImage2" src="">
                    </div>

                    <input type="email" placeholder="Correo Electronico" name="correo" required>
                    <input type="text" placeholder="Usuario" name="usuario" required>
                    <input type="password" placeholder="Contraseña" name="contrasena" required>
                    <button type="submit">Regístrarse</button>
                </form>
            </div>
        </div>
    </main>

    <!-- Cookies de sesion  -->

    <script src="js/script.js"></script>
    <script src="js/pais.js"></script>

</body>
</html>