<?php

require_once('languages.php');

session_start();
$filename = str_replace('\\', '/', __FILE__);
echo "<script>console.log('Sesión iniciada en " . $filename . "');</script>";

if (isset($_GET['lang'])) {
    $language = $_GET['lang'];
} else {
    $language = 'ESP';
}

if ($language == "ESP") {
    $texts = $textSpanish;
} elseif ($language == "ENG") {
    $texts = $textEnglish;
} elseif ($language == "FRA") {
    $texts = $textFrench;
} 


?>
<!DOCTYPE html>
<html>

<head>
    <title>SIDRACOLA</title>
    <link rel="stylesheet" href="css/allStyles.css">
</head>

<body>
    <nav id="nav1">
        <div id="languageBtns">
            <form action="" method="get">
                <input type="hidden" name="lang" value="ESP">
                <button id="langBtnEs" type="submit"><img src="./img/flag_Spain.png"></button>
            </form>

            <form action="" method="get">
                <input type="hidden" name="lang" value="ENG">
                <button id="langBtnEng" type="submit"><img src="./img/flag_USA.png"></button>
            </form>

            <form action="" method="get">
                <input type="hidden" name="lang" value="FRA">
                <button id="langBtnFr" type="submit"><img src="./img/flag_France.png"></button>
            </form>
        </div>

        </div>
    </nav>
    <nav>
        <div id="logo"><button><img src="./img/logo.png"></img></button></div>
        <div id="mainBtns">
            <button><a href="index.php">INICIO</a></button>
            <button><a href="cuestionario.php">CUESTIONARIO</a></button>
        </div>
        <div id="themeBtn">
            <button><img src="./img/themeSwitch.png"></img></button>
        </div>
    </nav>
    <section id="mainImg">
        <img src="img/sidracola.jpg"></img>
    </section>
    <section id="mainText">
        <details>
            <summary>
                <h2><?php echo $texts['nosotros'] ?></h2>
            </summary>
            <p>Here is the content!</p>
        </details>
        <details>
            <summary>
                <h2><?php echo $texts['nuestro_producto'] ?></h2>
            </summary>
            <p>Here is the content!</p>
        </details>
        <details>
            <summary>
                <h2><?php echo $texts['ven_a_vernos'] ?></h2>
            </summary>
            <p>Here is the content!</p>
        </details>
    </section>
</body>

</html>