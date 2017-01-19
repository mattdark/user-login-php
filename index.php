<?php
session_start();
if(isset($_SESSION["mail"])) {
    header("location:home.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>

<div data-role="tabs" id="tabs">
  <div data-role="navbar">
    <ul>
      <li><a href="#one" data-ajax="false">Inicio</a></li>
      <li><a href="#two" data-ajax="false">Registro</a></li>
    </ul>
  </div>
  <div id="one" class="ui-body-d ui-content">
    <form data-ajax="false" method="post" action="inicio.php">
      <label for="mail">E-mail:</label>
      <input type="text" name="mail" id="mail" required="required">
      <label for="pass">Contraseña:</label>
      <input type="password" name="pass" id="pass" required="required">
      <input type="submit" value="Inicio">
    </form>
  </div>
  <div id="two" class="ui-body-d ui-content">
    <form data-ajax="false" method="post" action="registro.php">
      <label for="mail">E-mail:</label>
      <input type="text" name="mail" id="mail" required="required">
      <label for="pass">Contraseña:</label>
      <input type="password" name="pass" id="pass" required="required">
      <input type="submit" value="Registro">
    </form>
  </div>
</div>

</body>
</html>
