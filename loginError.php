<?php 
session_start();
$filename = str_replace('\\', '/', __FILE__);
echo "<script>console.log('Sesión iniciada en " . $filename . "');</script>";

$_SESSION['loginAttemptsReset'] = true;
echo "<script>console.log('Reseteados los intentos de login');</script>";

require_once('scripts/languages.php');
require_once('scripts/themeSwitch.php');
require_once('scripts/logout.php');

?>

<!DOCTYPE html>
<html>

<head>
    <title>SIDRACOLA</title>
    <link rel="stylesheet" href="css/base.css">       
    <link rel="stylesheet" href="css/lightTheme.css">
</head>

<body> 
    <section>
        <h3>Error</h3>
        <p>Ha excedido el número máximo permitido de intentos de sesión</p>
        <button><a href="index.php">Volver al login</a></button>
    </section>
</body>

</html>