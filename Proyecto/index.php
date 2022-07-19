<?php
    session_start();
?>

<!DOCTYPE html>
<link rel="stylesheet" href="css/index.css">
<html lang="es" style="background: url(imagenes/Fondo.jpg) fixed;background-size: cover;">
<head>
<meta charset="UTF-8">
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
        text-shadow: none; margin-top: 35px;" class="btn"><img src="imagenes/carrito.png" height="20px" width="20px" align="center">
        <?php echo $_SESSION['usuario']; ?></a>
            <?php
        }
        ?>
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
                <a href="libros/libro-ojala.html" class="imagen-portada">
                    <img src="imagenes/lib1.jpg" class="imagen">
                </a>
            </div>
            <div class="links-libro">
                <a href="libros/libro-ojala.html" class="link-titulo">OJALA</a><br>
                <a href="biografíaautor.html" class="link-autor">Defreds José. A. Gomez Iglesias</a><br>
                <a href="libros/libro-ojala.html" class="btn">Previsualizar</a><br>
                <a href="Pago.html" class="btn"><img src="imagenes/carrito.png" width="auto" height="20px" align="center">&nbsp;Agregar S/.61</a>
            </div>
        </div>
        <div class="libros">
            <div class="portada">
                <a href="libros/libro-metamorfosis.html" class="imagen-portada">
                    <img src="imagenes/lib2.jpg" class="imagen">
                </a>
            </div>
            <div class="links-libro">
                <a href="libros/libro-metamorfosis.html" class="link-titulo">LA METAMORFOSIS</a><br>
                <a href="biografíaautor.html" class="link-autor">Franz Kafka</a><br>
                <a href="libros/libro-metamorfosis.html" class="btn">Previsualizar</a><br>
                <a href="Pago.html" class="btn"><img src="imagenes/carrito.png" width="auto" height="20px" align="center">&nbsp;Agregar S/.49.50</a>
            </div>
        </div>
        <div class="libros">
            <div class="portada">
                <a href="libros/libro-crimen-y-castigo.html" class="imagen-portada">
                    <img src="imagenes/lib3.jpg" class="imagen">
                </a>
            </div>
            <div class="links-libro">
                <a href="libros/libro-crimen-y-castigo.html" class="link-titulo">CRIMEN Y CASTIGO</a><br>
                <a href="biografíaautor.html" class="link-autor">Fiódor Dostoyevski</a><br>
                <a href="libros/libro-crimen-y-castigo.html" class="btn">Previsualizar</a><br>
                <a href="Pago.html" class="btn"><img src="imagenes/carrito.png" width="auto" height="20px" align="center">&nbsp;Agregar S/.69</a>
            </div>
        </div>
        <div class="libros">
            <div class="portada">
                <a href="libros/libro-la-carretera.html" class="imagen-portada">
                    <img src="imagenes/lib4.jpg" class="imagen">
                </a>
            </div>
            <div class="links-libro">
                <a href="libros/libro-la-carretera.html" class="link-titulo">LA CARRETERA</a><br>
                <a href="biografíaautor.html" class="link-autor">Cormac McCarthy</a><br>
                <a href="libros/libro-la-carretera.html" class="btn">Previsualizar</a><br>
                <a href="Pago.html" class="btn"><img src="imagenes/carrito.png" width="auto" height="20px" align="center">&nbsp;Agregar S/.35.10</a>
            </div>
        </div>

        <div class="libros">
            <div class="portada">
                <a href="libros/libro-ojala.html" class="imagen-portada">
                    <img src="imagenes/lib1.jpg" class="imagen">
                </a>
            </div>
            <div class="links-libro">
                <a href="libros/libro-ojala.html" class="link-titulo">OJALA</a><br>
                <a href="biografíaautor.html" class="link-autor">Defreds José. A. Gomez Iglesias</a><br>
                <a href="libros/libro-ojala.html" class="btn">Previsualizar</a><br>
                <a href="Pago.html" class="btn"><img src="imagenes/carrito.png" width="auto" height="20px" align="center">&nbsp;Agregar S/.61</a>
            </div>
        </div>
        <div class="libros">
            <div class="portada">
                <a href="libros/libro-metamorfosis.html" class="imagen-portada">
                    <img src="imagenes/lib2.jpg" class="imagen">
                </a>
            </div>
            <div class="links-libro">
                <a href="libros/libro-metamorfosis.html" class="link-titulo">LA METAMORFOSIS</a><br>
                <a href="biografíaautor.html" class="link-autor">Franz Kafka</a><br>
                <a href="libros/libro-metamorfosis.html" class="btn">Previsualizar</a><br>
                <a href="Pago.html" class="btn"><img src="imagenes/carrito.png" width="auto" height="20px" align="center">&nbsp;Agregar S/.49.50</a>
            </div>
        </div>
        <div class="libros">
            <div class="portada">
                <a href="libros/libro-crimen-y-castigo.html" class="imagen-portada">
                    <img src="imagenes/lib3.jpg" class="imagen">
                </a>
            </div>
            <div class="links-libro">
                <a href="libros/libro-crimen-y-castigo.html" class="link-titulo">CRIMEN Y CASTIGO</a><br>
                <a href="biografíaautor.html" class="link-autor">Fiódor Dostoyevski</a><br>
                <a href="libros/libro-crimen-y-castigo.html" class="btn">Previsualizar</a><br>
                <a href="Pago.html" class="btn"><img src="imagenes/carrito.png" width="auto" height="20px" align="center">&nbsp;Agregar S/.69</a>
            </div>
        </div>
        <div class="libros">
            <div class="portada">
                <a href="libros/libro-la-carretera.html" class="imagen-portada">
                    <img src="imagenes/lib4.jpg" class="imagen">
                </a>
            </div>
            <div class="links-libro">
                <a href="libros/libro-la-carretera.html" class="link-titulo">LA CARRETERA</a><br>
                <a href="biografíaautor.html" class="link-autor">Cormac McCarthy</a><br>
                <a href="libros/libro-la-carretera.html" class="btn">Previsualizar</a><br>
                <a href="Pago.html" class="btn"><img src="imagenes/carrito.png" width="auto" height="20px" align="center">&nbsp;Agregar S/.35.10</a>
            </div>
        </div>
        <div class="libros">
            <div class="portada">
                <a href="libros/libro-ojala.html" class="imagen-portada">
                    <img src="imagenes/lib1.jpg" class="imagen">
                </a>
            </div>
            <div class="links-libro">
                <a href="libros/libro-ojala.html" class="link-titulo">OJALA</a><br>
                <a href="biografíaautor.html" class="link-autor">Defreds José. A. Gomez Iglesias</a><br>
                <a href="libros/libro-ojala.html" class="btn">Previsualizar</a><br>
                <a href="Pago.html" class="btn"><img src="imagenes/carrito.png" width="auto" height="20px" align="center">&nbsp;Agregar S/.61</a>
            </div>
        </div>
        <div class="libros">
            <div class="portada">
                <a href="libros/libro-metamorfosis.html" class="imagen-portada">
                    <img src="imagenes/lib2.jpg" class="imagen">
                </a>
            </div>
            <div class="links-libro">
                <a href="libros/libro-metamorfosis.html" class="link-titulo">LA METAMORFOSIS</a><br>
                <a href="biografíaautor.html" class="link-autor">Franz Kafka</a><br>
                <a href="libros/libro-metamorfosis.html" class="btn">Previsualizar</a><br>
                <a href="Pago.html" class="btn"><img src="imagenes/carrito.png" width="auto" height="20px" align="center">&nbsp;Agregar S/.49.50</a>
            </div>
        </div>
        <div class="libros">
            <div class="portada">
                <a href="libros/libro-crimen-y-castigo.html" class="imagen-portada">
                    <img src="imagenes/lib3.jpg" class="imagen">
                </a>
            </div>
            <div class="links-libro">
                <a href="libros/libro-crimen-y-castigo.html" class="link-titulo">CRIMEN Y CASTIGO</a><br>
                <a href="biografíaautor.html" class="link-autor">Fiódor Dostoyevski</a><br>
                <a href="libros/libro-crimen-y-castigo.html" class="btn">Previsualizar</a><br>
                <a href="Pago.html" class="btn"><img src="imagenes/carrito.png" width="auto" height="20px" align="center">&nbsp;Agregar S/.69</a>
            </div>
        </div>
        <div class="libros">
            <div class="portada">
                <a href="libros/libro-la-carretera.html" class="imagen-portada">
                    <img src="imagenes/lib4.jpg" class="imagen">
                </a>
            </div>
            <div class="links-libro">
                <a href="libros/libro-la-carretera.html" class="link-titulo">LA CARRETERA</a><br>
                <a href="biografíaautor.html" class="link-autor">Cormac McCarthy</a><br>
                <a href="libros/libro-la-carretera.html" class="btn">Previsualizar</a><br>
                <a href="Pago.html" class="btn"><img src="imagenes/carrito.png" width="auto" height="20px" align="center">&nbsp;Agregar S/.35.10</a>
            </div>
        </div>
    </div>
</body>

</html>