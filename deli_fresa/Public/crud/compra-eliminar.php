<?php
include '../../conexion.php';
$id = $_GET['id'];
$conexion->query("DELETE FROM compras WHERE id_compra = $id");
header("Location: crudcompras.php");
?>