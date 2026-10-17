<?php include '../../conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Envío</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5" style="max-width: 600px;">
        <h2>Registrar Nuevo Envío</h2>
        <form action="envio-insertar.php" method="POST" class="bg-white p-4 shadow-sm rounded">
            <div class="mb-3">
                <label class="form-label">ID Venta:</label>
                <select name="id_venta" class="form-control" required>
                    <option value="">Seleccione la venta</option>
                    <?php
                    $res = $conexion->query("SELECT id_venta FROM ventas");
                    while($v = $res->fetch_assoc()) {
                        echo "<option value='{$v['id_venta']}'>Venta #{$v['id_venta']}</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Dirección de Envío:</label>
                <input type="text" name="direccion_envio" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Ciudad:</label>
                <input type="text" name="ciudad" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Fecha de Envío:</label>
                <input type="date" name="fecha_envio" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Estado del Envío:</label>
                <select name="estado_envio" class="form-control" required>
                    <option value="Pendiente">Pendiente</option>
                    <option value="En Camino">En Camino</option>
                    <option value="Entregado">Entregado</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Guardar Envío</button>
            <a href="crudenvios.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>