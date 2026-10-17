<?php
include("conexion.php");
$con = conexion();

$id_producto = $_POST['id_producto'];
$sql = "SELECT * FROM productos WHERE id_producto = '$id_producto'";
$resultado = mysqli_query($con, $sql);
$row = mysqli_fetch_array($resultado);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Consultar Producto</title>
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
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Stock</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $row['id_producto'] ?></td>
                        <td><?php echo $row['nombre_producto'] ?></td>
                        <td><?php echo $row['descripcion'] ?></td>
                        <td><?php echo $row['precio'] ?></td>
                        <td><?php echo $row['stock'] ?></td>
                    </tr>
                </tbody>
            </table>
        <?php } else { ?>
            <p style="text-align: center; font-size: 20px; font-family: 'Handlee';">No se encontró ningún producto con el ID especificado.</p>
        <?php } ?>
        <div style="text-align: center; margin-top: 30px;">
            <a href="crudproductos.php">Regresar al CRUD</a>
        </div>
    </section>
</body>
</html>