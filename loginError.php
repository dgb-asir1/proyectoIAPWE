<?php 
session_start();
$filename = str_replace('\\', '/', __FILE__);
echo "<script>console.log('Sesión iniciada en " . $filename . "');</script>";

$_SESSION['loginAttemptsReset'] = true;
echo "<script>console.log('Reseteados los intentos de login');</script>";

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
            <button>INICIO</button>
            <button><a href="cuestionario.php">CUESTIONARIO</a></button>
        </div>
        <div id="themeBtn">
            <button><img src="./img/themeSwitch.png"></img></button>
        </div>
    </nav>
    <section>
        <h3>Error</h3>
        <p>Ha excedido el número máximo permitido de intentos de sesión</p>
        <button><a href="index.php">Volver al login</a></button>
    </section>
</body>

</html>