<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../../CSS/sobrenosotros.css">
    <meta charset="UTF-8">
    <link rel="icon" type="image/jpg" href="../../img/General/logo.jpeg" />
    <title>Carnicería</title>
    <script src="https://kit.fontawesome.com/887a835504.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    include "../header.php"
    ?>
    <section>
        <div class="productos">
            <div class="populares" id="productList">
                <!-- Product list will be populated dynamically by JavaScript -->
            </div>
            <a class="volver" href="#"><img src="../../img/General/flecha-arriba.png" width="50px"
                    height="50px"></a>
        </div>
    </section>
    <?php include '../footer.php'; ?>
    <script src="../../js/carnes.js"></script>
</body>

</html>
