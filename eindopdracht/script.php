<?php
//username en wachtoowrd combinatie
$userArrayList = [
    "Sjul" => "1kk3N13tW3t3n",
    "Koos" => "Bed4nktVoorDeEer",
    "Jim" => "carlWheezer",
    "Youri" => "%j;(A+v87s7m2#96jh99)bXc6s=B9VeR",
    "Milan" => "MaaskantjeDeGekste",
    "Alberto" => "eV-=2+dN9x4",
    "Niels"  => "X8@AD7a",
    "Jan" => "Wc",
    "Piet" => "Pussuy",
    "PussySlayer69" => "admin"
];


//foutmeldingen
$message = "";
//succesvol ingelogd ja of nee
$loginSucces = false;
$formulier= "<p style='text-align: center'>Welkom!</p><fieldset id=\"field1\">
    <legend>Openingstijden</legend><p>Do: 22:00<br>Vr: All day<br>Za: All day<br>Zo: 12:00</p>
</fieldset>
<fieldset id=\"field2\">
    <legend>Adres gegevens</legend><p>
    Am Wriezener Bahnhof
    <br>
    10243 Berlin<br>
    Duitsland
    </p>
</fieldset>
Deze gegevens dien je ten alle tijde geheim te houden.";

//checken gegevens via for each
if( isset($_POST["username"]) == true && isset($_POST["password"]) == true)
{//om door de array te loopen
    foreach ($userArrayList as $index => $value)
    {
        if($_POST["username"] == $index && $_POST["password"] == $value)
        {
            //correcte combinatie
           $loginSucces = true;
        }
        else{
            $message = "Foutieve username en/of wachtwoord";

        }

    }
}



?>