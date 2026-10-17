<?php
include("conexion.php");
$con = conexion();

$id = $_GET['id'];

$sql = "DELETE FROM empleados WHERE id_empleado = '$id'";
$resultado = mysqli_query($con, $sql);

if($resultado) {
    Header("Location: crudempleados.php");
} else {
    echo "Error al eliminar el empleado.";
}
?>