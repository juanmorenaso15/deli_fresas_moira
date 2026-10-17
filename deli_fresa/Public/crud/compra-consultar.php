<?php
include '../../conexion.php';
$id = $_GET['id'];
$resultado = $conexion->query("SELECT c.*, p.nombre_proveedor FROM compras c JOIN proveedores p ON c.id_proveedor = p.id_proveedor WHERE c.id_compra = $id");
$compra = $resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Consultar Compra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5" style="max-width: 600px;">
        <h2>Detalles de la Compra #<?php echo $compra['id_compra']; ?></h2>
        <div class="card p-4 shadow-sm bg-white">
            <p><strong>Proveedor:</strong> <?php echo $compra['nombre_proveedor']; ?></p>
            <p><strong>Fecha de Compra:</strong> <?php echo $compra['fecha_compra']; ?></p>
            <p><strong>Total:</strong> $<?php echo $compra['total_compra']; ?></p>
            <a href="crudcompras.php" class="btn btn-secondary">Volver</a>
        </div>
    </div>
</body>
</html>