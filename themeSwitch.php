<?php

if(empty($_SESSION["theme"])){
    $_SESSION["theme"] == "LIGHT";
}

if (isset($_GET['theme'])) {
    if ($_GET['theme'] == "LIGHT") {
        $_SESSION["theme"] = "LIGHT";
    } else {
        $_SESSION["theme"] = "DARK";
    }
}

if ($_SESSION["theme"] == "LIGHT") {
    $cssFile = "lightTheme.css";
} else if ($_SESSION["theme"] == "DARK") {
    $cssFile = "darkTheme.css";
}
