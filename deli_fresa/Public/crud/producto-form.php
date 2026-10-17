<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Producto - Deli Fresa</title>
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
        <h1 class="tituloInicial">Agregar Nuevo Producto</h1>
        
        <div style="width: 500px; margin: 30px auto; background: #fffbe0; padding: 30px; border-radius: 10px; box-shadow: 0 0 7px rgba(0,0,0,0.5);">
            <form action="producto-insertar.php" method="POST" style="display: flex; flex-direction: column;">
                <label style="font-family: 'Mali', cursive; font-size: 18px; color: #55182f; margin-bottom: 5px;">Nombre del Producto:</label>
                <input type="text" name="nombre_producto" required style="font-size: 18px; padding: 10px; margin-bottom: 15px; border: 1px solid #ce9651; border-radius: 5px;">

                <label style="font-family: 'Mali', cursive; font-size: 18px; color: #55182f; margin-bottom: 5px;">Descripción:</label>
                <textarea name="descripcion" rows="3" required style="font-size: 18px; padding: 10px; margin-bottom: 15px; border: 1px solid #ce9651; border-radius: 5px;"></textarea>

                <label style="font-family: 'Mali', cursive; font-size: 18px; color: #55182f; margin-bottom: 5px;">Precio:</label>
                <input type="number" step="0.01" name="precio" required style="font-size: 18px; padding: 10px; margin-bottom: 15px; border: 1px solid #ce9651; border-radius: 5px;">

                <label style="font-family: 'Mali', cursive; font-size: 18px; color: #55182f; margin-bottom: 5px;">Stock:</label>
                <input type="number" name="stock" required style="font-size: 18px; padding: 10px; margin-bottom: 15px; border: 1px solid #ce9651; border-radius: 5px;">

                <label style="font-family: 'Mali', cursive; font-size: 18px; color: #55182f; margin-bottom: 5px;">ID Categoría:</label>
                <input type="number" name="id_categoria" required style="font-size: 18px; padding: 10px; margin-bottom: 20px; border: 1px solid #ce9651; border-radius: 5px;">

                <button type="submit" style="background-color: #f1738f; color: white; padding: 12px; border: none; border-radius: 5px; font-size: 18px; cursor: pointer;">Guardar Producto</button>
            </form>
            <div style="text-align: center; margin-top: 20px;">
                <a href="crudproductos.php" style="background-color: #ce9651; color: white; padding: 8px 15px; border-radius: 5px; text-decoration: none;">Volver al Listado</a>
            </div>
        </div>
    </section>
</body>
</html>