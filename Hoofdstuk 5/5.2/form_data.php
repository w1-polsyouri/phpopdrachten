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
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
            text-align: left;
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
        <li>Hoofdstuk 5
            <ul>
                <li>
                    <a href="#">Opdracht 5.1</a>
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
                <li>
                    <a href="../..//index.php">Terug naar hoofdpagina</a>
                </li>

            </ul>
        </li>
    </ul>
</aside>

<main id="wrapper">
    <h2>Uitwerkingen</h2>

    <table style="width:100%">
        <tr>
            <td>naam:</td>
            <td>    <?php
                echo $_GET["firstName"];
                ?>
            </td>
        </tr>
        <tr>
            <td>studentennummer:</td>
            <td>    <?php
                echo $_GET["studentNumber"];
                ?>
            </td>
        </tr>
        <tr>
            <td>datum:</td>
            <td>    <?php
                echo $_GET["date"];
                ?>
            </td>
        </tr>
        <tr>
            <td>reden van uitschrijving:</td>
            <td>    <?php
                echo $_GET["reason"];
                ?>
            </td>
        </tr>
        <tr>
            <td>leerjaar:</td>
            <td>    <?php
                echo $_GET["leerjaar"];
                ?>
            </td>
        </tr>
        <tr>
            <td>naar succesklas:</td>
            <td>    <?php
                echo $_GET["succesKlas"];
                ?>
            </td>
        </tr>
        <tr>
            <td>gegevens verwijderen:</td>
            <td>    <?php
                echo $_GET["gegevens"];
                ?>
            </td>
        </tr>
        <tr>
            <td>reden uitschrijving:</td>
            <td>    <?php
                echo $_GET["reasonLeave"];
                ?>
            </td>
        </tr>

    </table>

</main>

<?php
include("../../includes/footer.php");
?>

</body>
</html>


