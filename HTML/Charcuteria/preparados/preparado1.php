<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Preparado para Cocido</title>
    <link rel="icon" type="image/jpg" href="../../../img/logo/logoCarneNebrija.png" />
    <link rel="stylesheet" href="../../../CSS/producto.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/887a835504.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>

<?php include '../../header.php'; ?>

<div class="banner">
        <p>
            <a href="http://localhost/vaguadaInterfaces/VaguadaInterfaces/HTML/sobrenosotros.php">
                <i class="fa-sharp fa-solid fa-house-chimney"></i>
            </a> >
            <span id="productLink"></span>
        </p>
    </div>

    <section data-product-id="1">

    <div class="producto">
            <div class="img">
                <img id="productImage" alt="Pechuga de pollo">
            </div>
            <div class="texto">
                <p class="titulo" id="productTitle"></p>
                <br>
                <p class="precio" id="productPrice"></p>
                <br>
                <p class="categoria"><b>Categoría :</b> <span id="productCategory"></span></p>
                <br>
                <div class="select">
                    <label for="seleccion">Modo de preparación</label>
                    <select name="seleccion" id="seleccion"></select>
                </div>
                <label for="cantidad">Cuántas unidades</label>
                <input id="numero" type="number">
                <button class="boton">Añadir al carrito</button>
            </div>
        </div>
        <hr class="h">

        <div class="populares">
            <h2>Productos relacionados</h2>
            <div class="listapopulares">
                <div class="corte">
                    <div class="borde">
                        <div class="foto">
                            <a href="../preparados/preparado.php"><img src="../../../img/Charcuteria/preparado.jpg" title="Preparado para Fabada"></a>
                        </div>
                        <h3>Preparado para Fabada</h3>
                        <p>11,90€ </p>
                    </div>

                </div>
                <div class="corte">
                    <div class="borde">
                        <div class="foto">
                            <a href="../embutidos/chorizo.php"><img src="../../../img/Charcuteria/chorizo2.jpg" title="Chorizo"></a>
                        </div>
                        <h3>Chorizo</h3>
                        <p>4,00€ </p>
                    </div>
                </div>
                <div class="corte">
                    <div class="borde">
                        <div class="foto">
                            <a href="../embutidos/lomo.php"><img src="../../../img/Charcuteria/lomo1.jpg" title="Lomo Ibérico"></a>
                        </div>
                        <h3>Lomo Ibérico</h3>
                        <p>3,50€ </p>
                    </div>
                </div>
            </div>

        </div>
        <a class="volver" href="sobrenosotros.php"><img src="../../../img/General/flecha-arriba.png" width="50px"
            height="50px"></a>
    </section>
    <?php include '../../footer.php'; ?>
</body>

</html>