<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="stylesheet" href="../CSS/admin.css">
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400;700&display=swap" rel="stylesheet">
    <script
        src="https://www.google.com/recaptcha/enterprise.js?render=6LdiGSIpAAAAAMV9G3hViCLFzpo1d4dHRmr7mRKt"></script>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/jpg" href="../img/logo/logoCarneNebrija.png" />


    <title>Carrito</title>
    <style>

    </style>
</head>

<body>
    <button onclick="window.location.href = 'sobrenosotros.php'" class="atras">Volver Atrás</button>
    <div id="carrito-padre">
        <h1>Carrito de Compras</h1>
    </div>

    <!-- Agrega esta sección en la parte superior de tu página para mostrar el carrito -->
    <div id="carrito-container">

        <div id="carrito">
            <!-- Aquí se mostrarán los elementos del carrito -->
        </div>

        <!-- Ejemplo de un formulario para agregar productos al carrito -->
        <div class="formulario-carrito">
            <form id="formulario">
                <div class="form__group">
                    <div class="input-container">
                        <label for="nombre">Nombre del Producto:</label>
                        <div class="form__input-container">
                            <input type="text" id="nombre" class="form__input">
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="input-container">
                        <label for="precio">Precio:</label>
                        <div class="form__input-container">
                            <input type="number" id="precio" class="form__input" step="0.01">
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="input-container">
                        <label for="categoria">Categoría:</label>
                        <div class="form__input-container">
                            <input type="text" id="categoria" class="form__input">
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="input-container">
                        <label for="modo-preparacion">Modo de Preparación:</label>
                        <div class="form__input-container">
                            <select id="modo-preparacion" class="form__input">
                            </select>


                        </div>
                    </div>
                </div>

                <!-- Mover la imagen a la derecha del precio -->
                <div class="form__group">
                    <div class="input-container">
                        <label for="urlIndividual">Url Individual:</label>
                        <div class="form__input-container">
                            <input type="text" id="urlIndividual" class="form__input">
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="input-container">
                        <label for="urlFeed">Url Feed:</label>
                        <div class="form__input-container">
                            <input type="text" id="urlFeed" class="form__input">
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="input-container">
                        <button type="button" onclick="sendForm()">Añadir a la base de datos</button>
                    </div>
                </div>


            </form>
        </div>
    </div>
    <div class="form__group">
        <div class="input-container">
            <button type="button" onclick="listProductos()">Listar productos</button>
        </div>
    </div>
    <div id="formulario-container">

    </div>
    <!-- <div id="carrito-container"> -->

    <!-- <div id="carrito"> -->
    <!-- Aquí se mostrarán los elementos del carrito -->
    <!-- </div> -->





    <script src="../js/admin.js"></script>
</body>

</html>