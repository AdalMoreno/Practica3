<?php
$host = "fdb1028.awardspace.net";  // ← Asegúrate de que sea este host
$usuario = "4594373_inventarios";
$contraseña = "Adalmoreno12@";
$base_de_datos = "4594373_inventarios";

$conexion = new mysqli($host, $usuario, $contraseña, $base_de_datos);

if ($conexion->connect_error) {
    die("Error de conexión: (" . $conexion->connect_errno . ") " . $conexion->connect_error);
} else {
   
}
?>
