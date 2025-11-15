<?php

session_start();
$filename = str_replace('\\', '/', __FILE__);
echo "<script>console.log('Sesión iniciada en " . $filename . "');</script>";

require_once('scripts/languages.php');
<<<<<<< HEAD
require_once('scripts/themeSwitch.php');
=======
require_once('scripts/componentesthemeSwitch.php');
>>>>>>> 2c4936339460c6f03552671f9caa2bb43d305234

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
  <?php require_once('components/nav2.php') ?>     
    <section id="mainImg">
        <img src="img/sidracola.jpg"></img>
    </section>
    <section id="mainText">
        <details>
            <summary>
                <h2><?php echo $text_main['nosotros'] ?></h2>
            </summary>
            <p><?php echo $text_main['nosotros_contenido'] ?></p>
        </details>
        <details>
            <summary>
                <h2><?php echo $text_main['nuestro_producto'] ?></h2>
            </summary>
            <p><?php echo $text_main['nuestro_producto_contenido'] ?></p>
        </details>
        <details>
            <summary>
                <h2><?php echo $text_main['ven_a_vernos'] ?></h2>
            </summary>
            <p><?php echo $text_main['ven_a_vernos_contenido'] ?></p>
        </details>
    </section>
</body>

</html>