<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Pincho de pollo</title>
    <link rel="icon" type="image/jpg" href="../../../img/General/logo.jpeg" />
    <link rel="stylesheet" href="../../../CSS/producto.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/887a835504.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400;700&display=swap" rel="stylesheet">

</head>

<body>

    <?php
    include '../../header.php';
    ?>
    <div class="banner">
        <h1>Muslos de pollo rellenos</h1>
        <p>Inicio → Pollería → Muslos de pollo rellenos</p>
    </div>
    <section>

        <div class="producto">
            <div class="img">
                <img src="../../../img/Pollos/muslos-de-pollo-rellenos-300x300.jpg" alt="Muslos de pollo rellenos">
            </div>
            <div class="texto">
                <p class="titulo">Muslos de pollo rellenos</p>
                <br>
                <p class="precio">14,00€-19,90€</p>
                <br>
                <p class="kilos">14,00 €/kg-19,90 €/kg</p>
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
                            <a href="campero.php"><img src="../../../img/Pollos/pollo-campero-300x300.jpg" title="Pollo campero"></a>
                        </div>
                        <h3>Pollo campero</h3>
                        <p>9,90€ </p>
                    </div>

                </div>
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
