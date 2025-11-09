<?php 

$url = "mainContent.php";
$loginPass = "";
$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $loginPass = $_POST['loginPass'];
    if($loginPass == "labubu"){
        header('Location: '.$url);
        die();
    }
    else {
        $errorText = "Contraseña errónea";
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>LABUBAI</title>
         <link rel="stylesheet" href="css/allStyles.css"> 
    </head>
    <body>
        <section id="mainImg">
            <img></img>
        </section>        
        <section id="mainText">
            <h2>BIENVENIDO</h2>
            <form action="index.php" method="post">
                <label for="loginPass">Introduce la contraseña</label>
                <br><br>         
                <!--password--><input type="text" id="loginPass" name="loginPass">
                <br><br>
                <button  type="submit" value="Submit">Entrar</button>
                <br><br>
                <p></p>
            </form>        
        </section>
    </body>
</html> 

