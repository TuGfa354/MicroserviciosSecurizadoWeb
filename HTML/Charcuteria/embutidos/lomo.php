
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Lomo Ibérico</title>
    <link rel="icon" type="image/jpg" href="../../../img/General/logo.jpeg" />
    <link rel="stylesheet" href="../../../CSS/producto.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/887a835504.js" crossorigin="anonymous"></script>
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
