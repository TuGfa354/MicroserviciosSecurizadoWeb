<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Cinta adobada de cerdo</title>
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
        <h1>Cinta adobada de cerdo</h1>
        <p>Inicio → Carnicería → Cinta adobada de cerdo</p>
    </div>
    <section>

        <div class="producto">
            <div class="img">
                <img src="../../../img/Carnes/Cerdos/cinta-adobada.webp" alt="Aguja de ternera">
            </div>
            <div class="texto">
                <p class="titulo">Cinta adobada de cerdo</p>
                <br>
                <p class="precio">8.90€</p>
                <br>
                <p class="kilos">8.90 €/kg</p>
                <br>
                <p class="categoria"><b>Categoría :</b> Cerdo</p>
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
                            <a href="../Ternera/chuleton.php"><img src="../../../img/Carnes/Ternera/Chuleton.jpg" title="Chuletón"></a>
                        </div>
                        <h3>Chuletón de ternera</h3>
                        <p>19,99€ </p>
                    </div>

                </div>
                <div class="corte">
                    <div class="borde">
                        <div class="foto">
                            <a href="../Ternera/picaña.php"><img src="../../../img/Carnes/Ternera/Picana.jpg" title="Picaña"></a>
                        </div>
                        <h3>Picaña</h3>
                        <p>15,99€ </p>
                    </div>
                </div>
                <div class="corte">
                    <div class="borde">
                        <div class="foto">
                            <a href="../ternera/babilla.php"><img src="../../../img/Carnes/Ternera/Babilla.jpg" title="asado"></a>
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