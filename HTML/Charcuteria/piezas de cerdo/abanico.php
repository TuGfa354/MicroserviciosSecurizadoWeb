<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Abanico Cerdo Ibérico</title>
    <link rel="icon" type="image/jpg" href="../../../img/General/logo.jpeg" />
    <link rel="stylesheet" href="../../../CSS/producto.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/887a835504.js" crossorigin="anonymous"></script>
</head>

<body>

<?php include '../../header.php'; ?>

    <div class="banner">
        <h1>Abanico Cerdo Ibérico</h1>
        <p>Inicio → Charcuteria → Abanico Cerdo Ibérico</p>
    </div>
    <section>

        <div class="producto">
            <div class="img">
                <img src="../../../img/Charcuteria/abanico.jpg" alt="Abanico Cerdo Ibérico">
            </div>
            <div class="texto">
                <p class="titulo">Abanico Cerdo Ibérico</p>
                <br>
                <p class="precio">5,00€</p>
                <br>
                <p class="kilos">16,36€/kg</p>
                <br>
                <p class="categoria"><b>Categoría :</b> Charcutería</p>
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
                            <a href="../piezas de cerdo/panceta.php"><img src="../../../img/Charcuteria/panceta.jpg" title="Panceta"></a>
                        </div>
                        <h3>Panceta</h3>
                        <p>6,40€ </p>
                    </div>

                </div>
                <div class="corte">
                    <div class="borde">
                        <div class="foto">
                            <a href="../piezas de cerdo/picada.php"><img src="../../../img/Charcuteria/picada.jpg" title="Carne Picada"></a>
                        </div>
                        <h3>Carne Picada</h3>
                        <p>9,30€ </p>
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