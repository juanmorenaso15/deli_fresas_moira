<?php
include("conexion.php");
$con = conexion();

$id = $_GET['id'];
$sql = "SELECT * FROM empleados WHERE id_empleado = '$id'";
$resultado = mysqli_query($con, $sql);
$row = mysqli_fetch_array($resultado);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Empleado</title>
    <link rel="stylesheet" href="style-crud.css">
    <link rel="stylesheet" href="css/styleproductos.css">
</head>
<body>
    <section class="products">
        <h1 class="tituloInicial">Actualizar Empleado</h1>
        
        <div style="width: 500px; margin: 30px auto; background: #fffbe0; padding: 30px; border-radius: 10px; box-shadow: 0 0 7px rgba(0,0,0,0.5);">
            <form action="empleado-editar.php" method="POST" style="display: flex; flex-direction: column;">
                <input type="hidden" name="id_empleado" value="<?php echo $row['id_empleado']; ?>">

                <label style="font-family: 'Mali', cursive; font-size: 18px; color: #55182f; margin-bottom: 5px;">Nombre:</label>
                <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>" required style="font-size: 18px; padding: 10px; margin-bottom: 15px; border: 1px solid #ce9651; border-radius: 5px;">

                <label style="font-family: 'Mali', cursive; font-size: 18px; color: #55182f; margin-bottom: 5px;">Teléfono:</label>
                <input type="text" name="telefono" value="<?php echo $row['telefono']; ?>" required style="font-size: 18px; padding: 10px; margin-bottom: 15px; border: 1px solid #ce9651; border-radius: 5px;">

                <label style="font-family: 'Mali', cursive; font-size: 18px; color: #55182f; margin-bottom: 5px;">Correo Electrónico:</label>
                <input type="email" name="correo" value="<?php echo $row['correo']; ?>" required style="font-size: 18px; padding: 10px; margin-bottom: 15px; border: 1px solid #ce9651; border-radius: 5px;">

                <label style="font-family: 'Mali', cursive; font-size: 18px; color: #55182f; margin-bottom: 5px;">Cargo:</label>
                <input type="text" name="cargo" value="<?php echo $row['cargo']; ?>" required style="font-size: 18px; padding: 10px; margin-bottom: 20px; border: 1px solid #ce9651; border-radius: 5px;">

                <button type="submit" style="background-color: #f1738f; color: white; padding: 12px; border: none; border-radius: 5px; font-size: 18px; cursor: pointer;">Actualizar</button>
            </form>
            <div style="text-align: center; margin-top: 20px;">
                <a href="crudempleados.php" style="background-color: #ce9651; color: white; padding: 8px 15px; border-radius: 5px; text-decoration: none;">Cancelar</a>
            </div>
        </div>
    </section>
</body>
</html>