<?php
include("conexion.php");
$con = conexion();

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$cargo = $_POST['cargo'];

$sql = "INSERT INTO empleados (nombre, telefono, correo, cargo) VALUES ('$nombre', '$telefono', '$correo', '$cargo')";
$resultado = mysqli_query($con, $sql);

if($resultado) {
    Header("Location: crudempleados.php");
} else {
    echo "Error al registrar el empleado.";
}
?>