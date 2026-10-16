<?php
function conexion(){
    //se definen las variables de conexion de la BD
    $dbhost="localhost";
    $dbuser="root";
    $dbpass="";
    $dbname="deli_fresa";
    


    //funcion de conexion a la base de datos
    $con=mysqli_connect($dbhost, $dbuser, $dbpass);

    //funcion seleccion base de datos
    mysqli_select_db($con, $dbname);

    if(mysqli_connect_errno()){
        echo"Error al conectarse a la BD" .$dbname;
    }else{
        echo"Conectado ala BD" .$dbname;
    }

    //retornar o devolver el resultado de la conexion
    return $con;
    }

    ?>
    