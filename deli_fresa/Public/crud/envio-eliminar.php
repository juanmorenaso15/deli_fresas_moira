<?php
include '../../conexion.php';
$id = $_GET['id'];
$conexion->query("DELETE FROM envios WHERE id_envio = $id");
header("Location: crudenvios.php");
?>