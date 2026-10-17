<?php
include("conexion.php");
$con = conexion();

$id = $_GET['id'];

$sql = "DELETE FROM categorias WHERE id_categoria = '$id'";
$resultado = mysqli_query($con, $sql);

if($resultado) {
    Header("Location: crudcategorias.php");
} else {
    echo "Error al eliminar la categoría.";
}
?>