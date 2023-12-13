<!DOCTYPE html>
<html lang="es">

<head>
    <script src="../Js/usuarioYcarrito.js"></script>
    <link rel="stylesheet" href="../CSS/carrito.css">
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/enterprise.js?render=6LdiGSIpAAAAAMV9G3hViCLFzpo1d4dHRmr7mRKt"></script>
    <title>Carrito</title>
    <style>

    </style>
</head>

<body>
    <button onclick="window.history.back()" class="atras">Volver Atrás</button>
    <h1>Carrito de Compras</h1>


    <!-- Agrega esta sección en la parte superior de tu página para mostrar el carrito -->
    <div id="carrito-container">
        <h2>Carrito de Compras</h2>

        <div id="carrito">
            <!-- Aquí se mostrarán los elementos del carrito -->
        </div>


        <!-- Ejemplo de un formulario para agregar productos al carrito -->
        <div class="formulario-carrito">
            <form id="formulario">
                <div class="form__group">
                    <div class="input-container">
                        <label for="nombre">Nombre del Producto:</label>
                        <input type="text" id="nombre" class="form__input" value="Producto de Ejemplo" disabled>
                    </div>
                </div>
                <div class="form__group">
                    <div class="input-container">
                        <label for="precio">Precio:</label>
                        <input type="number" id="precio" class="form__input" step="0.01" value="19.99" disabled>
                    </div>
                </div>
                <div class="form__group">
                    <div class="input-container">
                        <label for="cantidad">Cantidad:</label>
                        <input type="number" id="cantidad" class="form__input" value="1" min="1" disabled>
                    </div>
                </div>
                <div class="form__group">
                    <div class="input-container">
                        <label for="modo-preparacion">Modo de Preparación:</label>
                        <input type="text" id="nombre" class="form__input" value="Cane Troceada" disabled>

                    </div>
                </div>
                <div class="form__group">
                    <div class="input-container">
                        <label for="imagen">Imagen del Producto:</label>
                        <img id="imagen-preview" alt="Vista previa de la imagen" src="https://via.placeholder.com/150">
                    </div>
                </div>
                
            </form>
        </div>

        <div class="formulario-carrito">
            <form id="formulario">
                <div class="form__group">
                    <div class="input-container">
                        <label for="nombre">Nombre del Producto:</label>
                        <input type="text" id="nombre" class="form__input" value="Producto de Ejemplo" disabled>
                    </div>
                </div>
                <div class="form__group">
                    <div class="input-container">
                        <label for="precio">Precio:</label>
                        <input type="number" id="precio" class="form__input" step="0.01" value="19.99" disabled>
                    </div>
                </div>
                <div class="form__group">
                    <div class="input-container">
                        <label for="cantidad">Cantidad:</label>
                        <input type="number" id="cantidad" class="form__input" value="1" min="1" disabled>
                    </div>
                </div>
                <div class="form__group">
                    <div class="input-container">
                        <label for="modo-preparacion">Modo de Preparación:</label>
                        <input type="text" id="nombre" class="form__input" value="Cane Troceada" disabled>

                    </div>
                </div>
                <div class="form__group">
                    <div class="input-container">
                        <label for="imagen">Imagen del Producto:</label>
                        <img id="imagen-preview" alt="Vista previa de la imagen" src="https://via.placeholder.com/150">
                    </div>
                </div>
                
            </form>
        </div>





        <div id="total-carrito">
            <span>Total: </span>
            <span id="total-precio">0,00€</span>
        </div>
    </div>
</body>
</html>