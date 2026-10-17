<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: iniciosesion.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel de Administración - Deli Fresa</title>
    <link rel="stylesheet" href="style-crud.css">
    <link rel="stylesheet" href="css/styleproductos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <header>
        <div class="logo">
            <img class="imagen" src="img/logoSunshine.png" alt="Logo">
        </div>
        <div class="contenedor_header">
            <div class="nav">
                <nav>
                    <a href="crudproductos.php">PRODUCTOS</a>
                    <a href="crudcategorias.php">CATEGORÍAS</a>
                    <a href="crudclientes.php">CLIENTES</a>
                    <a href="crudempleados.php">EMPLEADOS</a>
                    <a href="crudventas.php">VENTAS</a>
                    <a href="logout.php" style="background-color: #f1738f;"><i class="fas fa-right-from-bracket"></i> SALIR</a>
                </nav>
            </div>
        </div>
    </header>

    <section class="products">
        <h1 class="tituloInicial">Panel de Gestión - Deli Fresa</h1>
        
        <div class="infoB" style="width: 80%; margin: 30px auto; background-color: #fffbe0; padding: 30px; border-radius: 20px; text-align: center; box-shadow: 0 0 7px rgba(0,0,0,0.3);">
            <h2>Bienvenido(a), <strong><?php echo htmlspecialchars($_SESSION['usuario']); ?></strong> 🍓</h2>
            <p style="font-family: 'Handlee', cursive; font-size: 20px; color: #55182f; margin-top: 15px;">
                Has iniciado sesión correctamente en el sistema de administración. Utiliza las opciones del menú superior para navegar y gestionar los registros de la base de datos.
            </p>
        </div>

        <div style="text-align: center; margin-top: 40px; display: flex; justify-content: center; gap: 20px; flex-wrap: wrap;">
            <a href="crudproductos.php" style="padding: 15px 25px; font-size: 18px;">Gestionar Productos</a>
            <a href="crudventas.php" style="padding: 15px 25px; font-size: 18px; background-color: #f1738f;">Gestionar Ventas</a>
            <a href="crudclientes.php" style="padding: 15px 25px; font-size: 18px; background-color: #ce9651;">Gestionar Clientes</a>
        </div>
    </section>

    <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <a class="afooter" href="https://wa.me/573007276032"><img src="img/wasa.png" alt="" width="45px" height="45px"></a>
                <h4>WHATSAPP</h4>
                <p>317 303 05 86</p>
            </div>
            <div class="content-foo">
                <a class="afooter" href="https://instagram.com/sunshine_detalles_"><img src="img/insta3.jfif" alt="" width="45px" height="45px"></a>
                <h4>INSTAGRAM</h4>
                <p>sunshine_detalles_</p>
            </div>
            <div class="content-foo">
                <a class="afooter" href="https://www.facebook.com"><img src="img/face.png" alt="" width="45px" height="45px"></a>
                <h4>FACEBOOK</h4>
                <p>SunshineDetalles</p>
            </div>
        </div>
        <h2 class="titulo-final">&copy; Sunshine Design </h2>
    </footer>
</body>
</html>