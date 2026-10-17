<?php
include("conexion.php");
$con = conexion();

$id = $_GET['id'];
$sql = "SELECT * FROM detalle_ventas WHERE id_detalle = '$id'";
$resultado = mysqli_query($con, $sql);
$row = mysqli_fetch_array($resultado);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Detalle Venta</title>
    <link rel="stylesheet" href="style-crud.css">
    <link rel="stylesheet" href="css/styleproductos.css">
</head>
<body>
    <section class="products">
        <h1 class="tituloInicial">Actualizar Detalle Venta</h1>
        
        <div style="width: 500px; margin: 30px auto; background: #fffbe0; padding: 30px; border-radius: 10px; box-shadow: 0 0 7px rgba(0,0,0,0.5);">
            <form action="detalleventa-editar.php" method="POST" style="display: flex; flex-direction: column;">
                <input type="hidden" name="id_detalle" value="<?php echo $row['id_detalle']; ?>">

                <label style="font-family: 'Mali', cursive; font-size: 18px; color: #55182f; margin-bottom: 5px;">ID Venta:</label>
                <select name="id_venta" required style="font-size: 18px; padding: 10px; margin-bottom: 15px; border: 1px solid #ce9651; border-radius: 5px; background: #fff;">
                    <?php
                    $sql_ventas = "SELECT id_venta, fecha FROM ventas";
                    $res_ventas = mysqli_query($con, $sql_ventas);
                    while($v = mysqli_fetch_array($res_ventas)){
                        $selected = ($v['id_venta'] == $row['id_venta']) ? "selected" : "";
                        echo "<option value='".$v['id_venta']."' ".$selected.">Venta #".$v['id_venta']." (Fecha: ".$v['fecha'].")</option>";
                    }
                    ?>
                </select>

                <label style="font-family: 'Mali', cursive; font-size: 18px; color: #55182f; margin-bottom: 5px;">Producto:</label>
                <select name="id_producto" required style="font-size: 18px; padding: 10px; margin-bottom: 15px; border: 1px solid #ce9651; border-radius: 5px; background: #fff;">
                    <?php
                    $sql_prod = "SELECT id_producto, nombre_producto FROM productos";
                    $res_prod = mysqli_query($con, $sql_prod);
                    while($p = mysqli_fetch_array($res_prod)){
                        $selected = ($p['id_producto'] == $row['id_producto']) ? "selected" : "";
                        echo "<option value='".$p['id_producto']."' ".$selected.">".$p['nombre_producto']."</option>";
                    }
                    ?>
                </select>

                <label style="font-family: 'Mali', cursive; font-size: 18px; color: #55182f; margin-bottom: 5px;">Cantidad:</label>
                <input type="number" name="cantidad" value="<?php echo $row['cantidad']; ?>" required style="font-size: 18px; padding: 10px; margin-bottom: 15px; border: 1px solid #ce9651; border-radius: 5px;">

                <label style="font-family: 'Mali', cursive; font-size: 18px; color: #55182f; margin-bottom: 5px;">Subtotal:</label>
                <input type="number" step="0.01" name="subtotal" value="<?php echo $row['subtotal']; ?>" required style="font-size: 18px; padding: 10px; margin-bottom: 20px; border: 1px solid #ce9651; border-radius: 5px;">

                <button type="submit" style="background-color: #f1738f; color: white; padding: 12px; border: none; border-radius: 5px; font-size: 18px; cursor: pointer;">Actualizar</button>
            </form>
            <div style="text-align: center; margin-top: 20px;">
                <a href="cruddetalleventas.php" style="background-color: #ce9651; color: white; padding: 8px 15px; border-radius: 5px; text-decoration: none;">Cancelar</a>
            </div>
        </div>
    </section>
</body>
</html>