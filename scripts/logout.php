<?php

$filename = str_replace('\\', '/', __FILE__);
echo "<script>console.log('Cargado " . $filename . "');</script>";

$urlIndex = "index.php";

if (isset($_POST['logout'])){
    echo "<script>console.log('Botón de logout presionado');</script>";    
    session_destroy();
    header('Location: ' . $urlIndex);
    die();
}


?>