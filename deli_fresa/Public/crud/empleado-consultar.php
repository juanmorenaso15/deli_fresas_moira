<?php
include("conexion.php");
$con = conexion();

$id_empleado = $_POST['id_empleado'];
$sql = "SELECT * FROM empleados WHERE id_empleado = '$id_empleado'";
$resultado = mysqli_query($con, $sql);
$row = mysqli_fetch_array($resultado);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Consultar Empleado</title>
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
                        <th>ID Empleado</th>
                        <th>Nombre</th>
                        <th>Teléfono</th>
                        <th>Correo</th>
                        <th>Cargo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $row['id_empleado'] ?></td>
                        <td><?php echo $row['nombre'] ?></td>
                        <td><?php echo $row['telefono'] ?></td>
                        <td><?php echo $row['correo'] ?></td>
                        <td><?php echo $row['cargo'] ?></td>
                    </tr>
                </tbody>
            </table>
        <?php } else { ?>
            <p style="text-align: center; font-size: 20px; font-family: 'Handlee';">No se encontró ningún empleado con el ID especificado.</p>
        <?php } ?>
        <div style="text-align: center; margin-top: 30px;">
            <a href="crudempleados.php">Regresar al CRUD</a>
        </div>
    </section>
</body>
</html>