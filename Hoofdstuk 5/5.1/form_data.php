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
            <td>bedrijfsnaam:</td>
            <td>    <?php
                echo $_GET["nameCompany"];
                ?>
            </td>
        </tr>
        <tr>
            <td>voornaam:</td>
            <td>    <?php
                echo $_GET["nameFirst"];
                ?>
            </td>
        </tr>
        <tr>
            <td>achternaam::</td>
            <td>    <?php
                echo $_GET["nameLast"];
                ?>
            </td>
        </tr>
        <tr>
            <td>Telefoon:</td>
            <td>    <?php
                echo $_GET["Tel"];
                ?>
            </td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>    <?php
                echo $_GET["Email"];
                ?>
            </td>
        </tr>
        <tr>
            <td>Bericht:</td>
            <td>    <?php
                echo $_GET["Message"];
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

