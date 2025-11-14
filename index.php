<?php

$urlMain = "mainContent.php";
$urlError = "loginError.php";
$loginPass = "";
$maxAttempts = 3;

session_start();
$filename = str_replace('\\', '/', __FILE__);
echo "<script>console.log('Sesión iniciada en " . $filename . "');</script>";

if (!isset($_SESSION["remainingAttempts"])) {
    echo "<script>console.log('Nuevo usuario: estableciendo intentos al máximo');</script>";
    $_SESSION["remainingAttempts"] = $maxAttempts;
}

if (isset($_SESSION['loginAttemptsReset']) && $_SESSION['loginAttemptsReset'] === true) {
    echo "<script>console.log('Reseteando los intentos al usuario');</script>";
    $_SESSION["remainingAttempts"] = $maxAttempts;
    unset($_SESSION['loginAttemptsReset']);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $loginPass = $_POST['loginPass'];
    if ($loginPass == "labubu") {
        header('Location: ' . $urlMain);
        die();
    } else {
        $_SESSION["remainingAttempts"]--;
    }
}

if ($_SESSION["remainingAttempts"] <= 0) {
    header('Location: ' . $urlError);
}


?>

<!DOCTYPE html>
<html>

<head>
    <title>Sidra-Cola</title>
    <link rel="stylesheet" href="css/allStyles.css">
</head>

<body>
    <section id="mainImg">
        <img></img>
    </section>
    <section id="mainText">
        <h2>Login</h2>
        <form action="index.php" method="post">
            <label for="loginPass">Introduce la contraseña</label>
            <br><br>
            <!--password--><input type="text" id="loginPass" name="loginPass">
            <br><br>
            <button type="submit" value="Submit">Entrar</button>
            <br><br>
            <p></p>
        </form>
        <?php
        if ($_SESSION["remainingAttempts"] < 3) {
            echo "<p>Usuario y/o contraseña incorrectos</p>";
            echo "<p>Quedan " . $_SESSION["remainingAttempts"] . " intentos";
        }
        ?>
    </section>
</body>

</html>