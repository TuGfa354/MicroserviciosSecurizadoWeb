<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Aguja de ternera</title>
    <link rel="icon" type="image/jpg" href="../../../img/logo/logoCarneNebrija.png" />
    <link rel="stylesheet" href="../../../CSS/producto.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/887a835504.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400;700&display=swap" rel="stylesheet">
    <script src="../../../js/producto.js"></script>
</head>

<body>

    <?php
    include '../../header.php';
    ?>
    <div class="banner">
        <h1>Aguja de ternera</h1>
        <p>Inicio > Carnes > Aguja de ternera</p>
    </div>
    <section data-product-id="9" class="section">

        <div class="producto">
            <div class="img">
                <img src="../../../img/Carnes/Ternera/aguja-de-ternera-picar-o-guisar.webp" alt="Aguja de ternera">
            </div>
            <div class="texto">
                <p class="titulo">Aguja de ternera</p>
                <br>
                <p class="precio">11,99€</p>
                <br>
                <p class="kilos">11,99 €/kg</p>
                <br>
                <p class="categoria"><b>Categoría :</b> Ternera</p>
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
                <button class="carrito">Añadir al carrito</button>
            </div>
        </div>

        
        <hr class="h">


        <div class="populares">
            <h2>Productos relacionados</h2>
            <div class="listapopulares">
                <div class="corte">
                    <div class="borde">
                        <div class="foto">
                            <a href="chuleton.php"><img src="../../../img/Carnes/Ternera/Chuleton.jpg" title="Chuletón"></a>
                        </div>
                        <h3>Chuletón de ternera</h3>
                        <p>19,99€ </p>
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
    <?php
    include '../../footer.php';
    ?>
</body>

</html>