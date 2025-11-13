<?php 

$nota = 0;

if (!empty($_POST['pregunta1'])) {
    $respuesta1 = $_POST['pregunta1'];
    if ($respuesta1 == "GET") {
        $nota++;
    }
}

if (!empty($_POST['pregunta2'])) {
    $respuesta2 = $_POST['pregunta2'];
    if ($respuesta2 == "") {
        $nota++;
    }
}

if (!empty($_POST['pregunta3'])) {
    $respuesta3 = $_POST['pregunta3'];
    if ($respuesta3 == "") {
        $nota++;
    }
}

if (!empty($_POST['pregunta4'])) {
    $respuesta4 = $_POST['pregunta4'];
    if ($respuesta4 == "") {
        $nota++;
    }
}

if (!empty($_POST['pregunta5'])) {
    $respuesta5 = $_POST['pregunta5'];
    if ($respuesta5 == "") {
        $nota++;
    }
}

if (!empty($_POST['pregunta6'])) {
    $respuesta6 = $_POST['pregunta6'];
    if ($respuesta6 == "") {
        $nota++;
    }
}

if (!empty($_POST['pregunta7'])) {
    $respuesta7 = $_POST['pregunta7'];
    if ($respuesta7 == "") {
        $nota++;
    }
}

if (!empty($_POST['pregunta8'])) {
    $respuesta8 = $_POST['pregunta8'];
    if ($respuesta8 == "") {
        $nota++;
    }
}

if (!empty($_POST['pregunta9'])) {
    $respuesta9 = $_POST['pregunta9'];
    if ($respuesta9 == "") {
        $nota++;
    }
}

if (!empty($_POST['pregunta10'])) {
    $respuesta10 = $_POST['pregunta10'];
    if ($respuesta10 == "") {
        $nota++;
    }
}



?>
<!DOCTYPE html>
<html>

<head>
    <title>Sidra-Cola</title>
    <link rel="stylesheet" href="css/allStyles.css">
</head>

<body>
    <section id="formContainer">
        <h2>Cuestionario</h2>
        <form action="cuestionario.php" method="POST">
            <fieldset>
                <legend>Pregunta 1</legend>
                <p>¿Cuál de los dos protocolos envía en texto plano?</p>
                <input type="radio" id="pregunta1_a" name="pregunta1" value="GET">
                <label for="pregunta1_a">GET</label>
                <input type="radio" id="pregunta1_b" name="pregunta1" value="POST">
                <label for="pregunta1_b">POST</label>
            </fieldset>

            <fieldset>
                <legend>Pregunta 2</legend>
                <input type="radio" id="pregunta2_a" name="pregunta2" value="opcion_a">
                <label for="pregunta2_a"></label>

                <input type="radio" id="pregunta2_b" name="pregunta2" value="opcion_b">
                <label for="pregunta2_b"></label>
            </fieldset>

            <fieldset>
                <legend>Pregunta 3</legend>
                <input type="radio" id="pregunta3_a" name="pregunta3" value="opcion_a">
                <label for="pregunta3_a"></label>

                <input type="radio" id="pregunta3_b" name="pregunta3" value="opcion_b">
                <label for="pregunta3_b"></label>
            </fieldset>

            <fieldset>
                <legend>Pregunta 4</legend>
                <input type="radio" id="pregunta4_a" name="pregunta4" value="opcion_a">
                <label for="pregunta4_a"></label>

                <input type="radio" id="pregunta4_b" name="pregunta4" value="opcion_b">
                <label for="pregunta4_b"></label>
            </fieldset>

            <fieldset>
                <legend>Pregunta 5</legend>
                <input type="radio" id="pregunta5_a" name="pregunta5" value="opcion_a">
                <label for="pregunta5_a"></label>

                <input type="radio" id="pregunta5_b" name="pregunta5" value="opcion_b">
                <label for="pregunta5_b"></label>
            </fieldset>

            <fieldset>
                <legend>Pregunta 6</legend>
                <input type="radio" id="pregunta6_a" name="pregunta6" value="opcion_a">
                <label for="pregunta6_a"></label>

                <input type="radio" id="pregunta6_b" name="pregunta6" value="opcion_b">
                <label for="pregunta6_b"></label>
            </fieldset>

            <fieldset>
                <legend>Pregunta 7</legend>
                <input type="radio" id="pregunta7_a" name="pregunta7" value="opcion_a">
                <label for="pregunta7_a"></label>

                <input type="radio" id="pregunta7_b" name="pregunta7" value="opcion_b">
                <label for="pregunta7_b"></label>
            </fieldset>

            <fieldset>
                <legend>Pregunta 8</legend>
                <input type="radio" id="pregunta8_a" name="pregunta8" value="opcion_a">
                <label for="pregunta8_a"></label>

                <input type="radio" id="pregunta8_b" name="pregunta8" value="opcion_b">
                <label for="pregunta8_b"></label>
            </fieldset>

            <fieldset>
                <legend>Pregunta 9</legend>
                <input type="radio" id="pregunta9_a" name="pregunta9" value="opcion_a">
                <label for="pregunta9_a"></label>

                <input type="radio" id="pregunta9_b" name="pregunta9" value="opcion_b">
                <label for="pregunta9_b"></label>
            </fieldset>

            <fieldset>
                <legend>Pregunta 10</legend>
                <input type="radio" id="pregunta10_a" name="pregunta10" value="opcion_a">
                <label for="pregunta10_a"></label>

                <input type="radio" id="pregunta10_b" name="pregunta10" value="opcion_b">
                <label for="pregunta10_b"></label>
            </fieldset>

            <button type="submit">Corregir</button>

        </form>
    </section>
    <section>
        <p>
            <?php
                if($nota!==0){
                    echo "Has sacado una nota de $nota";
                }
            ?>
        </p>
    </section>
</body>

</html>