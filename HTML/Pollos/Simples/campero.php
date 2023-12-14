<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Pollo campero</title>
    <link rel="icon" type="image/jpg" href="../../../img/General/logo.jpeg" />
    <link rel="stylesheet" href="../../../CSS/producto.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/887a835504.js" crossorigin="anonymous"></script>
</head>

<body>

    <?php
    include '../../header.php';
    ?>
    <div class="banner">
        <h1>Pollo campero</h1>
        <p>Inicio → Pollería → Pollo campero</p>
    </div>
    <section>

        <div class="producto">
            <div class="img">
                <img src="../../../img/Pollos/pollo-campero-300x300.jpg" alt="Pollo campero">
            </div>
            <div class="texto">
                <p class="titulo">Pollo campero</p>
                <br>
                <p class="precio">9,90€</p>
                <br>
                <p class="kilos">9,90 €/kg</p>
                <br>
                <p class="categoria"><b>Categoría :</b> Pollería</p>
                <br>

                <div class="select">
                    <label for="seleccion">Modo de preparación</label>
                    <select name="seleccion" id="seleccion">
                        <option value="0">Elige una opción</option>
                        <option value="1">Troceada</option>
                        <option value="2">Picada</option>
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
                            <a href="jamoncitos.php"><img src="../../../img/Pollos/jamoncitos-de-pollo-300x300.jpg" title="Jamoncitos"></a>
                        </div>
                        <h3>Jamoncitos de pollo</h3>
                        <p>3,90€ </p>
                    </div>

                </div>
                <div class="corte">
                    <div class="borde">
                        <div class="foto">
                            <a href="muslosrellenos.php"><img src="../../../img/Pollos/muslos-de-pollo-rellenos-300x300.jpg" title="Muslos rellenos"></a>
                        </div>
                        <h3>Muslos de pollo rellenos</h3>
                        <p>14,00€-19,90€ </p>
                    </div>
                </div>
                <div class="corte">
                    <div class="borde">
                        <div class="foto">
                            <a href="pincho.php"><img src="../../../img/Pollos/pincho-de-pollo-300x300.jpg" title="Pincho"></a>
                        </div>
                        <h3>Pincho de pollo</h3>
                        <p>8,90€ </p>
                    </div>
                </div>
            </div>

        </div>
        <a class="volver" href="#"><img src="../../../img/General/flecha-arriba.png" width="50px"
            height="50px"></a>
    </section>
    <?php include '../../footer.php'; ?>
</body>

</html>
