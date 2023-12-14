<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="../../CSS/sobrenosotros.css" />
    <meta charset="UTF-8">
    <link rel="icon" type="image/jpg" href="../../img/logo/logoCarneNebrija.png" />
    <title>Charcutería</title>
    <script src="https://kit.fontawesome.com/887a835504.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">



    <style>
        .listapopulares {
            grid-template-rows: 1fr;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            display: grid;
            row-gap: 5%;

            width: 80%;
            padding-top: 9%;
            margin: auto;
            padding-bottom: 16%;
        }

        .listaoferta {
            grid-template-rows: 1fr;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            display: grid;
            row-gap: 5%;

            width: 80%;
            padding-top: 9%;
            margin: auto;
        }
            


    </style>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Obtener elementos con los IDs grid3 y grid4
    var grid3Element = document.getElementById('grid3');
    var grid4Element = document.getElementById('grid4');

    // Agregar eventos de clic a los elementos
    grid3Element.addEventListener('click', function () {
        console.log(3)
      cambiarColumnas('listapopulares', '1fr 1fr 1fr');
      cambiarColumnas('listaoferta', '1fr 1fr 1fr');

    });

    grid4Element.addEventListener('click', function () {
        console.log(4)
      cambiarColumnas('listaoferta', '1fr 1fr 1fr 1fr');
      cambiarColumnas('listapopulares', '1fr 1fr 1fr 1fr');

    });

    function cambiarColumnas(claseLista, nuevoValor) {
      // Obtener el elemento con la clase especificada
      var lista = document.querySelector('.' + claseLista);

      // Cambiar el valor de grid-template-columns
      if (lista) {
        lista.style.gridTemplateColumns = nuevoValor;
      }
    }
  });
</script>
</head>

