<nav id="nav1">
    <div id=userName>
    <?php if(isset($_SESSION['user_logged']) && $_SESSION['user_logged'] == true) :?>
        <p> <?php echo $_SESSION['userName'] .", eres ".$_SESSION['userSex'] ."."; ?> </p>
    <?php endif ?>        
    </div>
    <div id="languageBtns">
        <form action="" method="get">
            <input type="hidden" name="lang" value="ESP">
            <button id="langBtnEs" type="submit"><img src="./img/flag_spain.png"></button>
        </form>

        <form action="" method="get">
            <input type="hidden" name="lang" value="ENG">
            <button id="langBtnEng" type="submit"><img src="./img/flag_usa.png"></button>
        </form>

        <form action="" method="get">
            <input type="hidden" name="lang" value="FRA">
            <button id="langBtnFr" type="submit"><img src="./img/flag_france.png"></button>
        </form>

        <form action="" method="get">
            <input type="hidden" name="lang" value="RUS">
            <button id="langBtnFr" type="submit"><img src="./img/flag_russia.png"></button>
        </form>        

    </div>
    <div>
        <form action="" method="POST">
            <input type="hidden" name="logout">
            <?php echo (!empty($_SESSION['user_logged'])) ? "<button id='logoutBtn' type='submit'>Logout</button>" : "" ?>
        </form>       
    </div>
</nav>
