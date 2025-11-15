<?php

session_start();
$filename = str_replace('\\', '/', __FILE__);
echo "<script>console.log('Sesión iniciada en " . $filename . "');</script>";

require_once('languages.php');
require_once('themeSwitch.php');

$nota = 0;

if (!empty($_POST['pregunta1'])) {
    $respuesta1 = $_POST['pregunta1'];
    if ($respuesta1 == "resp_b") {
        $nota++;
    }
}

if (!empty($_POST['pregunta2'])) {
    $respuesta2 = $_POST['pregunta2'];
    if ($respuesta2 == "resp_a") {
        $nota++;
    }
}

if (!empty($_POST['pregunta3'])) {
    $respuesta3 = $_POST['pregunta3'];
    if ($respuesta3 == "resp_b") {
        $nota++;
    }
}

if (!empty($_POST['pregunta4'])) {
    $respuesta4 = $_POST['pregunta4'];
    if ($respuesta4 == "resp_c") {
        $nota++;
    }
}

if (!empty($_POST['pregunta5'])) {
    $respuesta5 = $_POST['pregunta5'];
    if ($respuesta5 == "resp_a") {
        $nota++;
    }
}

if (!empty($_POST['pregunta6'])) {
    $respuesta6 = $_POST['pregunta6'];
    if ($respuesta6 == "resp_c") {
        $nota++;
    }
}

if (!empty($_POST['pregunta7'])) {
    $respuesta7 = $_POST['pregunta7'];
    if ($respuesta7 == "resp_b") {
        $nota++;
    }
}

if (!empty($_POST['pregunta8'])) {
    $respuesta8 = $_POST['pregunta8'];
    if ($respuesta8 == "resp_b") {
        $nota++;
    }
}

if (!empty($_POST['pregunta9'])) {
    $respuesta9 = $_POST['pregunta9'];
    if ($respuesta9 == "resp_a") {
        $nota++;
    }
}

