<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Costillar Marinado</title>
    <link rel="icon" type="image/jpg" href="../../../img/General/logo.jpeg" />
    <link rel="stylesheet" href="../../../CSS/producto.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/887a835504.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400;700&display=swap" rel="stylesheet">

</head>

<body>

<?php include '../../header.php'; ?>

    <div class="banner">
        <h1>Costillas Marinadas</h1>
        <p>Inicio → Charcuteria → Costillas Marinado</p>
    </div>
    <section>

        <div class="producto">
            <div class="img">
                <img src="../../../img/Charcuteria/costillar.jpg" alt="Costillar Marinado">
            </div>
            <div class="texto">
                <p class="titulo">Costillar Marinado</p>
                <br>
                <p class="precio">8,99€</p>
                <br>
                <p class="kilos">26,36€/kg</p>
                <br>
                <p class="categoria"><b>Categoría :</b> Piezas de cerdo</p>
                <br>

                <div class="select">
                    <label for="seleccion">Modo de preparación</label>
                    <select name="seleccion" id="seleccion">
                        <option value="0">Elige una opción</option>
                        <option value="1">Costillar entero</option>
                        <option value="1">Medio costillar</option>
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
                            <a href="../piezas de cerdo/pincho.php"><img src="../../../img/Charcuteria/pincho.jpg" title="Pincho Moruno"></a>
                        </div>
                        <h3>Pincho Moruno</h3>
                        <p>9,90€ </p>
                    </div>

                </div>
                <div class="corte">
                    <div class="borde">
                        <div class="foto">
                            <a href="../embutidos/chorizo.php"><img src="../../../img/Charcuteria/chorizo2.jpg" title="Chorizo"></a>
                        </div>
                        <h3>Chorizo</h3>
                        <p>7,80€ </p>
                    </div>
                </div>
                <div class="corte">
                    <div class="borde">
                        <div class="foto">
                            <a href="../piezas de cerdo/costillas.php"><img src="../../../img/Charcuteria/costillas1.jpg" title="Costillas Cerdo Ibérico"></a>
                        </div>
                        <h3>Costillas Cerdo Ibérico</h3>
                        <p>29,99€ </p>
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