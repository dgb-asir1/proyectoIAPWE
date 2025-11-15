<nav id="nav2">
    <div id="logo"><button><img src="./img/logo.png"></img></button></div>
    <div id="mainBtns">
        <button><a href="mainContent.php">
                <?php echo $text_main['inicio'] ?>
            </a></button>
        <button><a href="cuestionario.php">
                <?php echo $text_main['cuestionario'] ?>
            </a></button>
    </div>
    <div id="themeBtn">
        <form action="" method="get">
            <input type="hidden" name="theme" value=<?php
                                                    if (isset($_GET['theme'])) {
                                                        $_SESSION["theme"] == 'LIGHT' ? $themeBtnValue = "DARK" : $themeBtnValue = "LIGHT";
                                                    } else {
                                                        $themeBtnValue = "DARK";
                                                    }
                                                    echo $themeBtnValue;
                                                    ?>>
            <button type="submit"><img src="./img/themeSwitch.png"></img></button>
        </form>
    </div>
</nav>