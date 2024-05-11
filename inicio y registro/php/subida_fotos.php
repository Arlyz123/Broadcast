<?php

function Subir_imagenes ($session_id): void
    {
        $conexion = mysqli_connect("localhost", "root", "", "pagina");
        $nombre = "image".date("YmdHis");
        copy($_FILES['image']['tmp_name'], "upload/$nombre.jpg");
        //Zona para subir la locacion del archivo junto al id de sesion actual
        $LUGAR = "upload/$nombre.jpg";
        $conexion->query("insert into photos (location,member_id) values ('$LUGAR','$session_id')");
        //Posteriori implementation
        //$Fecha= "image".date("Ymd");
        //$conexion->query('INSERT INTO photos (Fecha_P) values ( $Fecha )')
    }

    function Cargar_imagenes (): void
    {
        $conexion = mysqli_connect("localhost", "root", "", "pagina");
        //Para acceder a la tabla de photos y cargar las imagenes
        $var_1 = $conexion->query("select * from photos");
        while( ($row = $var_1->fetch_assoc()) != false ) {
            $id = $row['photos_id'];?>
            <div class="Foto_subida">
                <img class="photo" src="<?php echo $row['location']; ?>">
                <hr>
                <a class="btn btn-danger" href="php/delete_photos.php<?php echo '?id='.$id; ?>"><i class="icon-remove"></i> Eliminar</a>
            </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <?php }
    }

?>