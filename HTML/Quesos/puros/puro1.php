<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Queso Puro de Oveja</title>
    <link rel="icon" type="image/jpg" href="../../../img/General/logo.jpeg" />
    <link rel="stylesheet" href="../../../CSS/producto.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/887a835504.js" crossorigin="anonymous"></script>
</head>

<body>

    <?php include '../../header.php'; ?>
    
    <div class="banner">
        <h1>Queso Puro de Oveja</h1>
        <p>Inicio → Quesos → Queso Puro de Oveja</p>
    </div>
    <section>

        <div class="producto">
            <div class="img">
                <img src="../../../img/Quesos/puro1.webp" alt="Queso Puro de Oveja">
            </div>
            <div class="texto">
                <p class="titulo">Queso Puro de Oveja</p>
                <br>
                <p class="precio">4,90€</p>
                <br>
                <p class="kilos">14,46 €/kg</p>
                <br>
                <p class="categoria"><b>Categoría :</b> Quesos</p>
                <br>

                <div class="select">
                    <label for="seleccion">Modo de preparación</label>
                    <select name="seleccion" id="seleccion">
                        <option value="0">Elige una opción</option>
                        <option value="1">Cuña entera</option>
                        <option value="2">Media cuña</option>
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
                            <a href="puro2.php"><img src="../../../img/Quesos/manchego.jpg" title="Carrillera"></a>
                        </div>
                        <h3>Queso Manchego Manzanares</h3>
                        <p>5,50€ </p>
                    </div>

                </div>
                <div class="corte">
                    <div class="borde">
                        <div class="foto">
                            <a href="puro3.php"><img src="../../../img/Quesos/puro3.jpg" title="Queso"></a>
                        </div>
                        <h3>Queso de pastoreo</h3>
                        <p>12,00€ </p>
                    </div>
                </div>
                <div class="corte">
                    <div class="borde">
                        <div class="foto">
                            <a href="../relacionados/azafran.php"><img src="../../../img/Quesos/azafran.jpg" title="Azafran"></a>
                        </div>
                        <h3>Azafran</h3>
                        <p>12,90€ </p>
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