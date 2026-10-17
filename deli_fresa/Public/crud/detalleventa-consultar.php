<?php
include("conexion.php");
$con = conexion();

$id_detalle = $_POST['id_detalle'];
$sql = "SELECT dv.id_detalle, dv.id_venta, p.nombre_producto, dv.cantidad, dv.subtotal 
        FROM detalle_ventas dv 
        LEFT JOIN productos p ON dv.id_producto = p.id_producto 
        WHERE dv.id_detalle = '$id_detalle'";
$resultado = mysqli_query($con, $sql);
$row = mysqli_fetch_array($resultado);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Consultar Detalle Venta</title>
    <link rel="stylesheet" href="style-crud.css">
    <link rel="stylesheet" href="css/styleproductos.css">
</head>
<body>
    <section class="products">
        <h1 class="tituloInicial">Resultado de Consulta</h1>
        <?php if($row) { ?>
            <table>
                <thead>
                    <tr>
                        <th>ID Detalle</th>
                        <th>ID Venta</th>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Subtotal ($)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $row['id_detalle'] ?></td>
                        <td><?php echo $row['id_venta'] ?></td>
                        <td><?php echo $row['nombre_producto'] ?></td>
                        <td><?php echo $row['cantidad'] ?></td>
                        <td><?php echo $row['subtotal'] ?></td>
                    </tr>
                </tbody>
            </table>
        <?php } else { ?>
            <p style="text-align: center; font-size: 20px; font-family: 'Handlee';">No se encontró ningún detalle de venta con el ID especificado.</p>
        <?php } ?>
        <div style="text-align: center; margin-top: 30px;">
            <a href="cruddetalleventas.php">Regresar al CRUD</a>
        </div>
    </section>
</body>
</html>