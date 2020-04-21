<?php
/**
 * User: Youri Pols
 * Date: 24-3-2020
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
        <li>Hoofdstuk 2
            <ul>
                <li>
                    <a href="Hoofdstuk%202/opdracht2.1.php">Opdracht 2.1</a>
                </li>
                <li>
                    <a href="Hoofdstuk%202/opdracht_2-2.php">Opdracht 2.2</a>
                </li>
            </ul>
        </li>
        <br>
        <li>Hoofdstuk 3
            <ul>
                <li>
                    <a href="Hoofdstuk%203/opdracht3.1.php">Opdracht 3.1</a>
                </li>
                <li>
                    <a href="Hoofdstuk%203/opdracht3.2.php">Opdracht 3.2</a>
                </li>
                <li>
                    <a href="Hoofdstuk%203/opdracht3.3.php">Opdracht 3.3</a>
                </li>
            </ul>
        </li>
        <br>
        <li>Hoofdstuk 4
            <ul>
                <li>
                    <a href="Hoofdstuk%204/opdracht4.1.php">Opdracht 4.1</a>
                </li>
                <li>
                    <a href="Hoofdstuk%204/4.2/script.php">Opdracht 4.2</a>
                </li>
                <li>
                    <a href=Hoofdstuk%204/4.3/opdracht_4.3.php">Opdracht 4.3</a>
                </li>
                <li>
                    <a href="Hoofdstuk%204/4.4/opdracht44.php">Opdracht 4.3</a>
                </li>
            </ul>
        </li>
        <br>
        <li>Hoofdstuk 5
            <ul>
                <li>
                    <a href="../5.1/opdracht5.1.php">Opdracht 5.1</a>
                </li>
                <li>
                    <a href="../5.2/opdracht5.2.php">Opdracht 5.2</a>
                </li>
                <li>
                    <a href="../5.3/opdracht5.3.php>Opdracht 5.3</a>
                </li>
                <li>
                    <a href="#">Opdracht 5.4</a>
                </li>
            </ul>
        </li>
    </ul>
</aside>

<main id="wrapper">
    <h2>Uitwerkingen</h2>



    <form action="opdracht5.4.php" method="POST">
        <table>
            <tr>
                <td>
                    <p>Komt er een ambulance aan?</p>
                </td>
                <td>
                    <input type="radio" name="ambulanceComing" value="yes">Ja
                    <input type="radio" name="ambulanceComing" value="no">Nee
                </td>
            </tr>
            <tr>
                <td>
                    <p>Stoplicht kleur?</p>
                </td>
                <td>
                    <?php
                    // Bestaat $_POST["trafficLightColor"]? Dan voert hij de tweede if() statement uit
                    if($_SERVER["REQUEST_METHOD"] == "POST")
                    {
// Bepaal of trafficLightColor geldige waardes heeft
                        if(isset($_POST["trafficLightColor"]) == false)
                        {
                            echo("<p style='color: red'>U heeft een ongeldige invoer gegeven.</p>");
                        }
                    }
                    ?><input type="radio" name="trafficLightColor" value="green">Groen
                    <input type="radio" name="trafficLightColor" value="orange">Oranje
                    <input type="radio" name="trafficLightColor" value="red">Rood
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Verzend">
                </td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($_POST["ambulanceComing"]) == true && isset($_POST["trafficLightColor"]) == true)
    {
        echo("<h1>Wat is de situatie en wat moet ik doen?</h1>");
        echo("<table>");
        if($_POST["trafficLightColor"] == "green")
        {
            echo("<p>Het stoplicht staat op groen</p>");
        }
        else if($_POST["trafficLightColor"] == "orange")
        {
            echo("<p>Het stoplicht staat op oranje</p>");
        }
        else if($_POST["trafficLightColor"] == "red")
        {
            echo("<p>Het stoplicht staat op rood</p>");
        }
// Tonen of er een ambulance aankomt
        echo("<p>En er komt een ambulance aan: " . $_POST["ambulanceComing"] . "</p>");
// Mag ik verder rijden?
        if($_POST["trafficLightColor"] == "green" && $_POST["ambulanceComing"] == "no")
        {
            echo("<p style='color: green'>Je mag doorrijden</p>");
        }
        else
        {
            echo("<p style='color: red'>Je MOET stoppen</p>");
        }
        echo("<table>");
    }
    ?>










</main>

<?php
include("../../includes/footer.php");
?>

</body>
</html>


