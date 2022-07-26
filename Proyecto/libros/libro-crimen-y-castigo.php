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
        <img src="../imagenes/lib3.jpg" class="imagen-portada"></img>
        <div class="show-text">
            <p class="contenido-titulo">CRIMEN Y CASTIGO</p>
            <p class="contenido-text">
                <b>FIODOR DOSTOIEVSKI</b><br>
                Narrativa extranjera del siglo XIX al siglo XXI em bolsillo<br>
                <b>Resumen: </b><br>
                Considerada por la crítica como la primera obra maestra de Dostoievski, Crimen y 
                castigo es un profundo análisis psicológico de su protagonista, el joven estudiante 
                Raskólnikov, cuya firme creencia en que los fines humanitarios justifican la maldad 
                le conduce al asesinato de una usurera. Pero, desde que comete el crimen, la culpabilidad 
                será una pesadilla constante con la que el estudiante será incapaz de convivir. <br>
                La presente edición de una de las obras más importantes de la literatura universal 
                cuenta con la celebre traducción de Rafael Cansinos Assens, revisada y modernizada para 
                la ocasión. Asimismo, viene acompañada de una introducción de David McDuff, traductor y 
                crítico literario especialista en la obra del autor.
                <br><br>
                <b>Editorial:</b> PENGUIN CLASICOS<br>
                <b>Categoria:</b> Literatura, Narrativa en bolsillo<br>
                <b>Número de páginas:</b> 752
            </p>
            <a href="../Pago.html" class="btn"><img src="../imagenes/carrito.png" width="auto" 
                height="20px" align="center">&nbsp;Comprar S/.69</a>
        </div>
    </div>
</body>
</html>
