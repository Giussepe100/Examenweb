<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es" style="background: url(../imagenes/Fondo.jpg) fixed;background-size: cover;">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/previsualizar.css">
</head>
<body>
    <h1 align="center" id="titulo">EduLibro
        <?php
        if(!$_SESSION){
            ?>
            <a href="login.html" style="text-decoration: none; float: right; color: black; font-size: 20px; margin-right: 30px; 
        text-shadow: none; margin-top: 35px;">
            <img src="imagenes/login_icon.png" height="30px" width="30px" align="center">&nbsp;Login</a>
            <?php
        }
        else{
            ?>
            <a href="Carpetasphp/cerrar_sesion.php" style="text-decoration: none; float: right; color: black; font-size: 17px; margin-right: 30px; 
        text-shadow: none; margin-top: 35px;" class="btn">Salir</a>
        <a href="login.html" style="text-decoration: none; float: right; color: black; font-size: 17px; margin-right: 30px; 
        text-shadow: none; margin-top: 35px;" class="btn"><img src="../imagenes/carrito.png" height="20px" width="20px" align="center">
        <?php echo $_SESSION['usuario']; ?></a>
            <?php
        }
        ?>
    </h1>
    <div class="buscar">
        <input type="text" placeholder="Buscar libro" style="float: left;">
    </div>
    <div class="tipo_busqueda">
        <form>
            <select name="busqueda" id="combobox_busqueda">
                <option value="busqueda_autor">Buscar por nombre de autor</option>
                <option value="busqueda_titulo">Buscar por titulo de libro</option>
                <option value="busqueda_genero">Buscar por genero literario</option>
            </select>
        </form>
    </div><br>
    <div class="contenido">
        <img src="../imagenes/lib1.jpg" class="imagen-portada"></img>
        <div class="show-text">
            <p class="contenido-titulo">Ojala</p>
            <p class="contenido-text">
                <b>DEFREDS JOSE. A. GOMEZ IGLESIAS</b><br>
                Literatura Poesia  Poesia contemporanea espa??ola del XIX al XXI<br>
                <b>Resumen: </b><br>
                Esta novedosa propuesta de Defreds sorprender?? con un ejemplar art??stico en el que destacan las 
                ilustraciones de Lady Desidia y unas hermosas caligraf??as que dan forma a su pensamiento. El libro 
                est?? compuesto de distintos apartados, cada uno protagonizado por un planeta, como un personaje con 
                sus cualidades y defectos, con marcados rasgos de personalidad, sus filias y fobias. Y a partir de 
                ellos  nos narra emociones y experiencias vitales que nos interpelan: una representaci??n del mundo 
                ca??tico que nos toca en suerte y en el que tanta falta hacen los afectos. Un cuento del siglo XXI 
                en el que se habla de personalidades diferentes, como una ???panda planetaria??? que se enfrenta a cada 
                d??a; y como siempre de ternura, de amistad, de pasi??n; de la infancia, la paternidad, la alegr??a y 
                la tristeza, de la esperanza en un mundo mejor, con el convencimiento de que en el amor radica el 
                verdadero sentido de las cosas. Un cuento universal e inspirador para los lectores de hoy y en especial 
                para los incondicionales de Defreds que sabr??n apreciar su delicadeza y sentimiento. Calar?? en el coraz??n de todos.
                <br><br>
                <b>Editorial:</b> Espasa<br>
                <b>Categoria:</b> Poes??a | Poes??a urbana<br>
                <b>N??mero de p??ginas:</b> 168
            </p>
            <a href="../Pago.html" class="btn"><img src="../imagenes/carrito.png" width="auto" height="20px" align="center">&nbsp;Comprar S/.61</a>
        </div>
    </div>
</body>
</html>