<body>
    <?php include '../header.php'; ?>
    <section>
        <div class="productos">
            <div class="grid1">
                <i class="bi bi-grid" id="grid4"></i> <!-- Este es el icono de grid -->
            </div>
            <div class="grid2">
                <i class="bi bi-grid-3x2" id="grid3"></i> <!-- Este es el segundo icono -->
            </div>
            <div class="populares">
                <h2 id="Embutidos">Embutidos</h2>
                <div class="listapopulares">
                    <div class="corte">
                        <div class="borde">
                            <div class="foto">
                                <a href="embutidos/fuet.php"><img src="../../img/Charcuteria/fuet1.jpg" title="Fuet"></a>
                            </div>
                            <h3>Fuet</h3>
                            <p>4,00€ </p>
                        </div>

                    </div>
                    <div class="corte">
                        <div class="borde">
                            <div class="foto">
                                <a href="embutidos/lomo.php"><img src="../../img/Charcuteria/lomo1.jpg" title="Lomo Ibérico"></a>

                            </div>
                            <h3>Lomo Ibérico</h3>
                            <p>4,20€ </p>
                        </div>
                    </div>
                    <div class="corte">
                        <div class="borde">
                            <div class="foto">
                                <a href="embutidos/chorizo.php"><img src="../../img/Charcuteria/chorizo2.jpg" title="Chorizo"></a>

                            </div>
                            <h3>Chorizo</h3>
                            <p>2,85€ </p>
                        </div>
                    </div>


                    <div class="corte">
                        <div class="borde">
                            <div class="foto">
                                <a href="embutidos/jamon.php"><img src="../../img/Charcuteria/jamon1.jpg" title="Jamon Ibérico (Por Piezas)"></a>

                            </div>
                            <h3>Jamon Ibérico (Por Piezas)</h3>
                            <p>15,99€ </p>
                        </div>
                    </div>
                    <div class="corte">
                        <div class="borde">
                            <div class="foto">
                                <a href="embutidos/jamones.php"><img src="../../img/Charcuteria/jamon2.jpg" title="Jamon Ibérico Bellotas (Por Piezas)"></a>

                            </div>
                            <h3>Jamon Ibérico Bellotas (Por Piezas)</h3>
                            <p>14,99€ </p>
                        </div>
                    </div>
                    <div class="corte">
                        <div class="borde">
                            <div class="foto">
                                <a href="piezas de cerdo/costillas.php"> <img src="../../img/Charcuteria/costillas1.jpg" title="Costillas Cerdo Ibérico"></a>

                            </div>
                            <h3>Costillas Cerdo Ibérico</h3>
                            <p>9,00€ </p>
                        </div>

                    </div>
                    <div class="corte">
                        <div class="borde">
                            <div class="foto">
                                <a href="piezas de cerdo/costillar.php"><img src="../../img/Charcuteria/costillar.jpg" title="Costillar Marinado"></a>

                            </div>
                            <h3>Costillar Marinado</h3>
                            <p>12,00€ </p>
                        </div>
                    </div>
                    <div class="corte">
                        <div class="borde">
                            <div class="foto">
                                <a href="piezas de cerdo/panceta.php"><img src="../../img/Charcuteria/panceta.jpg" title="Panceta"></a>

                            </div>
                            <h3>Panceta</h3>
                            <p>4,50€ </p>
                        </div>
                    </div>
                    <div class="corte">
                        <div class="borde">
                            <div class="foto">
                                <a href="piezas de cerdo/morcilla.php"><img src="../../img/Charcuteria/morcilla.jpg" title="Morcilla de Cebolla"></a>

                            </div>
                            <h3>Morcilla de Cebolla</h3>
                            <p>7,50€ </p>
                        </div>
                    </div>
                    <div class="corte">
                        <div class="borde">
                            <div class="foto">
                                <a href="piezas de cerdo/morcilla2.php"><img src="../../img/Charcuteria/morcilla2.jpg" title="Morcilla de Arroz"></a>

                            </div>
                            <h3>Morcilla de Arroz</h3>
                            <p>7,80€ </p>
                        </div>
                    </div>
                    <div class="corte">
                        <div class="borde">
                            <div class="foto">
                                <a href="piezas de cerdo/salchicha.php"><img src="../../img/Charcuteria/salchicha.jpg" title="Salchichas Frescas"></a>

                            </div>
                            <h3>Salchichas Frescas</h3>
                            <p>6,90€ </p>
                        </div>
                    </div>
                    <div class="corte">
                        <div class="borde">
                            <div class="foto">
                                <a href="piezas de cerdo/pincho.php"><img src="../../img/Charcuteria/pincho.jpg" title="Pincho Moruno"></a>

                            </div>
                            <h3>Pincho Moruno</h3>
                            <p>9,90€ </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- <div class="corte">
                            <div class="borde">
                                <div class="foto">
                                    <a href="piezas de cerdo/pancetas.php"><img
                                            src="../../img/Charcuteria/panceta1.jpg"
                                            title="Panceta fresca"></a>

                                </div>
                                <h3>Delicias de Panceta</h3>
                                <p>4,50€ </p>
                            </div>
                        </div> -->
        <!-- <div class="corte">
                            <div class="borde">
                                <div class="foto">
                                    <a href="piezas de cerdo/chorizos.php"><img
                                            src="../../img/Charcuteria/casero.jpg"
                                            title="Chorizo Casero"></a>

                                </div>
                                <h3>Chorizo Casero</h3>
                                <p>7,80€ </p>
                            </div>
                        </div> -->



        <!-- 


                <div class="oferta">
                    <h2 id="partes">Partes del Cerdo</h2>
                    <div class="listaoferta">
                      -->
        <!-- 


                <div class="oferta">
                    
                    <h2 id="preparados">Preparados</h2>
                    <div class="listaoferta">
                        <div class="corte">
                            <div class="borde">
                                <div class="foto">
                                    <a href="preparados/preparado.php"> <img src="../../img/Charcuteria/preparado.jpg"
                                            title="Preparado para Fabada"></a>

                                </div>
                                <h3>Preparado para Fabada</h3>
                                <p>11,00€ </p>
                            </div>
                        </div>

                        <div class="corte">
                        <div class="borde">
                            <div class="foto">
                                <a href="embutidos/pechuga.php"><img src="../../img/Charcuteria/pechuga2.jpg"
                                        title="Pechuga Pavo"></a>

                            </div>
                            <h3>Pechuga Pavo </h3>
                            <p>5,50€ </p>
                        </div>
                    </div>

                        <div class="corte">
                            <div class="borde">
                                <div class="foto">
                                    <a href="preparados/preparado1.php"><img src="../../img/Charcuteria/preparado1.jpg" title="asado"></a>

                                </div>
                                <h3>Preparado para Cocido</h3>
                                <p>17,80€ </p>
                            </div>
                        </div>
                        <div class="corte">
                            <div class="borde">
                                <div class="foto">
                                    <a href="preparados/muslos.php"><img src="../../img/Charcuteria/muslos.jpg" title="Muslos de Pollo"></a>

                                </div>
                                <h3>Muslos de Pollo</h3>
                                <p>19,90€ </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                    </div>
                </div>


            </div> -->


        <a class="volver" href="#"><img src="../../img/General/flecha-arriba.png" width="50px" height="50px"></a>
    </section>
    <?php include '../footer.php'; ?>
</body>

</html>