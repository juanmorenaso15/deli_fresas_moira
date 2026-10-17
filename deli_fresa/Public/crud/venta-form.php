<?php
include("conexion.php");
$con = conexion();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Venta - Deli Fresa</title>
    <link rel="stylesheet" href="style-crud.css">
    <link rel="stylesheet" href="css/styleproductos.css">
</head>
<body>
    <header>
        <div class="logo">
            <img class="imagen" src="img/logoSunshine.png" alt="Logo">
        </div>
    </header>

    <section class="products">
        <h1 class="tituloInicial">Registrar Nueva Venta</h1>
        
        <div style="width: 500px; margin: 30px auto; background: #fffbe0; padding: 30px; border-radius: 10px; box-shadow: 0 0 7px rgba(0,0,0,0.5);">
            <form action="venta-insertar.php" method="POST" style="display: flex; flex-direction: column;">
                <label style="font-family: 'Mali', cursive; font-size: 18px; color: #55182f; margin-bottom: 5px;">Fecha:</label>
                <input type="date" name="fecha" required style="font-size: 18px; padding: 10px; margin-bottom: 15px; border: 1px solid #ce9651; border-radius: 5px;">

                <label style="font-family: 'Mali', cursive; font-size: 18px; color: #55182f; margin-bottom: 5px;">Total:</label>
                <input type="number" step="0.01" name="total" required style="font-size: 18px; padding: 10px; margin-bottom: 15px; border: 1px solid #ce9651; border-radius: 5px;">

                <label style="font-family: 'Mali', cursive; font-size: 18px; color: #55182f; margin-bottom: 5px;">Cliente:</label>
                <select name="id_cliente" required style="font-size: 18px; padding: 10px; margin-bottom: 15px; border: 1px solid #ce9651; border-radius: 5px; background: #fff;">
                    <option value="">Seleccione un cliente</option>
                    <?php
                    $sql_clientes = "SELECT id_cliente, nombre FROM clientes";
                    $res_clientes = mysqli_query($con, $sql_clientes);
                    while($c = mysqli_fetch_array($res_clientes)){
                        echo "<option value='".$c['id_cliente']."'>".$c['nombre']."</option>";
                    }
                    ?>
                </select>

                <label style="font-family: 'Mali', cursive; font-size: 18px; color: #55182f; margin-bottom: 5px;">Empleado:</label>
                <select name="id_empleado" required style="font-size: 18px; padding: 10px; margin-bottom: 20px; border: 1px solid #ce9651; border-radius: 5px; background: #fff;">
                    <option value="">Seleccione un empleado</option>
                    <?php
                    $sql_empleados = "SELECT id_empleado, nombre FROM empleados";
                    $res_empleados = mysqli_query($con, $sql_empleados);
                    while($e = mysqli_fetch_array($res_empleados)){
                        echo "<option value='".$e['id_empleado']."'>".$e['nombre']."</option>";
                    }
                    ?>
                </select>

                <button type="submit" style="background-color: #f1738f; color: white; padding: 12px; border: none; border-radius: 5px; font-size: 18px; cursor: pointer;">Guardar Venta</button>
            </form>
            <div style="text-align: center; margin-top: 20px;">
                <a href="crudventas.php" style="background-color: #ce9651; color: white; padding: 8px 15px; border-radius: 5px; text-decoration: none;">Volver al Listado</a>
            </div>
        </div>
    </section>
</body>
</html>