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
        <a href="#">Home</a>
        <a href="#">Perfil</a>
        <a href="php/cerrar_sesion.php">Logout </a>
    </div>
    <div class="grid-container">
        
        <div class="grid-item grid-FOTO">
            FOTO

            <img src="photos/perfil (1).png">
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
            echo '<td>' . $row["usuario"] . '</td></tr>';
            }
            $result->free_result();
            $conexion->close();
        ?>
        </div>

        <div class="grid-item grid-AMIGOS">

            <div id = "info">
                    <input type="button" value="edit" id = "edit">
                </div>

                <h1>Sobre Mi:</h1>

                <div id = "Sobre_Mi_Guardado">
                </div>
                <form action = "php/guardado.php" method="post" autocomplete="on">
                    <div id = "Editado">
                    </div>
                </form>

                

                <script src="js/dam.js"></script>
                <!-- <script mostrar datos> -->
                <script src="js/sobre_mi.js"> </script> 
            </div>

        <div class="grid-item grid-PUBLICACIONES">

            <form id="photos"   method="POST" enctype="multipart/form-data">

                <label class="control-label" for="input01">Imagen:</label>

                <input type="file" name="image" class="font" required>

                <br><button type="submit" name="submit" class="btn btn-success"><i class="icon-upload"></i> Subir Foto</button>

            </form>

            <?php
            if (isset($_POST['submit'])) {

                $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                $image_name = addslashes($_FILES['image']['name']);
                $image_size = getimagesize($_FILES['image']['tmp_name']);

                move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
                $location = "upload/" . $_FILES["image"]["name"];
                $conn->query("insert into photos (location,member_id) values ('$location','$session_id')");
                ?>
                <script>
                    window.location = 'photos.php';
                </script>
                <?php
            }
            ?>

            <hr>
            <hr>
            <?php
            $query = $conn->query("select * from photos where member_id='$session_id'");
            while($row = $query->fetch()){
                $id = $row['photos_id'];
                ?>
                <div class="col-md-2 col-sm-3 text-center">
                    <img class="photo" src="<?php echo $row['location']; ?>" >
                    <hr>
                    <a class="btn btn-danger" href="delete_photos.php<?php echo '?id='.$id; ?>"><i class="icon-remove"></i> Eliminar</a>
                </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <?php } ?>

        </div>

        <div class="grid-item grid-CHATS">
            AMIGOS
        </div>
    </div>

</body>
</html>