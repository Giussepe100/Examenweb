<?php
    $server="localhost";
    $user="root";
    $password="";
    $db="biblioteca";
    $conexion=mysqli_connect($server,$user,$password,$db);

    if(!$conexion){
        die("Conexion fallida");
    }
?>