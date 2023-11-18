<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Chorizo Casero</title>
    <link rel="icon" type="image/jpg" href="../../../img/General/logo.jpeg" />
    <link rel="stylesheet" href="../../../CSS/producto.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/887a835504.js" crossorigin="anonymous"></script>
</head>

<body>

<?php include '../../header.php'; ?>

    <div class="banner">
        <h1>Chorizo Casero</h1>
        <p>Inicio → Charcuteria → Chorizo Casero</p>
    </div>
    <section>

        <div class="producto">
            <div class="img">
                <img src="../../../img/Charcuteria/casero.webp" alt="Chorizo Casero">
            </div>
            <div class="texto">
                <p class="titulo">Chorizo Casero</p>
                <br>
                <p class="precio">7,80€</p>
                <br>
                <p class="kilos">16,36€/kg</p>
                <br>
                <p class="categoria"><b>Categoría :</b> Piezas de cerdo</p>
                <br>

                <div class="select">
                    <label for="seleccion">Modo de preparación</label>
                    <select name="seleccion" id="seleccion">
                        <option value="0">Elige una opción</option>
                        <option value="1">Filetes finos</option>
                        <option value="1">Filetes gruesos</option>
                    </select>
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
                            <a href="../embutidos/chorizo.php"><img src="../../../img/Charcuteria/chorizo2.jpg" title="Chorizo"></a>
                        </div>
                        <h3>Chorizo</h3>
                        <p>40,00€ </p>
                    </div>

                </div>
                <div class="corte">
                    <div class="borde">
                        <div class="foto">
                            <a href="../piezas de cerdo/morcilla2.php"><img src="../../../img/Charcuteria/morcilla2.jpg" title="Morcilla de Arroz"></a>
                        </div>
                        <h3>Morcilla de Arroz</h3>
                        <p>7,80€ </p>
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