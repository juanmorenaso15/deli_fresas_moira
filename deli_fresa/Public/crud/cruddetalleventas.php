<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de Ventas - Deli Fresa</title>
    <link rel="shortcut icon" href="img/favicon.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="css/styleproductos.css">
    <link rel="stylesheet" href="style-crud.css">
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
                    <a href="../../Views/index.html">INICIO</a>
                    <a href="../../Views/servicios.html"><i class="fas fa-gift"></i> SERVICIOS</a>
                    <a href="../../Views/productos.html"><i class="fas fa-basket-shopping"></i> PRODUCTOS</a>
                    <a href="../../Views/nosotros.html"><i class="fas fa-users"></i> NOSOTROS</a>
                    <a href="../../Views/contacto.html"><i class="fas fa-envelope"></i> CONTACTO</a>
                    <a href="iniciosesion.php"><i class="fas fa-user"></i> LOGIN</a>
                </nav>
            </div>
        </div>
    </header>

    <section class="products" id="products">

        <h1 class="tituloInicial">Crud Detalle Ventas</h1>

        <div class="cajaformulario">
            <div class="cajaformu1">
                <a href="detalleventa-form.php">Agregar Detalle Venta</a>
            </div>

            <div class="cajaformu2">
                <form action="detalleventa-consultar.php" method="POST">
                    <input type="number" name="id_detalle" placeholder="Id detalle" required>
                    <button type="submit" value="consultar">Consultar</button>
                    <button type="reset" value="limpiar">Limpiar</button>
                </form>
            </div>
        </div>

        <table>
            <thead>
                <?php
                include("conexion.php");
                $con = conexion();
                $sql = "SELECT dv.id_detalle, dv.id_venta, p.nombre_producto, dv.cantidad, dv.subtotal 
                        FROM detalle_ventas dv 
                        LEFT JOIN productos p ON dv.id_producto = p.id_producto";
                $resultado = mysqli_query($con, $sql);
                ?>
                <tr>
                    <th>ID Detalle</th>
                    <th>ID Venta</th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Subtotal ($)</th>
                    <th colspan="2">Acciones BD</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($row = mysqli_fetch_array($resultado)){
                ?>
                <tr>
                    <td><?php echo $row['id_detalle']; ?></td>
                    <td><?php echo $row['id_venta']; ?></td>
                    <td><?php echo $row['nombre_producto']; ?></td>
                    <td><?php echo $row['cantidad']; ?></td>
                    <td><?php echo $row['subtotal']; ?></td>
                    <td><a href="detalleventa-actualizar.php?id=<?php echo $row['id_detalle']; ?>">Editar</a></td>
                    <td><a href="detalleventa-eliminar.php?id=<?php echo $row['id_detalle']; ?>"
                            onclick="return confirm('¿Estás seguro de eliminar este detalle de venta?');">Eliminar</a></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
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