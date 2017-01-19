<?php
include("conexion.php");
$mail = $_POST["mail"];
$pass = sha1($_POST["pass"]);

$sql = connect();
$query = "SELECT mail, pass from usuario where mail = '" . $mail . "' and pass ='" . $pass . "';";
$result = $sql->query($query);

$num = $result->num_rows;

$sql->close();
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
            <h3>Registro</h3>
        </div>
        <div data-role="content">
            <?php
            if($num==1) {
	        session($mail);
            }
            else {
		session_start();
		if(isset($_SESSION["mail"])) {
		    header("location:home.php");
                }
		else {
                    echo "Usuario y/o contraseña incorrectos";
                }
            }
            ?>
        </div>
	<form data-ajax="false" method="post" action="index.php">
            <input type="submit" value="Regresar">
        </form>
    </div>
</body>
</html>
