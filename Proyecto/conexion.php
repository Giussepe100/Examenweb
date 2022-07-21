<?php
    $server="localhost";
    $user="root";
    $password="";
    $db="bibliotecafinal";
    $conexion=mysqli_connect($server,$user,$password,$db);

    if(!$conexion){
        die("Conexion fallida");
    }
?>