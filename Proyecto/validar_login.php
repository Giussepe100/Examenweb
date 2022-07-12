<?php
include("login.html");
include('conexion.php');
if(isset($_POST['btn_login'])){
    if(!empty($_POST['usuario']) && !empty($_POST['contrasena'])){
        
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];
        
        $consulta = "SELECT * FROM usuario where nombre_usuario = '$usuario' and contrasena = '$contrasena'";
        $resultado = mysqli_query($conexion,$consulta);
        $filas = mysqli_num_rows($resultado);
        
        if($filas){
            session_start();
            $_SESSION['usuario']=$usuario;
            header("location:home-user.php");
        }
        else{
            ?>
            <h1 style="text-align: center;font-family: cursive; color: #293496;margin-left: 50;">Esta cuenta no existe</h1>
            <?php
        }
        mysqli_free_result($resultado);
        mysqli_close($conexion);
    }
    else{
        ?>
        <h1 style="text-align: center;font-family: cursive; color: #293496;margin-left: 50;">Debe llenar todos los campos</h1>
        <?php
    }
}


?>