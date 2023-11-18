<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Chuletón de ternera</title>
    <link rel="icon" type="image/jpg" href="../../../img/General/logo.jpeg" />
    <link rel="stylesheet" href="../../../CSS/producto.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/887a835504.js" crossorigin="anonymous"></script>
</head>

<body>

<?php include '../../header.php'; ?>
    <div class="banner">
        <h1>Chuletón de ternera</h1>
        <p>Inicio → Carnes → Chuletón de ternera</p>
    </div>
    <section>

        <div class="producto">
            <div class="img">
                <img src="../../../img/Carnes/Ternera/chuleton-de-ternera-de-la-sierra-de-guadarama-5.webp" alt="Chuletón de ternera">
            </div>
            <div class="texto">
                <p class="titulo">Chuletón de ternera</p>
                <br>
                <p class="precio">19,99€</p>
                <br>
                <p class="kilos">19,99 €/kg</p>
                <br>
                <p class="categoria"><b>Categoría :</b> Ternera</p>
                <br>

                <div class="select">
                    <label for="seleccion">Modo de preparación</label>
                    <select name="seleccion" id="seleccion">
                        <option value="0">Elige una opción</option>
                        <option value="1">Fileteado fino</option>
                        <option value="2">Fileteado grueso</option>
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
                            <a href="asado.php"><img src="../../../img/Carnes/Ternera/Asado.jpg" title="Asado"></a>
                        </div>
                        <h3>Asado</h3>
                        <p>8,99€ </p>
                    </div>

                </div>
                <div class="corte">
                    <div class="borde">
                        <div class="foto">
                            <a href="picaña.php"><img src="../../../img/Carnes/Ternera/Picana.jpg" title="Picaña"></a>
                        </div>
                        <h3>Picaña</h3>
                        <p>15,99€ </p>
                    </div>
                </div>
                <div class="corte">
                    <div class="borde">
                        <div class="foto">
                            <a href="babilla.php"><img src="../../../img/Carnes/Ternera/Babilla.jpg" title="asado"></a>
                        </div>
                        <h3>Babilla de ternera</h3>
                        <p>14,99€ </p>
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