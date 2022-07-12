<?php
include("registrarse.html");
include("conexion.php");
$message='';
if(isset($_POST['btn_registro'])){
    if(!empty($_POST['usuario']) && !empty($_POST['nombres']) && !empty($_POST['apellidos']) && 
    !empty($_POST['email']) && !empty($_POST['password'])){
        $usuario = $_POST['usuario'];
        $nombre=$_POST['nombres'];
        $apellido=$_POST['apellidos'];
        $email=$_POST['email'];
        $contrasena = $_POST['password'];
        $consulta = "INSERT INTO usuario VALUES ('$usuario','$contrasena','usuario','$nombre','$apellido','$email','Peru')";
        $resultado=mysqli_query($conexion,$consulta);
        if($resultado){
            header("location:login.html");
        }
        else{
            $message='Ha ocurrido un error';
            ?>
            <h1 style="text-align: center;font-family: cursive; color: #293496;margin-left: 50;">Ha ocurrido un error</h1>
            <?php
        }
    }
    else{
        $message='Debe llenar todos los campos';
        ?>
        <h1 style="text-align: center;font-family: cursive; color: #293496;margin-left: 50;">Debe llenar todos los campos</h1>
        <?php
    }
}

?>