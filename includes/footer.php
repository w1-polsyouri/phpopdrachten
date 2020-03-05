<?php
/**
 * User: Youri Pols
 * Date: 20-2-2020
 * Time: 12:09 PM
 * File: footer.php
 */
?>
<?php

date_default_timezone_set("Europe/Amsterdam");
$uur = date("H");
$greeting = "onbekend";
if($uur <= 5)
{
   $greeting = "Goedenacht";
}
elseif ($uur <= 12)
{
    $greeting = "Goedenochtend";
}
elseif ($uur <= 17)
{
    $greeting = "Goedenmiddag";
}
else
{
    $greeting = "Goedenavond";
}

echo("<footer>");
echo($greeting . "&copy; 2020");
echo("</footer>");
?>
