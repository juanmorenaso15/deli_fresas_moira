<?php
include("conexion.php");
$con = conexion();

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$direccion = $_POST['direccion'];

$sql = "INSERT INTO clientes (nombre, telefono, correo, direccion) VALUES ('$nombre', '$telefono', '$correo', '$direccion')";
$resultado = mysqli_query($con, $sql);

if($resultado) {
    Header("Location: crudclientes.php");
} else {
    echo "Error al registrar el cliente.";
}
?>