if (!empty($_POST['pregunta10'])) {
    $respuesta10 = $_POST['pregunta10'];
    if ($respuesta10 == "resp_c") {
        $nota++;
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>SIDRACOLA</title>
    <link rel="stylesheet" href="css/base.css>">       
    <link rel="stylesheet" href="css/<?php echo $cssFile ?>">
</head>

<body>
    <?php require_once('components/nav1.php') ?>
    <?php require_once('components/nav2.php') ?>
    <section id="formContainer">
        <h2><?php echo $text_quiz['títuloCuestionario'] ?></h2>
        <form action="cuestionario.php" method="POST">
            <fieldset>
                <legend><?php echo $text_quiz['pregunta'] ?> 1</legend>
                <p><?php echo $text_quiz['pregunta1'] ?></p>
                <input type="radio" id="pregunta1_resp_a" name="pregunta1" value="resp_a">
                <label for="pregunta1_resp_a"><?php echo $text_quiz['pregunta1_resp_a'] ?></label><br>
                <input type="radio" id="pregunta1_resp_b" name="pregunta1" value="resp_b">
                <label for="pregunta1_resp_b"><?php echo $text_quiz['pregunta1_resp_b'] ?></label><br>
                <input type="radio" id="pregunta1_resp_c" name="pregunta1" value="resp_c">
                <label for="pregunta1_resp_c"><?php echo $text_quiz['pregunta1_resp_c'] ?></label><br>
            </fieldset>
            <fieldset>
                <legend><?php echo $text_quiz['pregunta'] ?> 2</legend>
                <p><?php echo $text_quiz['pregunta2'] ?></p>
                <input type="radio" id="pregunta2_resp_a" name="pregunta2" value="resp_a">
                <label for="pregunta2_resp_a"><?php echo $text_quiz['pregunta2_resp_a'] ?></label><br>
                <input type="radio" id="pregunta2_resp_b" name="pregunta2" value="resp_b">
                <label for="pregunta2_resp_b"><?php echo $text_quiz['pregunta2_resp_b'] ?></label><br>
                <input type="radio" id="pregunta2_resp_c" name="pregunta2" value="resp_c">
                <label for="pregunta2_resp_c"><?php echo $text_quiz['pregunta2_resp_c'] ?></label><br>
            </fieldset>

            <fieldset>
                <legend><?php echo $text_quiz['pregunta'] ?> 3</legend>
                <p><?php echo $text_quiz['pregunta3'] ?></p>
                <input type="radio" id="pregunta3_resp_a" name="pregunta3" value="resp_a">
                <label for="pregunta3_resp_a"><?php echo $text_quiz['pregunta3_resp_a'] ?></label><br>
                <input type="radio" id="pregunta3_resp_b" name="pregunta3" value="resp_b">
                <label for="pregunta3_resp_b"><?php echo $text_quiz['pregunta3_resp_b'] ?></label><br>
                <input type="radio" id="pregunta3_resp_c" name="pregunta3" value="resp_c">
                <label for="pregunta3_resp_c"><?php echo $text_quiz['pregunta3_resp_c'] ?></label><br>
            </fieldset>

            <fieldset>
                <legend><?php echo $text_quiz['pregunta'] ?> 4</legend>
                <p><?php echo $text_quiz['pregunta4'] ?></p>
                <input type="radio" id="pregunta4_resp_a" name="pregunta4" value="resp_a">
                <label for="pregunta4_resp_a"><?php echo $text_quiz['pregunta4_resp_a'] ?></label><br>
                <input type="radio" id="pregunta4_resp_b" name="pregunta4" value="resp_b">
                <label for="pregunta4_resp_b"><?php echo $text_quiz['pregunta4_resp_b'] ?></label><br>
                <input type="radio" id="pregunta4_resp_c" name="pregunta4" value="resp_c">
                <label for="pregunta4_resp_c"><?php echo $text_quiz['pregunta4_resp_c'] ?></label><br>
            </fieldset>

            <fieldset>
                <legend><?php echo $text_quiz['pregunta'] ?> 5</legend>
                <p><?php echo $text_quiz['pregunta5'] ?></p>
                <input type="radio" id="pregunta5_resp_a" name="pregunta5" value="resp_a">
                <label for="pregunta5_resp_a"><?php echo $text_quiz['pregunta5_resp_a'] ?></label><br>
                <input type="radio" id="pregunta5_resp_b" name="pregunta5" value="resp_b">
                <label for="pregunta5_resp_b"><?php echo $text_quiz['pregunta5_resp_b'] ?></label><br>
                <input type="radio" id="pregunta5_resp_c" name="pregunta5" value="resp_c">
                <label for="pregunta5_resp_c"><?php echo $text_quiz['pregunta5_resp_c'] ?></label><br>
            </fieldset>

            <fieldset>
                <legend><?php echo $text_quiz['pregunta'] ?> 6</legend>
                <p><?php echo $text_quiz['pregunta6'] ?></p>
                <input type="radio" id="pregunta6_resp_a" name="pregunta6" value="resp_a">
                <label for="pregunta6_resp_a"><?php echo $text_quiz['pregunta6_resp_a'] ?></label><br>
                <input type="radio" id="pregunta6_resp_b" name="pregunta6" value="resp_b">
                <label for="pregunta6_resp_b"><?php echo $text_quiz['pregunta6_resp_b'] ?></label><br>
                <input type="radio" id="pregunta6_resp_c" name="pregunta6" value="resp_c">
                <label for="pregunta6_resp_c"><?php echo $text_quiz['pregunta6_resp_c'] ?></label><br>
            </fieldset>

            <fieldset>
                <legend><?php echo $text_quiz['pregunta'] ?> 7</legend>
                <p><?php echo $text_quiz['pregunta7'] ?></p>
                <input type="radio" id="pregunta7_resp_a" name="pregunta7" value="resp_a">
                <label for="pregunta7_resp_a"><?php echo $text_quiz['pregunta7_resp_a'] ?></label><br>
                <input type="radio" id="pregunta7_resp_b" name="pregunta7" value="resp_b">
                <label for="pregunta7_resp_b"><?php echo $text_quiz['pregunta7_resp_b'] ?></label><br>
                <input type="radio" id="pregunta7_resp_c" name="pregunta7" value="resp_c">
                <label for="pregunta7_resp_c"><?php echo $text_quiz['pregunta7_resp_c'] ?></label><br>
            </fieldset>

            <fieldset>
                <legend><?php echo $text_quiz['pregunta'] ?> 8</legend>
                <p><?php echo $text_quiz['pregunta8'] ?></p>
                <input type="radio" id="pregunta8_resp_a" name="pregunta8" value="resp_a">
                <label for="pregunta8_resp_a"><?php echo $text_quiz['pregunta8_resp_a'] ?></label><br>
                <input type="radio" id="pregunta8_resp_b" name="pregunta8" value="resp_b">
                <label for="pregunta8_resp_b"><?php echo $text_quiz['pregunta8_resp_b'] ?></label><br>
                <input type="radio" id="pregunta8_resp_c" name="pregunta8" value="resp_c">
                <label for="pregunta8_resp_c"><?php echo $text_quiz['pregunta8_resp_c'] ?></label><br>
            </fieldset>

            <fieldset>
                <legend><?php echo $text_quiz['pregunta'] ?> 9</legend>
                <p><?php echo $text_quiz['pregunta9'] ?></p>
                <input type="radio" id="pregunta9_resp_a" name="pregunta9" value="resp_a">
                <label for="pregunta9_resp_a"><?php echo $text_quiz['pregunta9_resp_a'] ?></label><br>
                <input type="radio" id="pregunta9_resp_b" name="pregunta9" value="resp_b">
                <label for="pregunta9_resp_b"><?php echo $text_quiz['pregunta9_resp_b'] ?></label><br>
                <input type="radio" id="pregunta9_resp_c" name="pregunta9" value="resp_c">
                <label for="pregunta9_resp_c"><?php echo $text_quiz['pregunta9_resp_c'] ?></label><br>
            </fieldset>

            <fieldset>
                <legend><?php echo $text_quiz['pregunta'] ?> 10</legend>
                <p><?php echo $text_quiz['pregunta10'] ?></p>
                <input type="radio" id="pregunta10_resp_a" name="pregunta10" value="resp_a">
                <label for="pregunta10_resp_a"><?php echo $text_quiz['pregunta10_resp_a'] ?></label><br>
                <input type="radio" id="pregunta10_resp_b" name="pregunta10" value="resp_b">
                <label for="pregunta10_resp_b"><?php echo $text_quiz['pregunta10_resp_b'] ?></label><br>
                <input type="radio" id="pregunta10_resp_c" name="pregunta10" value="resp_c">
                <label for="pregunta10_resp_c"><?php echo $text_quiz['pregunta10_resp_c'] ?></label><br>
            </fieldset>

            <button type="submit">Corregir</button>

        </form>
    </section>
    <section>
        <p>
            <?php
            if ($nota !== 0) {
                echo "Has sacado una nota de $nota";
            }
            ?>
        </p>
    </section>
</body>

</html>