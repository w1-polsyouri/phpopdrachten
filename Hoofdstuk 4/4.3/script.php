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
                    <a href="../4.2/script.php">Opdracht 4.2</a>
                </li>
                <li>
                    <a href="#">Opdracht 4.3</a>
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
    //while loop
    $task2 = "Lancering in: ";
    $counter = 19;
    while($counter >= 0)
    {
        $task2 = $task2 . $counter . ",";
        $counter--;
    }
    //for loop
    $task3 = "Lancering in: ";
    for ($amount = 19; $amount >=0;  $amount--)
    {
        $task3 = $task3 . $amount . ",";
    }

    //2e while
    $task4 = "";
    $counterTask4 = 1;
    while($counterTask4 >=1 && $counterTask4 <=6)
    {
        $task4 = "<h" . $counterTask4 . "> Dit is de " . $counterTask4 . "e iteratie </H" . $counterTask4 . ">" ;
        $counterTask4 = $counterTask4 + 1;

    }

    //2e for
    $task5 = " ";
    $task5;
    for($counterTask5 = 1; $counterTask5 <11; $counterTask5++)
    {
        $task5 = "<td> Dit is de " . $counterTask5 . "e iteratie </td>";
    }
    ?>
</main>

<?php
include("../../includes/footer.php");
?>

</body>
</html>

