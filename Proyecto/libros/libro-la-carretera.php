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
        <img src="../imagenes/lib4.jpg" class="imagen-portada"></img>
        <div class="show-text">
            <p class="contenido-titulo">La Carretera</p>
            <p class="contenido-text">
                <b>Cormac Mccarthy</b><br>
                Narrativa extranjera del siglo XIX al siglo XXI em bolsillo<br>
                <b>Resumen: </b><br>
                Una demoledora fábula sobre el futuro del ser humano, ganadora del Premio Pulitzer 2007. 
                La carretera transcurre en la inmensidad del territorio norteamericano, un paisaje literalmente 
                quemado por lo que parece haber sido un reciente holocausto nuclear. Un padre trata de salvar 
                a su hijo emprendiendo un viaje con él. Rodeados de un paisaje baldío, amenazados por bandas 
                de caníbales, empujando un carrito de la compra donde guardan sus escasas pertenencias, recorren 
                los lugares donde el padre pasó una infancia recordada a veces en forma de breves bocetos 
                del paraíso perdido, y avanzan hacia el sur, hacia el mar, huyendo de un frío «capaz de romper 
                las rocas». «Un libro valiente, honesto y necesario como pocos. Cormac McCarthy ha vuelto a 
                dar lo mejor de sí mismo.» José María Guelbenzu, Babelia «Una de las mejores novelas de McCarthy, 
                probablemente su obra más conmovedora y personal.» Los Angeles Times Book Review
                <br><br>
                <b>Editorial:</b> Debolsillo<br>
                <b>Categoria:</b> Ficción: General Y Literaria<br>
                <b>Número de páginas:</b> 216
            </p>
            <a href="../Pago.html" class="btn"><img src="../imagenes/carrito.png" width="auto" 
                height="20px" align="center">&nbsp;Comprar S/.35.10</a>
        </div>
    </div>
</body>
</html>
