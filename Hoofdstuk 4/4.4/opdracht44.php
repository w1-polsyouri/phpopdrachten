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
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>
<body>
<?php
include("../../includes/header.php");
?>
<aside>
    <h2>Menu</h2>
    <ul>
        <li>Hoofdstuk 4
            <ul>
                <li>
                    <a href="../opdracht4.1.php">Opdracht 4.1</a>
                </li>
                <li>
                    <a href="4.2/script.php">Opdracht 4.2</a>
                </li>
                <li>
                    <a href="4.3/opdracht_4.3.php">Opdracht 4.3</a>
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

    for ($tel = 0; $tel <7 ; $tel++)
    /*
        $datumAlsGetal = strtotime("+$tel days");
        echo ("Dag ");
        echo date('w', $datumAlsGetal);
        echo " is ";
        echo $dagNamen[$tel];
        echo " ";
        echo date('d-m-Y', $datumAlsGetal);
        echo "<br>";
*/

        $dagNamen = '';
    for ($tel = 0; $tel <7 ; $tel++)
    {
        $datumAlsGetal = strtotime("+$tel days");
        $dagnummer = date('w', $datumAlsGetal);
        if ($dagnummer == 0)
        {
            $dagNamen = 'zondag';
        }
        elseif ($dagnummer == 1)
        {
            $dagNamen = 'maandag';
        }
        elseif ($dagnummer == 2)
        {
            $dagNamen = 'dinsdag';
        }
        elseif ($dagnummer == 3)
        {
            $dagNamen = 'woensdag';
        }
        elseif ($dagnummer == 4)
        {
            $dagNamen = 'donderdag';
        }
        elseif ($dagnummer == 5)
        {
            $dagNamen = 'vrijdag';
        }
        elseif ($dagnummer == 6)
        {
            $dagNamen = 'zaterdag';
        }

        echo "Dag ";
        echo date('w', $datumAlsGetal);
        echo " is " . $dagNamen;
        echo " ";
        echo date('d-m-Y', $datumAlsGetal);
        echo "<br>";
    }



    ?>
</main>

<?php
include("../../includes/footer.php");
?>

</body>
</html>
