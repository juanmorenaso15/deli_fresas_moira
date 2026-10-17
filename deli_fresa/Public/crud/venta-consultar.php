<?php
include("conexion.php");
$con = conexion();

$id_venta = $_POST['id_venta'];
$sql = "SELECT v.id_venta, v.fecha, v.total, c.nombre AS nombre_cliente, e.nombre AS nombre_empleado 
        FROM ventas v 
        LEFT JOIN clientes c ON v.id_cliente = c.id_cliente 
        LEFT JOIN empleados e ON v.id_empleado = e.id_empleado 
        WHERE v.id_venta = '$id_venta'";
$resultado = mysqli_query($con, $sql);
$row = mysqli_fetch_array($resultado);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Consultar Venta</title>
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
                        <th>ID Venta</th>
                        <th>Fecha</th>
                        <th>Total ($)</th>
                        <th>Cliente</th>
                        <th>Empleado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $row['id_venta'] ?></td>
                        <td><?php echo $row['fecha'] ?></td>
                        <td><?php echo $row['total'] ?></td>
                        <td><?php echo $row['nombre_cliente'] ?></td>
                        <td><?php echo $row['nombre_empleado'] ?></td>
                    </tr>
                </tbody>
            </table>
        <?php } else { ?>
            <p style="text-align: center; font-size: 20px; font-family: 'Handlee';">No se encontró ninguna venta con el ID especificado.</p>
        <?php } ?>
        <div style="text-align: center; margin-top: 30px;">
            <a href="crudventas.php">Regresar al CRUD</a>
        </div>
    </section>
</body>
</html>