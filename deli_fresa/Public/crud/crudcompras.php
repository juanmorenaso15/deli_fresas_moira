<?php
// Incluir conexión a la base de datos
include '../../conexion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Compras - Deli Fresa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2>Listado de Compras</h2>
        <a href="compra-form.php" class="btn btn-primary mb-3">Nueva Compra</a>
        <a href="../../index.php" class="btn btn-secondary mb-3">Volver al Menú</a>
        
        <table class="table table-bordered table-striped bg-white shadow-sm">
            <thead class="table-dark">
                <tr>
                    <th>ID Compra</th>
                    <th>Proveedor</th>
                    <th>Fecha</th>
                    <th>Total</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT c.id_compra, p.nombre_proveedor, c.fecha_compra, c.total_compra 
                        FROM compras c 
                        JOIN proveedores p ON c.id_proveedor = p.id_proveedor";
                $resultado = $conexion->query($sql);
                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                        echo "<tr>
                            <td>{$row['id_compra']}</td>
                            <td>{$row['nombre_proveedor']}</td>
                            <td>{$row['fecha_compra']}</td>
                            <td>\${$row['total_compra']}</td>
                            <td>
                                <a href='compra-consultar.php?id={$row['id_compra']}' class='btn btn-info btn-sm'>Ver</a>
                                <a href='compra-editar.php?id={$row['id_compra']}' class='btn btn-warning btn-sm'>Editar</a>
                                <a href='compra-eliminar.php?id={$row['id_compra']}' class='btn btn-danger btn-sm' onclick='return confirm(\"¿Estás seguro?\")'>Eliminar</a>
                            </td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='5' class='text-center'>No hay compras registradas.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>