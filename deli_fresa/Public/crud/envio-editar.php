<?php
include '../../conexion.php';
$id = $_GET['id'];
$envio = $conexion->query("SELECT * FROM envios WHERE id_envio = $id")->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Envío</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5" style="max-width: 600px;">
        <h2>Editar Envío</h2>
        <form action="envio-actualizar.php" method="POST" class="bg-white p-4 shadow-sm rounded">
            <input type="hidden" name="id_envio" value="<?php echo $envio['id_envio']; ?>">
            <div class="mb-3">
                <label class="form-label">Dirección:</label>
                <input type="text" name="direccion_envio" value="<?php echo $envio['direccion_envio']; ?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Ciudad:</label>
                <input type="text" name="ciudad" value="<?php echo $envio['ciudad']; ?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Fecha de Envío:</label>
                <input type="date" name="fecha_envio" value="<?php echo $envio['fecha_envio']; ?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Estado:</label>
                <select name="estado_envio" class="form-control" required>
                    <option value="Pendiente" <?php if($envio['estado_envio']=='Pendiente') echo 'selected';?>>Pendiente</option>
                    <option value="En Camino" <?php if($envio['estado_envio']=='En Camino') echo 'selected';?>>En Camino</option>
                    <option value="Entregado" <?php if($envio['estado_envio']=='Entregado') echo 'selected';?>>Entregado</option>
                </select>
            </div>
            <button type="submit" class="btn btn-warning">Actualizar Envío</button>
            <a href="crudenvios.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>