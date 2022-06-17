<?php
  //este es el correo al cual se le enviara el correo
  $destinatario="soccergiussepe@gmail.com";
  $asunto="Libros comprados en Edulibro";
  $mensaje="Bienvenido a un nuevo mundo lleno de aprendizaje y experiencias ,Aqui tienes tu libro ";
  $header="Enviado desde la página de Edulibro";
  //funcion mail
  mail($destinatario,$asunto,$mensaje,$header);
  echo "<script>alert('correo enviado exitosamente')</scrip>";
  echo "<script>setTimeout(\"location.href='Pago.html'\",1000)</scrip>";

 //no esta enviando nada poruqe esta buscando que datos extraer pero no esta extraendo


?>
