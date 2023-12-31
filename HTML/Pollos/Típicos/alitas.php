<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Alitas de pollo</title>
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
        <h1>Alitas de pollo</h1>
        <p>Inicio → Pollería → Alitas de pollo</p>
    </div>
    <section>

        <div class="producto">
            <div class="img">
                <img src="../../../img/Pollos/alas-de-pollo-300x300.jpg" alt="Alitas de pollo">
            </div>
            <div class="texto">
                <p class="titulo">Alitas de pollo</p>
                <br>
                <p class="precio">4,99€</p>
                <br>
                <p class="kilos">4,99 €/kg</p>
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
                <div class="corte">
                    <div class="borde">
                        <div class="foto">
                            <a href="filetes.php"><img src="../../../img/Pollos/filetes-de-pollo-300x300.jpg" title="Filetes"></a>
                        </div>
                        <h3>Filetes</h3>
                        <p>7,90€ </p>
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
