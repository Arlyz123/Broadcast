<?php

//Cambiar el Location a cualquier redireccionamiento. (Actualmente apuntando al "perfil"/home)

//Cambiar fallo del id *(relacionado al sesion id)

include('conexion.php');
$get_id = $_GET['id'];
$conexion->query("delete from photos where photos_id='$get_id'");
header('location:bienvenido.php');

include('conexion.php');
$get_id = $_GET['id'];
$conexion->query("delete from post where post_id='$get_id'");
header('location:bienvenido.php');

?>