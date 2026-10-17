<?php
include '../../conexion.php';
$id = $_GET['id'];
$compra = $conexion->query("SELECT * FROM compras WHERE id_compra = $id")->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Compra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5" style="max-width: 600px;">
        <h2>Editar Compra</h2>
        <form action="compra-actualizar.php" method="POST" class="bg-white p-4 shadow-sm rounded">
            <input type="hidden" name="id_compra" value="<?php echo $compra['id_compra']; ?>">
            <div class="mb-3">
                <label class="form-label">Proveedor:</label>
                <select name="id_proveedor" class="form-control" required>
                    <?php
                    $res = $conexion->query("SELECT id_proveedor, nombre_proveedor FROM proveedores");
                    while($prov = $res->fetch_assoc()) {
                        $selected = ($prov['id_proveedor'] == $compra['id_proveedor']) ? "selected" : "";
                        echo "<option value='{$prov['id_proveedor']}' $selected>{$prov['nombre_proveedor']}</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Fecha de Compra:</label>
                <input type="date" name="fecha_compra" value="<?php echo $compra['fecha_compra']; ?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Total:</label>
                <input type="number" step="0.01" name="total_compra" value="<?php echo $compra['total_compra']; ?>" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-warning">Actualizar Compra</button>
            <a href="crudcompras.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>