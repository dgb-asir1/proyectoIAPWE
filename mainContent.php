<?php

$textSpanish = [
    "inicio" => "Inicio",
    "info" => "Información",
    "nosotros" => "Nosotros",
    "nuestro_producto" => "Nuestro producto",
    "ven_a_vernos" => "Ven a vernos",
    "salir" => "Salir",
    "cuestionario" => "Cuestionario"
];

$textEnglish = [
    "inicio" => "Home",
    "info" => "Information",
    "nosotros" => "About Us",
    "nuestro_producto" => "Our Product",
    "ven_a_vernos" => "Come Visit Us",
    "salir" => "Logout",
    "cuestionario" => "Quiz"
];

$textFrench = [
    "inicio" => "Accueil",
    "info" => "Information",
    "nosotros" => "À propos de nous",
    "nuestro_producto" => "Notre produit",
    "ven_a_vernos" => "Venez nous voir",
    "salir" => "Déconnexion",
    "cuestionario" => "Questionnaire"
];

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
                <h2>Nuestro producto</h2>
            </summary>
            <p>Here is the content!</p>
        </details>
        <details>
            <summary>
                <h2>Ven a vernos</h2>
            </summary>
            <p>Here is the content!</p>
        </details>
    </section>
</body>

</html>