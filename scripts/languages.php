<?php

$filename = str_replace('\\', '/', __FILE__);
echo "<script>console.log('Cargado " . $filename . "');</script>";

require_once('translations/translations.php');

if(empty($_SESSION["lang"])){
    echo "<script>console.log('No hay idioma en sesión, activando idioma por defecto Español')</script>";
    $_SESSION['lang'] = 'ESP';
}
else {
    echo "<script>console.log('Idioma de sesión = ".$_SESSION['lang']."')</script>";
}

if (isset($_GET['lang'])) {  
    $_SESSION['lang'] = $_GET['lang'];
    echo "<script>console.log('Idioma de sesión cambiado a ".$_SESSION['lang']."')</script>";
}

if ($_SESSION['lang'] == "ESP") {  
    $text_index = $text_index_spanish;
    $text_main = $text_main_spanish;
    $text_quiz = $text_quiz_spanish;
} elseif ($_SESSION['lang'] == "ENG") {
    $text_index = $text_index_english;
    $text_main = $text_main_english;
    $text_quiz = $text_quiz_english;
} elseif ($_SESSION['lang'] == "FRA") {
    $text_index = $text_index_french;
    $text_main = $text_main_french;
    $text_quiz = $text_quiz_french;
}

?>