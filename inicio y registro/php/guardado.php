<?php

$conex = mysqli_connect("localhost", "root", "", "pagina");

$Institucion = "";
$Futbol = "";
$Basket = "";
$Voley = "";
$Tenis = "";
$Natacion = "";
$Otro_deporte = "";
$Pelicula_fav = "";
$Cancion_fav = "";
$Estado_de_relacion = "";

if($_POST['institucion']){
    foreach($_POST['institucion'] as $Insti){
        $Institucion.= $Insti;
    } 

    foreach($_POST['futbol'] as $fut){
        $Futbol.= $fut;
    } 

    foreach($_POST['basket'] as $bas){
        $Basket.= $bas;
    } 

    foreach($_POST['voley'] as $vol){
        $Voley.= $vol;
    }     

    foreach($_POST['tenis'] as $ten){
        $Tenis.= $ten;
    }

    foreach($_POST['natacion'] as $nat){
        $Natacion.= $nat;
    }  

    foreach($_POST['otro_deporte'] as $otro){
        $Otro_deporte.= $otro;
    } 

    foreach($_POST['pelicula_fav'] as $pel){
        $Pelicula_fav.= $pel;
    } 

    foreach($_POST['cancion_fav'] as $can){
        $Cancion_fav.= $can;
    } 

    foreach($_POST['estado_relacion'] as $est){
        $Estado_de_relacion.= $est;
    } 

$consulta_sql = "INSERT INTO sobre_mi SET Institucion = '$Institucion',
Futbol = '$Futbol', Basket = '$Basket', Voley = '$Voley', Tenis = '$Tenis',
Natacion = '$Natacion', Otro_Deporte = '$Otro_deporte',
Pelicula_Fav = '$Pelicula_fav', Cancion_Fav = '$Cancion_fav', Estado = '$Estado_de_relacion'
";

mysqli_query($conex, $consulta_sql);


header("Location: ../bienvenido.php");

}

?>
