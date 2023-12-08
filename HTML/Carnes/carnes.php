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
    <script src="../../Js/carnes.js"></script>
</head>

<body>
<?php
  /*  include "/vaguadaInterfaces/VaguadaInterfaces/HTML/header.php";*/
    include "../header.php"
    ?>
    <section>
        <div class="productos">
            <div class="populares" id='productList'>
               <!-- <h2 id="Ternera">Ternera</h2>
                <div class="listapopulares">
                    <div class="corte">
                        <div class="borde">
                            <div class="foto">
                                <a href="ternera/asado.php"><img src="../../img/Carnes/Ternera/Asado.jpg"
                                        title="asado"></a>
                            </div>
                            <h3>Asado</h3>
                            <p>8,99€ </p>
                        </div>

                    </div>
                    <div class="corte">
                        <div class="borde">
                            <div class="foto">
                                <a href="ternera/morcillo.php"><img
                                        src="../../img/Carnes/Ternera/morcillo-de-ternera.jpg" title="asado"></a>

                            </div>
                            <h3>Morcillo de ternera</h3>
                            <p>12,99€ </p>
                        </div>
                    </div>
                    <div class="corte">
                        <div class="borde">
                            <div class="foto">
                                <a href="ternera/espaldilla.php"><img
                                        src="../../img/Carnes/Ternera/espaldilla-de-ternera.jpg"
                                        title="Contra de ternera"></a>

                            </div>
                            <h3>Espaldilla de ternera</h3>
                            <p>12,99€ </p>
                        </div>
                    </div>
                    <div class="corte">
                        <div class="borde">
                            <div class="foto">
                                <a href="ternera/contra.php"><img
                                        src="../../img/Carnes/Ternera/contra-de-ternera300x300.jpg"
                                        title="Contra de ternera"></a>

                            </div>
                            <h3>Contra de ternera</h3>
                            <p>12,99€ </p>
                        </div>
                    </div>
                    <div class="corte">
                        <div class="borde">
                            <div class="foto">
                                <a href="ternera/babilla.php"><img src="../../img/Carnes/Ternera/Babilla.jpg"
                                        title="Babilla de ternera"></a>

                            </div>
                            <h3>Babilla de ternera</h3>
                            <p>14,99€ </p>
                        </div>
                    </div>
                    <div class="corte">
                        <div class="borde">
                            <div class="foto">
                                <a href="ternera/chuleton.php"><img src="../../img/Carnes/Ternera/Chuleton.jpg"
                                        title="Chuletón de ternera"></a>

                            </div>
                            <h3>Chuletón de ternera</h3>
                            <p>19,99€ </p>
                        </div>
                    </div>
                    <div class="corte">
                        <div class="borde">
                            <div class="foto">
                                <a href="ternera/picaña.php"><img src="../../img/Carnes/Ternera/Picana.jpg"
                                        title="Picaña de tenera"></a>

                            </div>
                            <h3>Picaña de ternera</h3>
                            <p>15,99€ </p>
                        </div>
                    </div>
                    <div class="corte">
                        <div class="borde">
                            <div class="foto">
                                <a href="ternera/cadera.php"><img src="../../img/Carnes/Ternera/cadera-de-ternera.jpg"
                                        title="Cadera de ternera"></a>

                            </div>
                            <h3>Cadera de ternera</h3>
                            <p>15,99€ </p>
                        </div>
                    </div>
                    <div class="corte">
                        <div class="borde">
                            <div class="foto">
                                <a href="ternera/aguja.php"><img src="../../img/Carnes/Ternera/aguja-de-ternera.jpg"
                                        title="Aguja de ternera"></a>

                            </div>
                            <h3>Aguja de ternera</h3>
                            <p>11,99€ </p>
                        </div>
                    </div>
                </div>

                <div class="oferta">
                    <h2 id="Cerdos">Cerdo</h2>
                    <div class="listapopulares">
                        <div class="corte">
                            <div class="borde">
                                <div class="foto">
                                    <a href="Cerdo/chuletalomo.php"> <img
                                            src="../../img/Carnes/Cerdos/chuleta-de-lomo-de-cerdo-fresco.jpg"
                                            title="Chuleta de lomo"></a>

                                </div>
                                <h3>Chuleta de lomo</h3>
                                <p>6,80€ </p>
                            </div>

                        </div>
                        <div class="corte">
                            <div class="borde">
                                <div class="foto">
                                    <a href="Cerdo/solomillo.php"><img
                                            src="../../img/Carnes/Cerdos/solomillo-de-cerdo.jpg"
                                            title="Solomillo de cerdo"></a>

                                </div>
                                <h3>Solomillo de cerdo</h3>
                                <p>5,80€ </p>
                            </div>
                        </div>
                        <div class="corte">
                            <div class="borde">
                                <div class="foto">
                                    <a href="Cerdo/sajonia.php"><img
                                            src="../../img/Carnes/Cerdos/Chuleta-de-Sajonia-.jpg"
                                            title="Chuleta de sajonia"></a>

                                </div>
                                <h3>Chuleta de Sajonia</h3>
                                <p>8,90€ </p>
                            </div>
                        </div>
                        <div class="corte">
                            <div class="borde">
                                <div class="foto">
                                    <a href="Cerdo/aguja.php"><img
                                            src="../../img/Carnes/Cerdos/chuletas-de-aguja-de-cerdo.jpg"
                                            title="Chuleta de aguja "></a>

                                </div>
                                <h3>Chuleta de aguja</h3>
                                <p>5,40€ </p>
                            </div>
                        </div>
                        <div class="corte">
                            <div class="borde">
                                <div class="foto">
                                    <a href="Cerdo/cintaadobada.php"><img
                                            src="../../img/Carnes/Cerdos/cinta-adobada.jpg"
                                            title="Cinta adobada"></a>

                                </div>
                                <h3>Cinta adobada</h3>
                                <p>8,90€ </p>
                            </div>
                        </div>
                        <div class="corte">
                            <div class="borde">
                                <div class="foto">
                                    <a href="Cerdo/costilla.php"><img
                                            src="../../img/Carnes/Cerdos/costilla-fresca-de-cerdo.jpg"
                                            title="Costilla de cerdo"></a>

                                </div>
                                <h3>Costilla  de cerdo</h3>
                                <p>10,99€ </p>
                            </div>
                        </div>
                        <div class="corte">
                            <div class="borde">
                                <div class="foto">
                                    <a href="Cerdo/jamon.php"><img
                                            src="../../img/Carnes/Cerdos/jamon-de-cerdo-fresco.jpg"
                                            title="Jamón de cerdo"></a>

                                </div>
                                <h3>Jamón de cerdo fresco</h3>
                                <p>6,80€ </p>
                            </div>
                        </div>
                        <div class="corte">
                            <div class="borde">
                                <div class="foto">
                                    <a href="Cerdo/panceta.php"><img
                                            src="../../img/Carnes/Cerdos/panceta-fresca.jpg"
                                            title="Panceta fresca"></a>

                                </div>
                                <h3>Panceta fresca</h3>
                                <p>6,99€ </p>
                            </div>
                        </div>
                        <div class="corte">
                            <div class="borde">
                                <div class="foto">
                                    <a href="Cerdo/cintalomo.php"><img
                                            src="../../img/Carnes/Cerdos/cinta-de-lomo-fresca.jpg"
                                            title="Cinta de lomo"></a>

                                </div>
                                <h3>Cinta de lomo</h3>
                                <p>7,70€ </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="oferta">
                    <h2 id="Corderos">Cordero</h2>
                    <div class="listapopulares">
                        <div class="corte">
                            <div class="borde">
                                <div class="foto">
                                    <a href="cordero/chuletas.php"> <img class="foto" src="../../img/Carnes/Corderos/chuletas-de-cordero-lechal-300x300.jpg"
                                            title="Chuleta de cordero"></a>

                                </div>
                                <h3>Chuletas de cordero</h3>
                                <p>29,99€ </p>
                            </div>

                        </div>
                        <div class="corte">
                            <div class="borde">
                                <div class="foto">
                                    <a href="cordero/corderomedios.php"><img src="../../img/Carnes/Corderos/cordero-lechal50-300x300.jpg" title="Cordero lechal por medios"></a>

                                </div>
                                <h3>Cordero por medios</h3>
                                <p>69,99€ </p>
                            </div>
                        </div>
                        <div class="corte">
                            <div class="borde">
                                <div class="foto">
                                    <a href="cordero/cordero.php"><img src="../../img/Carnes/Corderos/cordero-lechal-300x300.jpg" title="Cordero lechal"></a>

                                </div>
                                <h3>Cordero lechal</h3>
                                <p>135,99€ </p>
                            </div>
                        </div>
                    </div>
                </div>-->

            </div>


            <a class="volver" href="#"><img src="../../img/General/flecha-arriba.png" width="50px"
                height="50px"></a>
    </section>
    <?php include '../footer.php'; ?>
</body>

</html>