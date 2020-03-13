<?php
$courseName = "Computertekenen";
switch ($courseName)
{
    case"Php":
        $teacherName;
        break;
    case"Engels":
        $teacherName = "Giesen";
        break;
        case"Studie loopbaan begeleiding":
        $teacherName = "Visser";
        break;
    case"SQL":
        $teacherName = "Gijsbrechts";
        break;
    case"Nederlands":
        $teacherName = "van den Ende";
        break;
    case"Digitale vaardigheden gevorderd":
        $teacherName = "Pielage";
        break;
    case"Javascript":
        $teacherName = "Evers";
        break;
    case"Computertekenen":
        $teacherName = "Van den Berg";
        break;
    case"Rekenen":
        $teacherName = "Wetering";
        break;
    case"ASP":
        $teacherName = "Van de Meer";
        break;
    case"Modelleren":
        $teacherName = "Bijnen";
        break;
    case"Html":
        $teacherName = "Van de Meer";
        break;
}
?>

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
                    <a href="#">Opdracht 4.2</a>
                </li>
                <li>
                    <a href="../4.3/script.php">Opdracht 4.3</a>
                </li>
                <li>
                    <a href="../4.4/opdracht44.php">Opdracht 4.4</a>
                </li>
                <li>
                        <a href="../../index.php">terug naar de hoofdpagina</a>
                </li>
            </ul>
        </li>
    </ul>
</aside>

<main id="wrapper">
    <h2>Uitwerkingen</h2>
    <?php
        echo("<p> Voor het vak<b> " . $courseName . "</b> heb je <b>" . $teacherName . "</b> als docent.")
    ?>
</main>

<?php
include("../../includes/footer.php");
?>

</body>
</html>
