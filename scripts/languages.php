<?php

require_once('translations/translations.php');

if (isset($_GET['lang'])) {
    $language = $_GET['lang'];
} else {
    $language = 'ESP';
}

if ($language == "ESP") {
    $text_index = $text_index_spanish;
    $text_main = $text_main_spanish;
    $text_quiz = $text_quiz_spanish;
} elseif ($language == "ENG") {
    $text_index = $text_index_english;
    $text_main = $text_main_english;
    $text_quiz = $text_quiz_english;
} elseif ($language == "FRA") {
    $text_index = $text_index_french;
    $text_main = $text_main_french;
    $text_quiz = $text_quiz_french;
}

?>