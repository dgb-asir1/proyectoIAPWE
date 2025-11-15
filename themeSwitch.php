<?php 

if (isset($_GET['theme'])) {
    if ($_GET['theme'] == "LIGHT") {
        $cssFile = "lightTheme.css";
    } else {
        $cssFile = "darkTheme.css";
    }
} else {
    echo "<script>console.log('Activando tema por defecto');</script>";    
    $cssFile = "lightTheme.css";
}

?>