<?php
  //este es el correo al cual se le enviara el correo
 if(isset($POST['submit']))
 {
    #preparo datos pasados para el form 
    $FormData=array();
    
    #limpio espacios en blanco  y caracteres de escape 
    foreach($_POST as $Key=>$value)
    {
      $FormData[$Key]=stripcslashes(trim($value));

    }

    //Valido el Form 
    #codigos de error 
    #0 - sin error 
    #1 -datos requeridos 
    #3- mail sintaxis incorrecta

    $error_frm=0;

    #TEST 1datos requirido
    if(empty($FormData['nombre'])  ||   
      empty($FormData['email'])) #nombre  y email
    {
      $error_frm=1;
    }

    if(!$error_frm)
    {
      #enviando datos mediante cuenta gmail 
      #cargo la clase phpmailer
      include_once('phpMailer_v2.3/class.phpmailer.php');
      #creo una nueva instancia
      $mail=new PHPMailer();
      #servicio gmail 
      #le digo que voy a usar SMTP(el modo de envio)
      $mail->IsSMTP();
      #GMAIL usa SSL/TLS como protocolo de comunicacion/autoentificacion 
      $mail->HOST='ssl://smtp.gmail.com';
      #el puerto de comunicacion del servidor SMTP de gmail
      $mail->Port=465;
      #activo la autoentificacion SMTP
      $mail->SMTPAuth=true;
      #mi nombre de usuario en gmail
      $mail->Username='giussepeluchar54@gmail.com';
      #mi contraseña en gmail es 
      $mail->Password='********';
      #propiedades del mensaje
      #codificacion de caracteres 
      $mail->CharSet="UTF-8";
      #MAIL Y NOMBRE DEL remitente 
      $mail->From=$FormData['email'];
      $mail->FromName=$FormData['nombre'];
      #mail del destinatario
      $mail->AddAddress('usuario@gmail.com');
      #puedo añadir otro destinatario
      $mail->AddAddress('usuario@uoc.edu');
      #el tema del mensaje
      $mail->Subject="Formulario del registro"
      #mail en formato HTML
      $mail->IsHTML(true);
      #caracteres por linea
      $mail->WordWrap=50;
      #cuerpo del mensaje

      $cuerpo="
      FORMULARIO DEL REGISTRO \n
      Fecha del registro :".date(d."-".m."-".Y)."\n
      -------------------------------------------\n
      Nombre:".$FormData['nombre']."\n
      email:".$FormData['ciudad']."\n
      -------------------------------------------\n
      ";

      #cargo el contenido del mensaje con los saltos de linea convertidos en <br/>
      $mail->Body=nl2br(htmlentities($cuerpo,ENT_COMPAT));
      #tambien cargo el contenido del mensaje en formato texto plano 
      $mail->AltBody=$cuerpo;
      //envio mensaje 
      #send email 
      if(!$mail->Send())
      {
        echo "El mensaje no puede ser enviado.<p>";
        echo "phpMailer Error:".$mail->Errorinfo;
        exit;
      }

      //confirmacion de envio  y recepcion de datos 
      include once('feedback.html'); //aqui llamo a la clase feedback.html 
      exit;
    }
    else
    {
      #devuelvo form con memoria de datos  y el aviso de error de validacion 
      include once('foremail.html');

    }

 }
 else
 {
   include once('foremail.html'); 
 }



?>
