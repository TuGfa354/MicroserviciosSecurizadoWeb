<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../../CSS/sobrenosotros.css">
    <meta charset="UTF-8">
    <link rel="icon" type="image/jpg" href="../../img/logo/logoCarneNebrija.png" />
    <title>Carnicería</title>
    <script src="https://kit.fontawesome.com/887a835504.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400;700&display=swap" rel="stylesheet">
    <script src="../../js/carnes.js"></script>
    
</head>

<body>


<div class="lds-facebook" id="cargandoimg"><div></div><div></div><div></div></div>
<div class="cargando" id="cargandotxt"><p >cargando...</p></div>

    <?php
    /* include "/vaguadaInterfaces/VaguadaInterfaces/HTML/header.php"; */
    include "../header.php"
    ?>

  

    <section>
        <div class="productos" id="terneraSection">
            <div class="populares">
                <h2 id="Ternera">Ternera</h2>
                <div class="listapopulares" id="terneraList">
                    <!-- Dynamic content for "Ternera" will be added here by the script -->
                </div>
            </div>
        </div>
        <div class="productos" id="cerdoSection">
            <div class="populares">
                <h2 id="Cerdos">Cerdo</h2>
                <div class="listapopulares" id="cerdoList">
                    <!-- Dynamic content for "Cerdo" will be added here by the script -->
                </div>
            </div>
        </div>
        <div class="productos" id="corderoSection">
            <div class="populares">
                <h2 id="Corderos">Cordero</h2>
                <div class="listapopulares" id="corderoList">
                    <!-- Dynamic content for "Cordero" will be added here by the script -->
                </div>
            </div>
        </div>
    </section>
    <?php include '../footer.php'; ?>
    <script src="../../js/carnes.js"></script>
</body>

</html>
