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
                    <a href="#">Opdracht 5.2</a>
                </li>
                <li>
                    <a href="#">Opdracht 5.3</a>
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
    <h3>Huisarts bezoek formulier</h3>
    <form action="form_data.php" method="get">
        <p>Voornaam en achternaam</p>
        <input type="text" name="firstName">
        <p>Studentennummer</p>
        <input type="text" name="studentNumber">
        <p>Datum van uitschrijving</p>
        <input type="date" name="date">
        <p>Reden van uitschrijving</p>
        <select id="uitschrijving" name="reason">
            <option value="Foute keuze">Foute keuze</option>
            <option value="Andere school">Andere school</option>
            <option value="Meerdere malen gezakt">Meerdere malen gezakt</option>
        </select>
        <br>
        <input type="radio" id="leerjaar1" name="leerjaar" value="1e leerjaar">
        <label for="leerjaar1">1e Leerjaar</label><br>
        <input type="radio" id="leerjaar2" name="leerjaar" value="2e leerjaar">
        <label for="leerjaar2">2e Leerjaar</label><br>
        <input type="radio" id="leerjaar3" name="leerjaar" value="3e leerjaar">
        <label for="leerjaar3">3e Leerjaar</label><br>
        <br>
        <input type="checkbox" id="succesKlas" name="succesKlas" value="JA">
        <label for="succesKlas"> Inschrijven voor de Succes klas</label><br>
        <input type="checkbox" id="gegevensBehouden" name="gegevens" value="JA">
        <label for="gegevensBehouden"> Alle gegevens verwijderen?</label><br>

        <p>Geef hier de reden van je uitschrijving</p>
        <textarea name="reasonLeave"></textarea>
        <input type="submit" value="Versturen">
    </form>
    <?php

    ?>
</main>

<?php
include("../../includes/footer.php");
?>

</body>
</html>

