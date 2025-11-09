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
    <title>LABUBAI</title>
    <link rel="stylesheet" href="css/allStyles.css">
</head>

<body>
    <nav id="nav1">
        <div id="languageBtns">
            <button id="langBtnEs"></button>
            <button id="langBtnEng"></button>
            <button id="langBtnFr"></button>
        </div>
        <div id="logoutBtnDiv">
            <button id="">LOGOUT</button>
        </div>
    </nav>
    <nav>
        <div id="logo"><img src="./img/logo.png"></div>
        <div id="mainBtns">
            <button>INICIO</button>
            <button>CONTACTO</button>
        </div>
        <div id="themeBtns">
            <button><img src="./img/themeSwitch.png"></button>
        </div>
    </nav>
    <section id="mainImg">
        <img></img>
    </section>
    <section id="mainText">
        <details>
            <summary><h2>NUESTRA EMPRESA</h2></summary>
            <p>Here is the content!</p>
        </details>
        <details>
            <summary><h2>NUESTRO PRODUCTO</h2></summary>
            <p>Here is the content!</p>
        </details>
        <details>
            <summary><h2>NUESTRO PRODUCTO</h2></summary>
            <p>Here is the content!</p>
        </details>
    </section>
</body>

</html>