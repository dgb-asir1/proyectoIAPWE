<?php

if(empty($_SESSION["theme"])){
    echo "<script>console.log('No hay tema en sesión, activando tema por defecto (CLARO)'</script>";
    $_SESSION["theme"] = "LIGHT";
}

if (isset($_GET['theme'])) {
    if ($_GET['theme'] == "LIGHT") {
        echo "<script>console.log('Presionado botón de tema claro')</script>";        
        $_SESSION["theme"] = "LIGHT";
    } else {
        echo "<script>console.log('Presionado botón de tema oscuro')</script>";            
        $_SESSION["theme"] = "DARK";
    }
}

if ($_SESSION["theme"] == "LIGHT") {
    echo "<script>console.log('Tema de sesión claro - cambiando CSS')</script>";        
    $cssFile = "lightTheme.css";
} else if ($_SESSION["theme"] == "DARK") {
    echo "<script>console.log('Tema de sesión oscuro - cambiando CSS')</script>";       
    $cssFile = "darkTheme.css";
}
