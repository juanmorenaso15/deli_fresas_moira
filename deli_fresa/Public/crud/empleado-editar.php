<?php
include("conexion.php");
$con = conexion();

$id_empleado = $_POST['id_empleado'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$cargo = $_POST['cargo'];

$sql = "UPDATE empleados SET nombre='$nombre', telefono='$telefono', correo='$correo', cargo='$cargo' WHERE id_empleado='$id_empleado'";
$resultado = mysqli_query($con, $sql);

$resultado = mysqli_query($con, $sql);

if($resultado) {
    Header("Location: crudempleados.php");
} else {
    echo "Error al actualizar el empleado.";
}
?>