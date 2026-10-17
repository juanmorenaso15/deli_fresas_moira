<?php include '../../conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Envíos - Deli Fresa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2>Listado de Envíos</h2>
        <a href="envio-form.php" class="btn btn-primary mb-3">Nuevo Envío</a>
        <a href="../../index.php" class="btn btn-secondary mb-3">Volver al Menú</a>
        
        <table class="table table-bordered table-striped bg-white shadow-sm">
            <thead class="table-dark">
                <tr>
                    <th>ID Envío</th>
                    <th>ID Venta</th>
                    <th>Dirección</th>
                    <th>Ciudad</th>
                    <th>Fecha Envío</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $resultado = $conexion->query("SELECT * FROM envios");
                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                        echo "<tr>
                            <td>{$row['id_envio']}</td>
                            <td>{$row['id_venta']}</td>
                            <td>{$row['direccion_envio']}</td>
                            <td>{$row['ciudad']}</td>
                            <td>{$row['fecha_envio']}</td>
                            <td>{$row['estado_envio']}</td>
                            <td>
                                <a href='envio-consultar.php?id={$row['id_envio']}' class='btn btn-info btn-sm'>Ver</a>
                                <a href='envio-editar.php?id={$row['id_envio']}' class='btn btn-warning btn-sm'>Editar</a>
                                <a href='envio-eliminar.php?id={$row['id_envio']}' class='btn btn-danger btn-sm' onclick='return confirm(\"¿Estás seguro?\")'>Eliminar</a>
                            </td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='7' class='text-center'>No hay envíos registrados.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>