<?php
include("conexion.php");
$con = conexion();

$id_proveedor = $_POST['id_proveedor'];
$sql = "SELECT * FROM proveedores WHERE id_proveedor = '$id_proveedor'";
$resultado = mysqli_query($con, $sql);
$row = mysqli_fetch_array($resultado);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Consultar Proveedor</title>
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
                        <th>ID Proveedor</th>
                        <th>Nombre Proveedor</th>
                        <th>Teléfono</th>
                        <th>Correo</th>
                        <th>Dirección</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $row['id_proveedor'] ?></td>
                        <td><?php echo $row['nombre_proveedor'] ?></td>
                        <td><?php echo $row['telefono'] ?></td>
                        <td><?php echo $row['correo'] ?></td>
                        <td><?php echo $row['direccion'] ?></td>
                    </tr>
                </tbody>
            </table>
        <?php } else { ?>
            <p style="text-align: center; font-size: 20px; font-family: 'Handlee';">No se encontró ningún proveedor con el ID especificado.</p>
        <?php } ?>
        <div style="text-align: center; margin-top: 30px;">
            <a href="crudproveedores.php">Regresar al CRUD</a>
        </div>
    </section>
</body>
</html>