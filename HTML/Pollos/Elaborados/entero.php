<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Pollo entero</title>
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
        <h1>Pollo entero</h1>
        <p>Inicio → Pollería → Pollo entero</p>
    </div>
    <section>

        <div class="producto">
            <div class="img">
                <img src="../../../img/Pollos/pollo-entero-300x300.jpg" alt="Pollo entero">
            </div>
            <div class="texto">
                <p class="titulo">Pollo entero</p>
                <br>
                <p class="precio">7,20€</p>
                <br>
                <p class="kilos">7,20 €/kg</p>
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


        <div class="populares">
            <h2>Productos relacionados</h2>
            <div class="listapopulares">
                <div class="corte">
                    <div class="borde">
                        <div class="foto">
                            <a href="relleno.php"><img src="../../../img/Pollos/pollo-relleno-300x300.jpg" title="Pollo relleno"></a>
                        </div>
                        <h3>Pollo relleno</h3>
                        <p>35,99€ </p>
                    </div>

                </div>
                <div class="corte">
                    <div class="borde">
                        <div class="foto">
                            <a href="trasero.php"><img src="../../../img/Pollos/traseros-de-pollo-300x300.jpg" title="Trasero de pollo"></a>
                        </div>
                        <h3>Trasero de pollo</h3>
                        <p>6,00€ </p>
                    </div>
                </div>
                <div class="corte">
                    <div class="borde">
                        <div class="foto">
                            <a href="troceado.php"><img src="../../../img/Pollos/pollo-troceado-y-marinado-con-una-suave-salsa-de-limon-y-acompanado-de-verduras-deshidratadas-300x300.jpg" title="Pollo troceado"></a>
                        </div>
                        <h3>Pollo troceado</h3>
                        <p>4,50€ </p>
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
