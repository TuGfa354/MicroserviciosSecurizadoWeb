<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Miel Natural</title>
    <link rel="icon" type="image/jpg" href="../../../img/General/logo.jpeg" />
    <link rel="stylesheet" href="../../../CSS/producto.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/887a835504.js" crossorigin="anonymous"></script>
</head>

<body>

    <?php include '../../header.php'; ?>
    
    <div class="banner">
        <h1>Lomo Madurado</h1>
        <p>Inicio → Quesos → Lomo Madurado</p>
    </div>
    <section>

        <div class="producto">
            <div class="img">
                <img src="../../../img/Quesos/lom.webp" alt="Lomo Madurado">
            </div>
            <div class="texto">
                <p class="titulo">Lomo Madurado</p>
                <br>
                <p class="precio">24,90€</p>
                <br>
                <p class="kilos">44,90 €/kg</p>
                <br>
                <p class="categoria"><b>Categoría :</b> Quesos</p>
                <br>

                <div class="select">
                    <label for="seleccion">Modo de preparación</label>
                    <select name="seleccion" id="seleccion">
                        <option value="0">Elige una opción</option>
                        <option value="1">Corte fino</option>
                        <option value="2">Corte grueso</option>
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
                            <a href="puro1.php"><img src="../../../img/Quesos/puro1.jpg" title="Queso Puro de Oveja"></a>
                        </div>
                        <h3>Queso Puro de Oveja</h3>
                        <p>4,50€</p>
                    </div>

                </div>
                <div class="corte">
                    <div class="borde">
                        <div class="foto">
                            <a href="puro2.php"><img src="../../../img/Quesos/manchego.jpg" title="Queso Manchego"></a>
                        </div>
                        <h3>Queso Manchego </h3>
                        <p>5,50€ </p>
                    </div>
                </div>
                <div class="corte">
                    <div class="borde">
                        <div class="foto">
                            <a href="puro3.php"><img src="../../../img/Quesos/puro3.jpg" title="Queso de Pastoreo"></a>
                        </div>
                        <h3>Queso de Pastoreo</h3>
                        <p>4,90€ </p>
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