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
        <h1><?php echo "Uitwerking van PHP-opdracht 3.2"; ?></h1>
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
        </ul>
    </aside>
    <main id="wrapper">
    <h2>Uitwerkingen</h2>
        <?php
        $trafficLightColor = "Groen";
        $ambulenceComing = true;

        $driveOn = true;
        //checken of de auto mag doorrijden
        if($trafficLightColor == "Groen" && $ambulenceComing == false)
        {
            $driveOn = true;

        }
        elseif ($trafficLightColor == "Oranje" || $ambulenceComing == true)
        {
            $driveOn = false;
        }
        elseif ($trafficLightColor == "Rood" || $ambulenceComing == true)
        {
            $driveOn = false;
        }
        else
        {
            $driveOn = true;
            echo("<p style='color=red'> foutje. Het stoplicht heeft een ongeldige kleur </p>");
        }
        ?>

    <?php
        if ($driveOn == true)
        {
            echo("<h1 style='color=red'> je mag doorrijden </h1>");
        }
        else
        {
            echo("<h1 style='color=red'>Je mag NIET doorrijden </h1>");
        }

?>
    <hr>
    <?php
        //deel 2
        $countryName = "Nederland";
        $currentAge = 16;
        // tonen algemene gegevens
        echo("<p> je woont in " . $countryName . " en je bent " . $currentAge . " jaar oud </p>");

        if($countryName == "België" && $currentAge >= 16 && $currentAge < 18)
        {
            echo("<p>je mag zwakke alcohol drinken</p>");
        }
        elseif ($countryName == "België" && $currentAge >= 18)
        {
            echo("<p> je mag alles drinken</p>");
        }
        elseif ($countryName == "Bulgarije" && $currentAge >=18)
        {
            echo("<p> Je mag hier sterke alcohol drinken </p>");
        }
        else
        {
            echo("<p> hier mag je GEEN alcohol drinken</p>");
        }
    ?>
    </main>
        <button>
            <a href="../index.php">Terug naar de hoofdpagina</a>
        </button>
    </body>
    </html>
<?php
