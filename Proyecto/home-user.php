<?php
    session_start();
?>

<!DOCTYPE html>
<link rel="stylesheet" href="css/index.css">
<html lang="es" style="background: url(imagenes/Fondo.jpg) fixed;background-size: cover;">
<head>
    <h1 align="center" id="titulo">EduLibro
        <a href="Carpetasphp/cerrar_sesion.php" style="text-decoration: none; float: right; color: black; font-size: 17px; margin-right: 30px; 
        text-shadow: none; margin-top: 35px;" class="btn">Salir</a>
        <a href="login.html" style="text-decoration: none; float: right; color: black; font-size: 17px; margin-right: 30px; 
        text-shadow: none; margin-top: 35px;" class="btn"><img src="imagenes/carrito.png" height="20px" width="20px" align="center">
        <?php echo $_SESSION['usuario']; ?></a>
    </h1>
</head>
<body>
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
    </div>
    <br /><br />
    <div class="contenido">
        <div class="libros">
            <div class="portada">
                <a href="ojala.html" class="imagen-portada">
                    <img src="imagenes/lib1.jpg" class="imagen">
                </a>
            </div>
            <div class="links-libro">
                <a href="ojala.html" class="link-titulo">OJALA</a><br>
                <a href="biografíaautor.html" class="link-autor">Defreds José. A. Gomez Iglesias</a><br>
                <a href="ojalaprevisualizacion.html" class="btn">Previsualizar</a><br>
                <a href="Pago.html" class="btn"><img src="imagenes/carrito.png" width="auto" height="20px" align="center">&nbsp;Agregar S/.15</a>
            </div>
        </div>
        <div class="libros">
            <div class="portada">
                <a href="ojala.html" class="imagen-portada">
                    <img src="imagenes/lib2.jpg" class="imagen">
                </a>
            </div>
            <div class="links-libro">
                <a href="ojala.html" class="link-titulo">LA METAMORFOSIS</a><br>
                <a href="biografíaautor.html" class="link-autor">Franz Kafka</a><br>
                <a href="ojalaprevisualizacion.html" class="btn">Previsualizar</a><br>
                <a href="Pago.html" class="btn"><img src="imagenes/carrito.png" width="auto" height="20px" align="center">&nbsp;Agregar S/.20</a>
            </div>
        </div>
        <div class="libros">
            <div class="portada">
                <a href="ojala.html" class="imagen-portada">
                    <img src="imagenes/lib3.jpg" class="imagen">
                </a>
            </div>
            <div class="links-libro">
                <a href="ojala.html" class="link-titulo">CRIMEN Y CASTIGO</a><br>
                <a href="biografíaautor.html" class="link-autor">Fiódor Dostoyevski</a><br>
                <a href="ojalaprevisualizacion.html" class="btn">Previsualizar</a><br>
                <a href="Pago.html" class="btn"><img src="imagenes/carrito.png" width="auto" height="20px" align="center">&nbsp;Agregar S/.20</a>
            </div>
        </div>
        <div class="libros">
            <div class="portada">
                <a href="ojala.html" class="imagen-portada">
                    <img src="imagenes/lib4.jpg" class="imagen">
                </a>
            </div>
            <div class="links-libro">
                <a href="ojala.html" class="link-titulo">LA CARRETERA</a><br>
                <a href="biografíaautor.html" class="link-autor">Cormac McCarthy</a><br>
                <a href="ojalaprevisualizacion.html" class="btn">Previsualizar</a><br>
                <a href="Pago.html" class="btn"><img src="imagenes/carrito.png" width="auto" height="20px" align="center">&nbsp;Agregar S/.20</a>
            </div>
        </div>
        <div class="libros">
            <div class="portada">
                <a href="ojala.html" class="imagen-portada">
                    <img src="imagenes/lib1.jpg" class="imagen">
                </a>
            </div>
            <div class="links-libro">
                <a href="ojala.html" class="link-titulo">OJALA</a><br>
                <a href="biografíaautor.html" class="link-autor">Defreds José. A. Gomez Iglesias</a><br>
                <a href="ojalaprevisualizacion.html" class="btn">Previsualizar</a><br>
                <a href="Pago.html" class="btn"><img src="imagenes/carrito.png" width="auto" height="20px" align="center">&nbsp;Agregar S/.15</a>
            </div>
        </div>


        <div class="libros">
            <div class="portada">
                <a href="ojala.html" class="imagen-portada">
                    <img src="imagenes/lib2.jpg" class="imagen">
                </a>
            </div>
            <div class="links-libro">
                <a href="ojala.html" class="link-titulo">CRIMEN Y CASTIGO</a><br>
                <a href="biografíaautor.html" class="link-autor">Fiódor Dostoyevski</a><br>
                <a href="ojalaprevisualizacion.html" class="btn">Previsualizar</a><br>
                <a href="Pago.html" class="btn"><img src="imagenes/carrito.png" width="auto" height="20px" align="center">&nbsp;Agregar S/.20</a>
            </div>
        </div>
        <div class="libros">
            <div class="portada">
                <a href="ojala.html" class="imagen-portada">
                    <img src="imagenes/lib3.jpg" class="imagen">
                </a>
            </div>
            <div class="links-libro">
                <a href="ojala.html" class="link-titulo">LA METAMORFOSIS</a><br>
                <a href="biografíaautor.html" class="link-autor">Franz Kafka</a><br>
                <a href="ojalaprevisualizacion.html" class="btn">Previsualizar</a><br>
                <a href="Pago.html" class="btn"><img src="imagenes/carrito.png" width="auto" height="20px" align="center">&nbsp;Agregar S/.20</a>
            </div>
        </div>
        <div class="libros">
            <div class="portada">
                <a href="ojala.html" class="imagen-portada">
                    <img src="imagenes/lib4.jpg" class="imagen">
                </a>
            </div>
            <div class="links-libro">
                <a href="ojala.html" class="link-titulo">LA CARRETERA</a><br>
                <a href="biografíaautor.html" class="link-autor">Cormac McCarthy</a><br>
                <a href="ojalaprevisualizacion.html" class="btn">Previsualizar</a><br>
                <a href="Pago.html" class="btn"><img src="imagenes/carrito.png" width="auto" height="20px" align="center">&nbsp;Agregar S/.20</a>
            </div>
        </div>

    </div>
</body>

</html>