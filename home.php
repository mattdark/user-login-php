<?php
session_start();
if(!isset($_SESSION["mail"])) {
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>jQM Complex Demo</title>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0"/>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script> 
</head>
<body>
    <div data-role="page" id="second">
        <div data-theme="a" data-role="header">
            <h3>Bienvenido</h3>
        </div>
        <div data-role="content">
            Bienvenido <?php if(isset($_SESSION["mail"])){echo $_SESSION["mail"];}?>
        </div>
	<form data-ajax="false" method="post" action="cerrar.php">
            <input type="submit" value="Cerrar Sesión">
        </form>
    </div>
</body>
</html>
