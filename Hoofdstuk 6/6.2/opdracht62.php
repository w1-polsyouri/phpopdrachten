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
    <style>
        img
        {
            height: 45px;
            width: 45px;
        }
    </style>
</head>
<body>
<?php
include("../../includes/header.php");
?>
<aside>
    <h2>Menu</h2>
    <ul>
        <li>Hoofdstuk 6
            <ul>
                <li>
                    <a href="../6.1/opdracht61.php">Opdracht 6.1</a>
                </li>
                <li>
                    <a href="#">Opdracht 6.2</a>
                </li>
            </ul>
        </li>
    </ul>
</aside>

<main id="wrapper">
    <h2>Uitwerkingen</h2>
    <form id="gameFrm" method="get" action="opdracht62.php">
        <div class="float"><input type="radio"
                                  onchange="document.getElementById('gameFrm').submit();" name="steen"
                                  value="steen"><img src="../images/steen.jpg"></div>
        <div class="float"><input type="radio"
                                  onchange="document.getElementById('gameFrm').submit();" name="papier"
                                  value="papier"><img src="../images/papier.jpg"></div>
        <div class="float"><input type="radio"
                                  onchange="document.getElementById('gameFrm').submit();" name="schaar"
                                  value="schaar"><img src="../images/schaar.jpg"></div>
    </form>
    <?php
    if (isset($_GET['schaar'])) {
        echo "Jij koos: <img src='../images/{$_GET['schaar']}.jpg'>";
    }
    if (isset($_GET['papier'])) {
        echo "Jij koos: <img src='../images/{$_GET['papier']}.jpg'>";
    }
    if (isset($_GET['steen'])) {
        echo "Jij koos: <img src='../images/{$_GET['steen']}.jpg'>";
    }
    //keuze computer?
    //Wat kiest de computer
    //Random wordt er een getal tussen 0 en 2 gekozen
    $opties = array("steen","papier","schaar");
    $computerkeuzegetal = rand(0,2);
    $computerkeuze = $opties[$computerkeuzegetal];
    $_SESSION['user1'] = 0;
    $_SESSION['user2'] = 0;
    echo "&nbsp;&nbsp;De computer koos: <img src='../images/{$computerkeuze}.jpg'>";


    if (isset($_GET['schaar'])) {
        if($computerkeuze == "steen")
        {
            $_SESSION['user2'] += 1;
            echo("Computer scoort");
        }
        elseif($computerkeuze == "schaar")
        {
            $_SESSION['user1'] += 1;
            $_SESSION['user2'] += 1;
            echo("Gelijk");
        }
        elseif($computerkeuze == "papier")
        {
            $_SESSION['user1'] += 1;
            echo("Jij scoort");
        }
    }
    elseif (isset($_GET['papier'])) {
        if($computerkeuze == "schaar")
        {
            $_SESSION['user2'] += 1;
            echo("Computer scoort");
        }
        elseif($computerkeuze == "papier")
        {
            $_SESSION['user1'] += 1;
            $_SESSION['user2'] += 1;
            echo("Gelijk");
        }
        elseif($computerkeuze == "steen")
        {
            $_SESSION['user1'] += 1;
            echo("Jij scoort");
        }
    }
    if (isset($_GET['steen'])) {
        if($computerkeuze == "papier")
        {
            $_SESSION['user2'] += 1;
            echo("Computer scoort");
        }
        elseif($computerkeuze == "steen")
        {
            $_SESSION['user1'] += 1;
            $_SESSION['user2'] += 1;
            echo("Gelijk");
        }
        elseif($computerkeuze == "schaar")
        {
            $_SESSION['user1'] += 1;
            echo("Jij scoort");
        }
    }
    echo ("<p>" . $_SESSION['user1'] . ' tegen ' . $_SESSION['user2']);
    ?>
</main>

<?php
include("../../includes/footer.php");
?>

</body>
</html>
