<?php
include("conexion.php");
$con = conexion();

$id_categoria = $_POST['id_categoria'];
$sql = "SELECT * FROM categorias WHERE id_categoria = '$id_categoria'";
$resultado = mysqli_query($con, $sql);
$row = mysqli_fetch_array($resultado);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Consultar Categoría</title>
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
                        <th>ID Categoría</th>
                        <th>Nombre Categoría</th>
                        <th>Descripción</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $row['id_categoria'] ?></td>
                        <td><?php echo $row['nombre_categoria'] ?></td>
                        <td><?php echo $row['descripcion'] ?></td>
                    </tr>
                </tbody>
            </table>
        <?php } else { ?>
            <p style="text-align: center; font-size: 20px; font-family: 'Handlee';">No se encontró ninguna categoría con el ID especificado.</p>
        <?php } ?>
        <div style="text-align: center; margin-top: 30px;">
            <a href="crudcategorias.php">Regresar al CRUD</a>
        </div>
    </section>
</body>
</html>