<?php

session_start();
$filename = str_replace('\\', '/', __FILE__);
echo "<script>console.log('Sesión iniciada en " . $filename . "');</script>";

require_once('scripts/languages.php');
require_once('scripts/themeSwitch.php');
require_once('scripts/logout.php');

$urlMain = "mainContent.php";
$urlError = "loginError.php";
$loginPass = "";
$maxAttempts = 3;

if (!isset($_SESSION["remainingAttempts"])) {
    echo "<script>console.log('Nuevo usuario: estableciendo intentos al máximo');</script>";
    $_SESSION["remainingAttempts"] = $maxAttempts;
}

if (isset($_SESSION['loginAttemptsReset']) && $_SESSION['loginAttemptsReset'] === true) {
    echo "<script>console.log('Reseteando los intentos al usuario');</script>";
    $_SESSION["remainingAttempts"] = $maxAttempts;
    unset($_SESSION['loginAttemptsReset']);
}

if (isset($_POST['loginUser'])) {
        $_SESSION['userName'] = $_POST['loginUser'];
}

if (isset($_POST['userSex'])) {
        $_SESSION['userSex'] = $_POST['userSex'];
}
else {
    $_SESSION['userSex'] = "Alguien";
}

if (isset($_POST['loginPass'])) {
    $loginPass = $_POST['loginPass'];
    if ($loginPass == "labubu") {
        $_SESSION['user_logged'] = true;
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
    <title>SIDRACOLA</title>
    <link rel="stylesheet" href="css/base.css">   
    <link rel="stylesheet" href="css/<?php echo $cssFile ?>">
</head>

<body>
  <?php require_once('components/nav1.php') ?>   
    <section>
        <h2>Login</h2>
        <form action="index.php" method="post">
            <input type="text" id="loginUser" name="loginUser" placeholder="<?php echo $text_index['usuario'] ?>">
            <br><br>
            <input type="text" id="userSex" name="userSex" placeholder="<?php echo $text_index['sexo'] ?>">
            <br><br>            
            <input type="password" id="loginPass" name="loginPass" placeholder="<?php echo $text_index['contraseña'] ?>">
            <br><br>
            <button type="submit" value="Submit">Entrar</button>
            <br><br>
            <p></p>
        </form>
        <?php if ($_SESSION["remainingAttempts"] < 3): ?>
            <p>Usuario y/o contraseña incorrectos</p>
            <p>Quedan <?php echo $_SESSION["remainingAttempts"] ?> intentos</p>
        <?php endif; ?>
    </section>
</body>

</html>