<?php include '../../conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Compra - Deli Fresa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5" style="max-width: 600px;">
        <h2>Registrar Nueva Compra</h2>
        <form action="compra-insertar.php" method="POST" class="bg-white p-4 shadow-sm rounded">
            <div class="mb-3">
                <label class="form-label">Proveedor:</label>
                <select name="id_proveedor" class="form-control" required>
                    <option value="">Seleccione un proveedor</option>
                    <?php
                    $res = $conexion->query("SELECT id_proveedor, nombre_proveedor FROM proveedores");
                    while($prov = $res->fetch_assoc()) {
                        echo "<option value='{$prov['id_proveedor']}'>{$prov['nombre_proveedor']}</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Fecha de Compra:</label>
                <input type="date" name="fecha_compra" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Total de Compra:</label>
                <input type="number" step="0.01" name="total_compra" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Guardar Compra</button>
            <a href="crudcompras.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>