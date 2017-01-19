<?php
function connect() {
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'sesion';
    $conn = new mysqli($host, $user, $pass, $db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}
function session($mail) {
    session_start();
    $_SESSION["mail"] = $mail;
    header("location:home.php");
}
?>
