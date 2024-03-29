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
        <img src="../imagenes/lib2.jpg" class="imagen-portada"></img>
        <div class="show-text">
            <p class="contenido-titulo">La metamorfosis</p>
            <p class="contenido-text">
                <b>Franz Kafka</b><br>
                <br>
                <b>Resumen: </b><br>
                En este clásico de la literatura universal, Gregorio Samsa, viajante de comercio, 
                se despierta un día convertido en un monstruoso insecto. A partir de entonces debe 
                encontrar la forma de adaptarse a su vida en familia y a un trabajo que pesa sobre 
                sus hombros. Formato en tapa dura incluye prólogo de Gabriel Ruiz Ortega e ilustraciones 
                de Yaguas.
                <br><br>
                <b>Editorial:</b> Estruendomudo<br>
                <b>Categoria:</b> Soledad, extrañeza, fantasía<br>
                <b>Número de páginas:</b> 96
            </p>
            <a href="../Pago.html" class="btn"><img src="../imagenes/carrito.png" width="auto" height="20px" align="center">&nbsp;Comprar S/.49.50</a>
        </div>
    </div>
</body>
</html>
