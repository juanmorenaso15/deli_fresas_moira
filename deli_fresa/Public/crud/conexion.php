<?php
function conexion(){
    $dbhost="localhost";
    $dbuser="root";
    $dbpass="";
    $dbname="deli_fresa";

    $con = mysqli_connect($dbhost, $dbuser, $dbpass);
    mysqli_select_db($con, $dbname);

    if(mysqli_connect_errno()){
        echo "Error al conectarse a la BD " . $dbname;
    }

    return $con;
}
?>