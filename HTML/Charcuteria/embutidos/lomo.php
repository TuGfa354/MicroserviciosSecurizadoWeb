
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Lomo Ibérico</title>
    <link rel="icon" type="image/jpg" href="../../../img/General/logo.jpeg" />
    <link rel="stylesheet" href="../../../CSS/producto.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/887a835504.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400;700&display=swap" rel="stylesheet">

</head>

<body>

<?php include '../../header.php'; ?>

<div class="banner">
        <h1>Lomo Ibérico</h1>
        <p>Inicio → Charcuteria → Lomo Ibérico</p>
    </div>
    <section>

    <div class="producto">
            <div class="img">
                <img src="../../../img/Charcuteria/lomo1.webp" alt="Lomo Ibérico Ibérico">
            </div>
            <div class="texto">
                <p class="titulo">Lomo Ibérico</p>
                <br>
                <p class="precio">3,50€</p>
                <br>
                <p class="kilos">18,88€/kg</p>
                <br>
                <p class="categoria"><b>Categoría :</b> Embutido</p>
                <br>

                <div class="select">
                    <label for="seleccion">Modo de preparación</label>
                    <select name="seleccion" id="seleccion">
                        <option value="0">Elige una opción</option>
                        <option value="1">Corte fino</option>
                        <option value="1">Corte grueso</option>
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