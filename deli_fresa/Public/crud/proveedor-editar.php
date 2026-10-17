<?php
include("conexion.php");
$con = conexion();

$id_proveedor = $_POST['id_proveedor'];
$nombre_proveedor = $_POST['nombre_proveedor'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$direccion = $_POST['direccion'];

$sql = "UPDATE proveedores SET nombre_proveedor='$nombre_proveedor', telefono='$telefono', correo='$correo', direccion='$direccion' WHERE id_proveedor='$id_proveedor'";
$resultado = mysqli_query($con, $sql);

if($resultado) {
    Header("Location: crudproveedores.php");
} else {
    echo "Error al actualizar el proveedor.";
}
?>