<?php

$Codigo_Operacion=$_POST['Codigo_Operacion'];//IGUAL A codigo de boleta
$Numero_Tarjeta=$_POST['Numero_Tarjeta'];
$Codigo_Seguridad=$_POST['Codigo_Seguridad'];
$Importe_total=$_POST['Importe_total'];

$Codi_Operacion=false;
$Nume_Tarjeta=false;
$Codi_Seguridad=false;
$Impo_Total=false;
//LOGICA
//primera condicion  para el codigo operacion 
if($Codigo_Operacion==11)//esta en base a la base de datos 
{
    $Codi_Operacion=true;
}   
else
{
   print "Ingrese su número de tarjeta correctamente son 11 digitos"
}
//segunda condicion para el numero de tarjeta 

if($Numero_Tarjeta>=16 && $Numero_Tarjeta<=19)
{
    $Nume_Tarjeta=true;
}
else
{
    print "El número de tarjeta debe  tener de 16 a 19 digitos "
}
//Codigo seguridad
if($Codigo_Seguridad==3)
{ 
     $Codi_Seguridad=true;
}
else
{
   print "Escriba bien el codigo de seguridad es de tres digitos"
}
//verificando importe 
if(!is_numeric($Importe_total))
{
   print "El importe  no ha sido ingresado como un numero"
}
elseif($Importe_total<1)
{
    print "Ha ingresado un numero negativo "
}   
else 
{
   $Impo_Total=true;
}

if($Codi_Operacion && $Nume_Tarjeta && $Codi_Seguridad && $Impo_Total)
{
    print"<p> Su codigo de operacion es <strong>$Codigo_Operacion_</strong></p>";
    print "\n";
    print"<p> Su númerode tarjeta  <strong>$Numero_Tarjeta</strong></p>";
    print "\n";
    print"<p> Su codigo de Seguridad es <strong>$Codigo_Seguridad</strong></p>";
    print "\n";
    print"<p> Su importe<strong>$Importe_total</strong></p>";
}
 

