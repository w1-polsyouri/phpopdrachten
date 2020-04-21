<?php

include ("opdracht5.4.php");
?>


<?php
if( $_SERVER["REQUEST_METHOD"] == "POST")
{
if (isset($_POST["stoplicht"]) == false)
{
echo("<p style='color = red'>Ongeldige invoer van gegevens</p>");
}
}


if(isset($_POST["stoplicht"]) == true && isset($_POST["ambulanceComing"]) == true)
{

if ($_POST["stoplicht"] == "groen")
{
echo("<p>Het stoplicht staat op groen.</p>");
}
else if ($_POST["stoplicht"] == "oranje")
{
echo("<p>Het stoplicht staat op oranje.</p>");
}
else if ($_POST["stoplicht"] == "rood")
{
echo("<p>Het stoplicht staat op rood.</p>");
}
}

echo ("<p>En er komt een abmulance aan" . $_POST["ambulanceComing"] . "</p>");

if($_POST["stoplicht"] == "groen" && $_POST["ambulanceComing"] == "NEE")
{
echo("<p style='color: green'> je mag doorrijden</p>");
}
else
{
echo("<p style='color = red'>Je MOET stoppen");
    }
    ?>