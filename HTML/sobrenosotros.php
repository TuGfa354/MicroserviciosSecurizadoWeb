<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/jpg" href="../img/logo/logoCarneNebrija.png" />
    <title>Carnicería La Vaguada</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400;700&display=swap" rel="stylesheet"> -->



    <link rel="stylesheet" href="../CSS/sobrenosotros.css">
    <script src="https://kit.fontawesome.com/887a835504.js" crossorigin="anonymous"></script>

    <style>
        body {
            font-family: 'Gabarito', sans-serif; /* Aplicar la tipografía Gabarito al cuerpo del documento */
        }
    </style>

</head>

<body>


    <?php
    include "header.php";
    ?>
    <section>


        </div>
        <div class="productos">
        <?php include 'carrusel.php'; ?>

            <div class="populares">
                <h2>Productos populares</h2>
                <div class="listapopulares">
                    <div class="corte">
                        <div class="borde">
                            <div class="foto">
                                <a href="Carnes/ternera/Asado de tira.php"><img src="../img/Carnes/Ternera/Asado.jpg" title="Pechuga de pavo"></a>
                            </div>
                            <h3>Asado de tira</h3>
                            <p>8,99€ </p>
                        </div>

                    </div>
                    <div class="corte">
                        <div class="borde">
                            <div class="foto">
                                <a href="Carnes/ternera/Aguja de ternera.php"><img src="../img/Carnes/Ternera/aguja-de-ternera.jpg" title="Aguja de ternera"></a>

                            </div>
                            <h3>Aguja de ternera</h3>
                            <p>11,99€</p>
                        </div>
                    </div>
                    <div class="corte">
                        <div class="borde">
                            <div class="foto">
                                <a href="Charcuteria/embutidos/chorizo.php"><img src="../img/Charcuteria/chorizo2.jpg" title="Chorizo"></a>

                            </div>
                            <h3>Chorizo</h3>
                            <p>3,50€</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="oferta">
                <h2>Productos en oferta</h2>
                <div class="listaoferta">
                    <div class="corte">
                        <div class="borde">
                            <div class="foto">
                                <a href="Carnes/ternera/Babilla de ternera.php"> <img src="../img/Carnes/Ternera/Babilla.jpg" title="Babilla"></a>

                            </div>
                            <h3>Asado</h3>
                            <p>40,00€</p>
                        </div>

                    </div>
                    <div class="corte">
                        <div class="borde">
                            <div class="foto">
                                <a href="Carnes/ternera/Cadera de ternera.php"><img src="../img/Carnes/Ternera/cadera-de-ternera.jpg" title="Cadera de ternera"></a>

                            </div>
                            <h3>Cadera de ternera</h3>
                            <p>15,99€</p>
                        </div>
                    </div>
                    <div class="corte">
                        <div class="borde">
                            <div class="foto">
                                <a href="Carnes/Cerdo/Solomillo de cerdo.php"><img src="../img/Carnes/Cerdos/solomillo-de-cerdo.jpg" title="Solomillo de cerdo"></a>

                            </div>
                            <h3>Solomillo cerdo</h3>
                            <p>5,80€</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       



      



</div>
        <div class="calidad">
            <div class="texto">
                <p class="t1">Carne de la sierra de guadarrama de Madrid </p>
                <p class="t2">El nivel de la mayor calidad</p>
                <p class="t3">Nuestro nivel de calidad en producción de carne de vacuno está sujeto <b>exhaustivos y
                        estrictos controles</b>.</p>
            </div>
            <div class="foto">
                <img src="../img/nosotros/sello-D.O.-carne-de-la-Sierra-de-Guadarrama.jpg" alt="Cadera de ternera">
            </div>
        </div>
        <a class="volver" href="#"><img src="../img/General/flecha-arriba.png" width="50px" height="50px"></a>
    </section>


    <?php include 'footer.php'; ?>
</body>

</html>