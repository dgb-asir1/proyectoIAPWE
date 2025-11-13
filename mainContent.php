<?php

#$userLogged;

$language = "ESP";

$spanishTexts = [
    "inicio" => "Inicio",
    "info" => "Informaci..."
];


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
            <button id="langBtnEs"><img src="./img/flag_Spain.png"></img></button>
            <button id="langBtnEng"><img src="./img/flag_USA.png"></img></button>
            <button id="langBtnFr"><img src="./img/flag_France.png"></img></button>
        </div>
        <div id="logoutBtn">
            <button id=""><a href="index.php">SALIR</a></button>
        </div>
    </nav>
    <nav>
        <div id="logo"><button><img src="./img/logo.png"></img></button></div>
        <div id="mainBtns">
            <button>INICIO</button>
            <button>CONTACTO</button>
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
            <summary><h2>Nosotros</h2></summary>
            <p>Here is the content!</p>
        </details>
        <details>
            <summary><h2>Nuestro producto</h2></summary>
            <p>Here is the content!</p>
        </details>
        <details>
            <summary><h2>Ven a vernos</h2></summary>
            <p>Here is the content!</p>
        </details>
    </section>
</body>

</html>