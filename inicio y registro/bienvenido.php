<!-- este codigo php va despues de agregar la linea 15 en login.php -->
<?php

    include 'php\conexion.php';

    $ssql = "select * from datos";

    $result = $conexion->query($ssql);

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

    //Session id temporal (para que no de error lo de abajo)
    $session_id = $_SESSION['usuario'];
    $session_query = $conexion->query("select * from datos where id = '$session_id'");

    ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página con Grids</title>
    <link rel="stylesheet" href="css/estilosBien.css">
</head>
<body>

    <div class="search-bar">
        <img src="photos/perfil (1).png", class="logo">
        <a href="#">Home</a>
        <a href="#">Perfil</a>
        <a href="php/cerrar_sesion.php">Logout </a>
    </div> 
    
    <div class="grid-container">
        
        <div class="grid-item grid-FOTO">
            FOTO

            <img src="photos/chanchitos.png", class="foto-perfil">
        </div>

        <div class="grid-item grid-PERFIL">
        <?php
            //Mostramos los registros
            while ($row = $result->fetch_array()) {
            echo '<tr><td>' . $row["nombre_completo"] . '</td>';
            echo '<td>' . $row["fecha_nacimiento"] . '</td>';
            echo '<td>' . $row["pais"] . '</td>';
            echo '<td>' . $row["genero"] .'</td>';
            echo '<td>' . $row["correo"] .'</td>';
            echo '<td>' . $row["usuario"] . '</td><br><br></tr> ';
            }
            $result->free_result();
        ?>
        </div>

        <div class="grid-item grid-SOBRE_MI">

            <div id = "info">
                    <input type="button" value="edit" id = "edit">
                </div>

                <h1>Sobre Mi:</h1>

                <div id = "Sobre_Mi_Guardado">
                </div>
                <form action = "php/guardado.php" method="post" autocomplete="off">
                    <div id = "Editado">
                    </div>
                </form>

                <script src="js/dam.js"></script>
                <!-- <script mostrar datos> -->
                <script src="js/sobre_mi.js"> </script> 
            </div>

        <div class="grid-item grid-PUBLICACIONES">
            <div class = "Subida de imagen">
            <h1>Publicaciones</h1>


            <class = "Subida_Imagen">
            <!--Formulario de Html para subir fotos-->
            <form id="photos"  method="POST"  enctype="multipart/form-data">

                <label class="control-label" for="input01">Imagen:</label>

                    <input type="file" name="image" class="font" required>

                    <br><button type="submit" name="submit" class="btn btn-success"><i class="icon-upload"></i> Subir Foto</button>

            </form>
            <!-- Zona la cual crea los datos de la imagen (temporales) y guardado de datos en la tabla -->
            <?php
            if (isset($_POST['submit'])) {

                //Sube el archivo a la carpeta upload y le cambia el nombre a la fecha de subida
                $_FILES['image']['tmp_name'];
                $nombre = "image".date("YmdHis");
                copy($_FILES['image']['tmp_name'], "upload/$nombre.jpg");
                //Zona para subir la locacion del archivo junto al id de sesion actual
                $location = "upload/$nombre.jpg";
                $conexion->query("insert into photos (location,member_id) values ('$location','$session_id')");

                //Posteriori implementation
                //$Fecha= "image".date("Ymd");
                //$conexion->query('INSERT INTO photos (Fecha_P) values ( $Fecha )')
                ?>
                <script>
                    window.location = 'bienvenido.php';
                </script>
                <?php
            }
            ?>

            <hr>
            <hr>
            </div>


            <div class = "Carga_imagen">
            <!--Falta de ajuste de las imagenes-->
            <?php
            //Para acceder a la tabla de photos y cargar las imagenes
            $var_1 = $conexion->query("select * from photos");
            while( ($row = $var_1->fetch_assoc()) != false ){
                $id = $row['photos_id'];
                ?>
                <div class="col-md-2 col-sm-3 text-center">
                    <img class="photo" src="<?php echo $row['location']; ?>">
                    <hr>
                    <a class="btn btn-danger" href="php/delete_photos.php<?php echo '?id='.$id; ?>"><i class="icon-remove"></i> Eliminar</a>
                </div><br><br><br><br><br><br>
            <?php } ?>
            </div>

        </div>


        <div class="grid-item grid-AMIGOS">
            AMIGOS
        </div>
    </div>

</body>
</html>