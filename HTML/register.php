<!DOCTYPE html>
<html lang="es">
<head>
  
<script src="../Js/usuarioYcarrito.js"></script>
    <link rel="stylesheet" href="../CSS/usuario.css">
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/enterprise.js?render=6LdiGSIpAAAAAMV9G3hViCLFzpo1d4dHRmr7mRKt"></script>


  <meta charset="UTF-8">
  <title>Registro e Inicio de Sesión</title>

</head>
<body>
<button onclick="window.history.back()" class="atras">Volver Atrás</button>

<form action="registro_procesar.php" method="post">
<h1>Registro</h1>

  <div class="container">
    <div class="form__group">
   
      <input type="text" id="username" name="username" class="form__input" placeholder=" " required>
      <label for="username" class="form__label">Nombre de usuario:</label>
      <span class="form__line"></span>
    </div>
      
   
      
    <div class="form__group">
      <input type="password" id="password" name="password" class="form__input" placeholder=" " required>
      <label for="password" class="form__label">Contraseña:</label>
      <span class="form__line"></span>
    </div>

      <div class="g-recaptcha" data-sitekey="6LcLKCIpAAAAANZlaGoXg8juty-kjjWEsC7Pi5A3
"></div><br>
</form>
      <button type="submit" class="form__submit">Registrarse</button>  
  </div>


  
    <
  </div>

</body>
</html>
