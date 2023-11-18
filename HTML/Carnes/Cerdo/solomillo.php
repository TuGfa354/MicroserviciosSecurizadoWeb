<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Solomillo de cerdo</title>
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
        <h1>Aguja de ternera</h1>
        <p>Inicio → Carnicería → Solomillo de cerdo</p>
    </div>
    <section>

        <div class="producto">
            <div class="img">
                <img src="../../../img/Carnes/Cerdos/solomillo-de-cerdo.webp" alt="solomillo-de-cerdo">
            </div>
            <div class="texto">
                <p class="titulo">Solomillo de cerdo</p>
                <br>
                <p class="precio">5,80</p>
                <br>
                <p class="kilos">5,80 €/kg</p>
                <br>
                <p class="categoria"><b>Categoría :</b> Corderos</p>
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
                            <a href="../cordero/corderomedios.php"><img src="../../../img/Carnes/Corderos/cordero-lechal50-300x300.jpg"
                                    title="Chuletón"></a>
                        </div>
                        <h3>Chuletón de ternera</h3>
                        <p>19,99€ </p>
                    </div>

                </div>
                <div class="corte">
                    <div class="borde">
                        <div class="foto">
                            <a href="../cordero/cordero.php"><img src="../../../img/Carnes/Corderos/cordero-lechal-300x300.jpg" title="Cordero lechal"></a>
                        </div>
                        <h3>Picaña</h3>
                        <p>15,99€ </p>
                    </div>
                </div>
                <div class="corte">
                    <div class="borde">
                        <div class="foto">
                            <a href="../ternera/babilla.php"><img src="../../../img/Carnes/Ternera/Babilla.jpg" title="Babilla"></a>
                        </div>
                        <h3>Babilla de ternera</h3>
                        <p>14,99€ </p>
                    </div>
                </div>
            </div>

        </div>
        <a class="volver" href="#"><img src="../../../img/General/flecha-arriba.png" width="50px" height="50px"></a>
    </section>
    <?php
    include '../../footer.php';
    ?>
</body>

</html>