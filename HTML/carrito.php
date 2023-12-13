<!DOCTYPE html>
<html lang="es">
<head>
    <script src="../Js/usuarioYcarrito.js"></script>
    <link rel="stylesheet" href="../CSS/usuario.css">
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
            <label for="nombre">Nombre del Producto</label>
            <input type="text" id="nombre" class="form__input" value="Producto de Ejemplo" disabled>
        </div>
        <div class="form__group">
            <label for="precio">Precio</label>
            <input type="number" id="precio" class="form__input" step="0.01" value="19.99" disabled>
        </div>
        <div class="form__group">
            <label for="cantidad">Cantidad</label>
            <input type="number" id="cantidad" class="form__input" value="1" min="1" disabled>
        </div>

        
        
        <button type="button" class="form__submit" onclick="agregarProducto()">Agregar al Carrito</button>
        <div id="total-carrito">
            
        <span>Total: </span>
        <span id="total-precio">0,00€</span>
    </div>
</div>
    </form>
</div>

<script src="carrito.js"></script>

    <!-- Agrega esta sección en la parte superior de tu página para mostrar el carrito -->
<!-- Agrega esta sección en la parte superior de tu página para mostrar el carrito -->
<!-- Agrega esta sección en la parte superior de tu página para mostrar el carrito -->

        <!-- Aquí se mostrarán los elementos del carrito -->
        <!-- Ejemplo de un elemento en el carrito -->
        <!-- <div class="item-carrito">
            <img class="producto-imagen" src="imagen_producto.jpg" alt="Nombre del Producto">
            <div class="producto-info">
                <span class="nombre">Nombre del Producto</span>
                <span class="precio">10,99€</span>
                <span class="cantidad">Cantidad: 1</span>
                <span class="precio-total">Total: 10,99€</span>
            </div>
            <span class="eliminar">Eliminar</span>
        </div> -->
    </div>

</div> 

<!-- Ejemplo de un formulario para agregar productos al carrito -->
<div class="formulario-carrito">
    <form id="formulario">
        <div class="form__group">
            <label for="nombre">Nombre del Producto</label>
            <input type="text" id="nombre" class="form__input" disabled>
        </div>
        <div class="form__group">
            <label for="precio">Precio</label>
            <input type="number" id="precio" class="form__input" step="0.01" disabled>
        </div>
        <div class="form__group">
            <label for="cantidad">Cantidad</label>
            <input type="number" id="cantidad" class="form__input" value="1" min="1" disabled>
        </div>
        <div class="form__group">
            <label for="imagen">Imagen del Producto</label>
            <img id="imagen-preview" alt="Vista previa de la imagen" style="max-width: 100%;">
        </div>
    </form>
</div>

<!-- Ejemplo de un formulario para agregar productos al carrito -->
<div class="formulario-carrito">
    <form id="formulario">
        <div class="form__group">
            <label for="nombre">Nombre del Producto</label>
            <input type="text" id="nombre" class="form__input" value="Producto de Ejemplo" disabled>
        </div>
        <div class="form__group">
            <label for="precio">Precio</label>
            <input type="number" id="precio" class="form__input" step="0.01" value="19.99" disabled>
        </div>
        <div class="form__group">
            <label for="cantidad">Cantidad</label>
            <input type="number" id="cantidad" class="form__input" value="1" min="1" disabled>
        </div>
        <div class="form__group">
            <label for="modo-preparacion">Modo de Preparación</label>
            <select id="modo-preparacion" class="form__input">
                <option value="troceada">Cane Troceada</option>
                <option value="picada">Cane Picada</option>
            </select>
        </div>
        <div class="form__group">
            <label for="imagen">Imagen del Producto</label>
            <img id="imagen-preview" alt="Vista previa de la imagen" src="https://via.placeholder.com/150">
        </div>
    </form>
</div>

<!-- Ejemplo de un formulario para agregar productos al carrito -->
<div class="formulario-carrito">
    <form id="formulario">
        <div class="form__group">
            <img id="imagen-preview" alt="Vista previa de la imagen" src="https://via.placeholder.com/150">
        </div>
        <div class="form__group">
            <label for="nombre">Nombre del Producto</label>
            <input type="text" id="nombre" class="form__input" value="Producto de Ejemplo" disabled>
        </div>
        <div class="form__group">
            <label for="precio">Precio</label>
            <input type="number" id="precio" class="form__input" step="0.01" value="19.99" disabled>
        </div>
        <div class="form__group">
            <label for="cantidad">Cantidad</label>
            <input type="number" id="cantidad" class="form__input" value="1" min="1" disabled>
        </div>
        <div class="form__group">
            <label for="modo-preparacion">Modo de Preparación</label>
            <select id="modo-preparacion" class="form__input">
                <option value="troceada">Cane Troceada</option>
                <option value="picada">Cane Picada</option>
            </select>
        </div>
        <button type="button" class="form__submit" onclick="agregarProducto()">Agregar al Carrito</button>
    </form>
</div>



</body>
</html>