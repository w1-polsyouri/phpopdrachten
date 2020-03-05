<?php
/**
 * User: Youri Pols
 * Date: 11-2-2020
 * Time: 12:09 PM
 * File: index.php
 */
?>
<html>
<head>
    <title>Mij PHP opdrachten</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<?php
include("../includes/header.php");
?>
<aside>
    <h2>Menu</h2>
    <ul>
        <li>Hoofdstuk 4
            <ul>
                <li>
                    <a href="#">Opdracht 4.1</a>
                </li>
                <li>
                    <a href="4.2/script.php">Opdracht 4.2</a>
                </li>
                <li>
                    <a href="#">Opdracht 4.3</a>
                </li>
                <li>
                    <a href="#">Opdracht 4.4</a>
                </li>
                <li>
                    <a href="../index.php">Terug naar hoofdpagina</a>
                </li>

            </ul>
        </li>
    </ul>
</aside>

<main id="wrapper">
    <h2>Uitwerkingen</h2>
    <?php
    date_default_timezone_set("Europe/Amsterdam");
    $uur = date("H");
    if($uur <= 5)
    {
        echo("<footer> Goedennacht </footer>");
    }
    elseif ($uur <= 12)
    {
        echo("<footer>Goedenochtend</footer>");
    }
    elseif ($uur <= 17)
    {
        echo("<footer>Goedenmiddag</footer>");
    }
    else
    {
        echo("<footer>Goedenavond</footer>");
    }

    ?>
</main>
<footer>
<?php
include("../includes/footer.php");
?>
</footer>
</body>
</html>
