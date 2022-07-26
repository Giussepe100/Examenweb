<?php
 //conecto mi form /name/ con el server atravez de name 
 $nombre=$_POST['nombre'];//nombre del cliente 
 $destinatario=$_POST['email'];//email del cliente 
 $asunto="Libros comprados en Edu libro";

 $header="From: soccergiussepe@gmail.com ";


 $mensaje="Hola".$nombre."Tu proceso de compra se ha realizado con éxito";

 $mensaje_completo=$mensaje."\nAtentamente Administrador de Edulibro";


 if(mail($destinatario,$asunto,$mensaje_completo,$header))
 {
    echo "<script>alert('correo enviado exitosamenre')</script>";
    echo "<script> setTimeout (\"location.href='home-user.php'\",1000)</script>";
 }
 else
 {
    echo "<script>alert('No se envio en el correo')</script>";
    echo "<script> setTimeout (\"location.href='home-user.php'\",1000)</script>";
 }

?>

