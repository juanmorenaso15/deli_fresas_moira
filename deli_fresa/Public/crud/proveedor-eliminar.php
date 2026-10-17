<?php
include("conexion.php");
$con = conexion();

$id = $_GET['id'];

$sql = "DELETE FROM proveedores WHERE id_proveedor = '$id'";
$resultado = mysqli_query($con, $sql);

if($resultado) {
    Header("Location: crudproveedores.php");
} else {
    echo "Error al eliminar el proveedor.";
}
?>