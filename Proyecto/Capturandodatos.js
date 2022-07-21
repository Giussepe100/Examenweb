
//puedo acceder al correo de este usuario mediante la base de datos 
// y enviarlo ahi  todo 




//lo envio al correos.php  y envio el gmail ver 
  
function ingresecorreo()
{


   var correo;
   correo=prompt("Ingrese el correo al cual enviaremos los pdf","");
   $.post('Carpetasphp/verificandopago.php',{correo},function(data){
      if(data!=null){
         alert("los datos se enviaron correctamente");
      }
      else
      {
         alert("los datos no se enviaron ");
      }
   })
}