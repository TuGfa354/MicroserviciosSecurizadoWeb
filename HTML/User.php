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



  
    <form action="login_procesar.php" method="post">
    <h1>Iniciar Sesión</h1>
    <div class="container">
      <div class="form__group">
        <input type="text" id="loginUsername" name="loginUsername" class="form__input" placeholder=" " required>
        <label for="loginUsername" class="form__label">Nombre de usuario:</label>
        <span class="form__line"></span>
      </div>

    <div class="form__group">
      <input type="password" id="loginPassword" name="loginPassword" class="form__input" placeholder=" " required>
      <label for="loginPassword" class="form__label">Contraseña:</label>
      <span class="form__line"></span>
    </div> 
      
      <button type="submit" class="form__submit">Iniciar Sesión</button>
      <p class="link__registrar">¿No tienes cuenta? <a href="http:../HTML/register.php">Regístrate</a></p>
    </form>
  </div>

</body>
</html>
