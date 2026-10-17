<?php
include("conexion.php");
$con = conexion();

$id_venta = $_POST['id_venta'];
$fecha = $_POST['fecha'];
$total = $_POST['total'];
$id_cliente = $_POST['id_cliente'];
$id_empleado = $_POST['id_empleado'];

$sql = "UPDATE ventas SET fecha='$fecha', total='$total', id_cliente='$id_cliente', id_empleado='$id_empleado' WHERE id_venta='$id_venta'";
$resultado = mysqli_query($con, $sql);

if($resultado) {
    Header("Location: crudventas.php");
} else {
    echo "Error al actualizar la venta.";
}
?>