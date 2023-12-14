<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Jamon Ibérico (Por Piezas)</title>
    <link rel="icon" type="image/jpg" href="../../../img/General/logo.jpeg" />
    <link rel="stylesheet" href="../../../CSS/producto.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/887a835504.js" crossorigin="anonymous"></script>
</head>

<body>

<?php include '../../header.php'; ?>

    <div class="banner">
        <h1>Jamon Ibérico (Por Piezas)</h1>
        <p>Inicio → Charcuteria → Jamon Ibérico (Por Piezas)</p>
    </div>
    <section>

        <div class="producto">
            <div class="img">
                <img src="../../../img/Charcuteria/jamon1.webp" alt="Jamon Ibérico (Por Piezas)">
            </div>
            <div class="texto">
                <p class="titulo">Jamon Ibérico (Por Piezas)</p>
                <br>
                <p class="precio">16,50€</p>
                <br>
                <p class="kilos">120,88€/kg</p>
                <br>
                <p class="categoria"><b>Categoría :</b> Embutido</p>
                <br>

                <div class="select">
                    <label for="seleccion">Modo de preparación</label>
                    <select name="seleccion" id="seleccion">
                        <option value="0">Elige una opción</option>
                        <option value="1">Corte fino</option>
                        <option value="1">Corte grueso</option>
                    </select>
                </div>
                <label for="cantidad">Cuántas unidades</label>
                <input id="numero" type="number">
                <button class="boton">Añadir al carrito</button>
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
                        <p>2,85€ </p>
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
                            <a href="../embutidos/fuet.php"><img src="../../../img/Charcuteria/fuet1.jpg" title="Fuet Ibérico"></a>
                        </div>
                        <h3>Fuet Ibérico</h3>
                        <p>4,00€ </p>
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