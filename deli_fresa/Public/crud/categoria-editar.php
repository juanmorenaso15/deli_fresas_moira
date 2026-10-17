<?php
include("conexion.php");
$con = conexion();

$id_categoria = $_POST['id_categoria'];
$nombre_categoria = $_POST['nombre_categoria'];
$descripcion = $_POST['descripcion'];

$sql = "UPDATE categorias SET nombre_categoria='$nombre_categoria', descripcion='$descripcion' WHERE id_categoria='$id_categoria'";
$resultado = mysqli_query($con, $sql);

if($resultado) {
    Header("Location: crudcategorias.php");
} else {
    echo "Error al actualizar la categoría.";
}
?>