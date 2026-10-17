<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Empleado - Deli Fresa</title>
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
        <h1 class="tituloInicial">Agregar Nuevo Empleado</h1>
        
        <div style="width: 500px; margin: 30px auto; background: #fffbe0; padding: 30px; border-radius: 10px; box-shadow: 0 0 7px rgba(0,0,0,0.5);">
            <form action="empleado-insertar.php" method="POST" style="display: flex; flex-direction: column;">
                <label style="font-family: 'Mali', cursive; font-size: 18px; color: #55182f; margin-bottom: 5px;">Nombre:</label>
                <input type="text" name="nombre" required style="font-size: 18px; padding: 10px; margin-bottom: 15px; border: 1px solid #ce9651; border-radius: 5px;">

                <label style="font-family: 'Mali', cursive; font-size: 18px; color: #55182f; margin-bottom: 5px;">Teléfono:</label>
                <input type="text" name="telefono" required style="font-size: 18px; padding: 10px; margin-bottom: 15px; border: 1px solid #ce9651; border-radius: 5px;">

                <label style="font-family: 'Mali', cursive; font-size: 18px; color: #55182f; margin-bottom: 5px;">Correo Electrónico:</label>
                <input type="email" name="correo" required style="font-size: 18px; padding: 10px; margin-bottom: 15px; border: 1px solid #ce9651; border-radius: 5px;">

                <label style="font-family: 'Mali', cursive; font-size: 18px; color: #55182f; margin-bottom: 5px;">Cargo:</label>
                <input type="text" name="cargo" required style="font-size: 18px; padding: 10px; margin-bottom: 20px; border: 1px solid #ce9651; border-radius: 5px;">

                <button type="submit" style="background-color: #f1738f; color: white; padding: 12px; border: none; border-radius: 5px; font-size: 18px; cursor: pointer;">Guardar Empleado</button>
            </form>
            <div style="text-align: center; margin-top: 20px;">
                <a href="crudempleados.php" style="background-color: #ce9651; color: white; padding: 8px 15px; border-radius: 5px; text-decoration: none;">Volver al Listado</a>
            </div>
        </div>
    </section>
</body>
</html>