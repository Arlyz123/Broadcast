<?php

//Cambiar el Location a cualquier redireccionamiento. (Actualmente apuntando al "perfil"/home)

include('conexion.php');
$get_id = $_GET['id'];
$conexion->query("delete from photos where photos_id='$get_id'");
header("Location: ../bienvenido.php");

?>