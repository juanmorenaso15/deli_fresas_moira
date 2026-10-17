<?php
include("conexion.php");
$con = conexion();

$id_cliente = $_POST['id_cliente'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$direccion = $_POST['direccion'];

$sql = "UPDATE clientes SET nombre='$nombre', telefono='$telefono', correo='$correo', direccion='$direccion' WHERE id_cliente='$id_cliente'";
$resultado = mysqli_query($con, $sql);

if($resultado) {
    Header("Location: crudclientes.php");
} else {
    echo "Error al actualizar el cliente.";
}
?>