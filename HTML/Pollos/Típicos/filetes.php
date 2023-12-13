<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Filetes de pollo</title>
    <link rel="icon" type="image/jpg" href="../../../img/logo/logoCarneNebrija.png" />
    <link rel="stylesheet" href="../../../CSS/producto.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/887a835504.js" crossorigin="anonymous"></script>
</head>

<body>

    <?php include '../header.php'; ?>

    </nav>
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
                <div class="boton"><button class="btn">Añadir al carrito</button></div>
            </div>
        </div>


        <div class="populares">
            <h2>Productos relacionados</h2>
            <div class="listapopulares">
                <div class="corte">
                    <div class="borde">
                        <div class="foto">
                            <a href="alitas.php"><img src="../../../img/Pollos/alas-de-pollo-300x300.jpg" title="Alitas"></a>
                        </div>
                        <h3>Alitas</h3>
                        <p>4,99€ </p>
                    </div>

                </div>
                <div class="corte">
                    <div class="borde">
                        <div class="foto">
                            <a href="burgermeat.php"><img src="../../../img/Pollos/hamburguesa-de-pollo-300x300.jpg" title="Hamburguesa"></a>
                        </div>
                        <h3>Hamburguesa</h3>
                        <p>4,95€ </p>
                    </div>
                </div>
                <div class="corte">
                    <div class="borde">
                        <div class="foto">
                            <a href="contramuslos.php"><img src="../../../img/Pollos/contramuslos-de-pollo-enteros-300x300.jpg" title="Contramuslos"></a>
                        </div>
                        <h3>Contramuslos</h3>
                        <p>3,80€ </p>
                    </div>
                </div>
            </div>

        </div>
        <a class="volver" href="#"><img src="../../../img/General/flecha-arriba.png" width="50px"
            height="50px"></a>
    </section>
    <?php
    include '../../footer.php';
    ?>
</body>

</html>