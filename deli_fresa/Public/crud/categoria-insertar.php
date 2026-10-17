<?php
include("conexion.php");
$con = conexion();

$nombre_categoria = $_POST['nombre_categoria'];
$descripcion = $_POST['descripcion'];

$sql = "INSERT INTO categorias (nombre_categoria, descripcion) VALUES ('$nombre_categoria', '$descripcion')";
$resultado = mysqli_query($con, $sql);

if($resultado) {
    Header("Location: crudcategorias.php");
} else {
    echo "Error al registrar la categoría.";
}
?>