<!Doctype html>
<html>
<head>


</head>
<body>
<?php
date_default_timezone_set("Asia/Hong_kong");
$currerttime = date("D Y m-d H:i:s");
echo("<p>Huidige tijd: " . $currerttime . "</p>");

$currenthour = date("D");
switch ($currenthour)
{
    case"Mon":
        echo("Garfield houdt van lasagna op maandag");
        break;
    case"Dis":
        echo("het is dinsdag");
        break;
    case"Wed":
        echo("breek de week");
        break;
    case"Thu":
        echo("Bijna weekend");
        break;
    case"Fri":
        echo("Weekend");
        break;


}
?>
</body>
</html>

