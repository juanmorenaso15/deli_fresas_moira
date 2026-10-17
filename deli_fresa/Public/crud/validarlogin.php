<?php
session_start();
include("conexion.php");
$con = conexion();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = mysqli_real_escape_string($con, $_POST['usuario']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM login WHERE usuario = '$usuario'";
    $resultado = mysqli_query($con, $sql);

    if ($resultado && mysqli_num_rows($resultado) == 1) {
        $row = mysqli_fetch_assoc($resultado);
        
        if ($password == $row['contraseña'] || password_verify($password, $row['contraseña'])) {
            $_SESSION['usuario'] = $row['usuario'];
            $_SESSION['id_login'] = $row['id_login'];
            
            header("Location: crudlogin.php");
            exit();
        } else {
            echo "<script>alert('Contraseña incorrecta'); window.location='iniciosesion.php';</script>";
        }
    } else {
        echo "<script>alert('El usuario no existe'); window.location='iniciosesion.php';</script>";
    }
}
?>