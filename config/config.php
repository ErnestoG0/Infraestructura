<?php

function conectar(){
    $user="root";
    $pass="";
    $server="localhost";
    $db="inventario";
    $con=mysqli_connect($server,$user,$pass) or die("Error Al Conectar".mysqli_error());
    mysqli_select_db($con,$db);

    return $con;
}
?>