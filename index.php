<?php
require_once"recursos/ruta.php"; 
require_once"recursos/plantilla.php";
require_once"recursos/conexion.php";
if (isset($_GET["controlador"]) && isset($_GET["accion"]) ){
    $controlador= $_GET["controlador"];
    $accion =$_GET["accion"];
}else{
    $controlador = "producto";
    $accion      = "principal";
}

ruta::cargarContenido($controlador,$accion);
?> 