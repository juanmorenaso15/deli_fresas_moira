<?php
include("conexion.php");
$con = conexion();

$id = $_GET['id'];

$sql = "DELETE FROM clientes WHERE id_cliente = '$id'";
$resultado = mysqli_query($con, $sql);

if($resultado) {
    Header("Location: crudclientes.php");
} else {
    echo "Error al eliminar el cliente.";
}
?>