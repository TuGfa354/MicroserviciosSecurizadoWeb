<!DOCTYPE html>
<html lang="es">

<head>
  <link rel="stylesheet" href="../CSS/usuario.css">
  <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400;700&display=swap" rel="stylesheet">
  <script src="https://www.google.com/recaptcha/enterprise.js?render=6LdiGSIpAAAAAMV9G3hViCLFzpo1d4dHRmr7mRKt"></script>
  <script src="../js/login.js" defer></script>
  <link rel="icon" type="image/jpg" href="../img/logo/logoCarneNebrija.png />




  <meta charset="UTF-8">
  <title>Registro e Inicio de Sesión</title>

</head>

<body>
  <button onclick="window.history.back()" class="atras">Volver Atrás</button>




  <form action="#" method="post" id="loginForm">
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

        <button type="button" class="form__submit">Iniciar Sesión</button>
        <p class="link__registrar">¿No tienes cuenta? <a href="http:../HTML/register.php">Regístrate</a></p>
    </div>
</form>

</body>

</html>