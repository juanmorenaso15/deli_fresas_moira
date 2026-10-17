<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Deli Fresa</title>
    <link rel="shortcut icon" href="img/favicon.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="style-crud.css">
    <link rel="stylesheet" href="css/stylelogin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cutive+Mono&family=DM+Serif+Display&family=Dancing+Script&family=Great+Vibes&family=Handlee&family=Mali:wght@200&display=swap" rel="stylesheet">
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
                    <a href="../../Views/index.html"><i class="fas fa-house"></i> INICIO</a>
                    <a href="../../Views/servicios.html"><i class="fas fa-gift"></i> SERVICIOS</a>
                    <a href="../../Views/productos.html"><i class="fas fa-basket-shopping"></i> PRODUCTOS</a>
                    <a href="../../Views/nosotros.html"><i class="fas fa-users"></i> NOSOTROS</a>
                    <a href="../../Views/contacto.html"><i class="fas fa-envelope"></i> CONTACTO</a>
                    <a href="iniciosesion.php"><i class="fas fa-user"></i> LOGIN</a>
                </nav>
            </div>
        </div>
    </header>

    <section class="contenedor_login">
        <h1 class="tituloInicial">Iniciar Sesión</h1>
        <div class="titulo2">¡Bienvenido de nuevo a Deli Fresa!</div>

        <div class="caja-login">
            <i class="fas fa-circle-user icono-usuario"></i>
            <form class="formulario" action="validarlogin.php" method="POST">
                <label for="usuario"><i class="fas fa-user"></i> Usuario:</label>
                <input type="text" id="usuario" name="usuario" placeholder="Escribe tu usuario" required>

                <label for="password"><i class="fas fa-lock"></i> Contraseña:</label>
                <input type="password" id="password" name="password" placeholder="Escribe tu contraseña" required>

                <button type="submit" class="boton"><i class="fas fa-right-to-bracket"></i> Ingresar</button>
            </form>
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