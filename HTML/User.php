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
<button onclick="window.history.back()">Volver Atrás</button>

  <div class="container">
    <h1>Registro</h1>
    <form action="registro_procesar.php" method="post">
      <label for="username">Nombre de usuario:</label>
      <input type="text" id="username" name="username" required>
      
      <label for="email">Correo electrónico:</label>
      <input type="email" id="email" name="email" required>
      
      <label for="password">Contraseña:</label>
      <input type="password" id="password" name="password" required>
      <div class="g-recaptcha" data-sitekey="6LcLKCIpAAAAANZlaGoXg8juty-kjjWEsC7Pi5A3
"></div><br>
      
      <button type="submit">Registrarse</button>
    </form>

    <h1>Iniciar Sesión</h1>
    <form action="login_procesar.php" method="post">
      <label for="loginUsername">Nombre de usuario:</label>
      <input type="text" id="loginUsername" name="loginUsername" required>
      
      <label for="loginPassword">Contraseña:</label>
      <input type="password" id="loginPassword" name="loginPassword" required>
      
      <button type="submit">Iniciar Sesión</button>
    </form>
  </div>

</body>
</html>
