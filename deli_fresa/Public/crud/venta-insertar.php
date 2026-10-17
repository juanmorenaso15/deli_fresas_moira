<?php
include("conexion.php");
$con = conexion();

$fecha = $_POST['fecha'];
$total = $_POST['total'];
$id_cliente = $_POST['id_cliente'];
$id_empleado = $_POST['id_empleado'];

$sql = "INSERT INTO ventas (fecha, total, id_cliente, id_empleado) VALUES ('$fecha', '$total', '$id_cliente', '$id_empleado')";
$resultado = mysqli_query($con, $sql);

if($resultado) {
    Header("Location: crudventas.php");
} else {
    echo "Error al registrar la venta.";
}
?>