<?php
include("conexion.php");
$con = conexion();

$nombre_proveedor = $_POST['nombre_proveedor'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$direccion = $_POST['direccion'];

$sql = "INSERT INTO proveedores (nombre_proveedor, telefono, correo, direccion) VALUES ('$nombre_proveedor', '$telefono', '$correo', '$direccion')";
$resultado = mysqli_query($con, $sql);

if($resultado) {
    Header("Location: crudproveedores.php");
} else {
    echo "Error al registrar el proveedor.";
}
?>