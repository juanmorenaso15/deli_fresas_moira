<?php
include("conexion.php");
$con = conexion();

$id = $_GET['id'];
$sql = "SELECT * FROM ventas WHERE id_venta = '$id'";
$resultado = mysqli_query($con, $sql);
$row = mysqli_fetch_array($resultado);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Venta</title>
    <link rel="stylesheet" href="style-crud.css">
    <link rel="stylesheet" href="css/styleproductos.css">
</head>
<body>
    <section class="products">
        <h1 class="tituloInicial">Actualizar Venta</h1>
        
        <div style="width: 500px; margin: 30px auto; background: #fffbe0; padding: 30px; border-radius: 10px; box-shadow: 0 0 7px rgba(0,0,0,0.5);">
            <form action="venta-editar.php" method="POST" style="display: flex; flex-direction: column;">
                <input type="hidden" name="id_venta" value="<?php echo $row['id_venta']; ?>">

                <label style="font-family: 'Mali', cursive; font-size: 18px; color: #55182f; margin-bottom: 5px;">Fecha:</label>
                <input type="date" name="fecha" value="<?php echo $row['fecha']; ?>" required style="font-size: 18px; padding: 10px; margin-bottom: 15px; border: 1px solid #ce9651; border-radius: 5px;">

                <label style="font-family: 'Mali', cursive; font-size: 18px; color: #55182f; margin-bottom: 5px;">Total:</label>
                <input type="number" step="0.01" name="total" value="<?php echo $row['total']; ?>" required style="font-size: 18px; padding: 10px; margin-bottom: 15px; border: 1px solid #ce9651; border-radius: 5px;">

                <label style="font-family: 'Mali', cursive; font-size: 18px; color: #55182f; margin-bottom: 5px;">Cliente:</label>
                <select name="id_cliente" required style="font-size: 18px; padding: 10px; margin-bottom: 15px; border: 1px solid #ce9651; border-radius: 5px; background: #fff;">
                    <?php
                    $sql_clientes = "SELECT id_cliente, nombre FROM clientes";
                    $res_clientes = mysqli_query($con, $sql_clientes);
                    while($c = mysqli_fetch_array($res_clientes)){
                        $selected = ($c['id_cliente'] == $row['id_cliente']) ? "selected" : "";
                        echo "<option value='".$c['id_cliente']."' ".$selected.">".$c['nombre']."</option>";
                    }
                    ?>
                </select>

                <label style="font-family: 'Mali', cursive; font-size: 18px; color: #55182f; margin-bottom: 5px;">Empleado:</label>
                <select name="id_empleado" required style="font-size: 18px; padding: 10px; margin-bottom: 20px; border: 1px solid #ce9651; border-radius: 5px; background: #fff;">
                    <?php
                    $sql_empleados = "SELECT id_empleado, nombre FROM empleados";
                    $res_empleados = mysqli_query($con, $sql_empleados);
                    while($e = mysqli_fetch_array($res_empleados)){
                        $selected = ($e['id_empleado'] == $row['id_empleado']) ? "selected" : "";
                        echo "<option value='".$e['id_empleado']."' ".$selected.">".$e['nombre']."</option>";
                    }
                    ?>
                </select>

                <button type="submit" style="background-color: #f1738f; color: white; padding: 12px; border: none; border-radius: 5px; font-size: 18px; cursor: pointer;">Actualizar</button>
            </form>
            <div style="text-align: center; margin-top: 20px;">
                <a href="crudventas.php" style="background-color: #ce9651; color: white; padding: 8px 15px; border-radius: 5px; text-decoration: none;">Cancelar</a>
            </div>
        </div>
    </section>
</body>
</html>