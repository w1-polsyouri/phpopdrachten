<?php
/**
 * User: Youri Pols
 * Date: 20-2-2020
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
<header>
    <?php
    include("../includes/header.php");
    ?>
</header>
<aside>
    <h2>Menu</h2>
    <ul>
        <li>Hoofdstuk 3
            <ul>
                <li>
                    <a href="opdracht3.1.php">Opdracht 3.1</a>
                </li>
                <li>
                    <a href="opdracht3.2.php">Opdracht 3.2</a>
                </li>
                <li>
                    <a href="opdracht3.3.php">Opdracht 3.3</a>
                </li>
            </ul>
        </li>
        <br>
        <li>
            <a href="../index.php">Terug naar de hoofdpagina</a>
        </li>
    </ul>
</aside>
<main id="wrapper">
    <h2>Uitwerkingen</h2>
    <?php
    //alle woorden in variabelen
    $tocht = "Elfstedentocht"; //string
    $friesetocht = "Alvestêdetocht"; // string
    $afstand = 200; //int
    $beschrijving = "schaatstocht"; //string
    $ijs = "natuurijs";
    $KVDFES = "Koninklijke Vereniging De Friesche Elf Steden";//string
    $stad = "Leeuwarden";//string
    $provincie = "Friesland";//string
    $counter = 15;//int
    $jaar = 1909;//int
    $max = 1;//int

    //verhaal variabelen declareren
    $verhaal = "De " . $tocht . " Fries: " . $friesetocht . ") is een " . $afstand . " kilometer lange " . $beschrijving . " over " . $ijs . " die wordt georganiseerd door de " . $KVDFES . ". " . $stad . ", de hoofdstad van " . $provincie . ", is start- en aankomstplaats. De " . $tocht . " is inmiddels " . $counter .  " maal verreden en werd voor het eerst in " . $jaar . " gereden  en wordt maximaal " . $max . " keer per winter gehouden.";
    $verhaal2 = "De " . $tocht . " Fries: " . $friesetocht . ") is een " . $afstand . " kilometer lange " . $beschrijving . " over " . $ijs . " die wordt georganiseerd door de " . $KVDFES . ". " . $stad . ", de hoofdstad van " . $provincie . ", is start- en aankomstplaats. De " . $tocht . " is inmiddels " . $counter .  " maal verreden en werd voor het eerst in " . $jaar . " gereden  en wordt maximaal " . $max . " keer per winter gehouden.";
    echo("<p> $verhaal </p>");
    echo ("<br>");
    echo ("<p> $verhaal2 </p>");
    ?>
</main>
<footer>
    <?php
    include("../includes/footer.php.");
    ?>
</footer>
</body>
</html>

