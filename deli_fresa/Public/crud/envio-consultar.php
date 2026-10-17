<?php
include '../../conexion.php';
$id = $_GET['id'];
$envio = $conexion->query("SELECT * FROM envios WHERE id_envio = $id")->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Consultar Envío</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5" style="max-width: 600px;">
        <h2>Detalles del Envío #<?php echo $envio['id_envio']; ?></h2>
        <div class="card p-4 shadow-sm bg-white">
            <p><strong>ID Venta:</strong> <?php echo $envio['id_venta']; ?></p>
            <p><strong>Dirección:</strong> <?php echo $envio['direccion_envio']; ?></p>
            <p><strong>Ciudad:</strong> <?php echo $envio['ciudad']; ?></p>
            <p><strong>Fecha de Envío:</strong> <?php echo $envio['fecha_envio']; ?></p>
            <p><strong>Estado:</strong> <?php echo $envio['estado_envio']; ?></p>
            <a href="crudenvios.php" class="btn btn-secondary">Volver</a>
        </div>
    </div>
</body>
</html>