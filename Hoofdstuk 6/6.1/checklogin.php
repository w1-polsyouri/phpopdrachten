<?php
$authUsers = Array(
    "Abu" => "bekend",
    "Nordin" => "onbekend",
    "BasZ" => "654321",
    "Rosalie" => "bloemblaadjes"
);


if( isset($_POST["username"]) == true && isset($_POST["password"]) == true) {//om door de array te loopen
    foreach ($authUsers as $index => $value) {
        if ($_POST["username"] == $index && $_POST["password"] == $value) {
            //correcte combinatie
            session_start();
            $_SESSION['username'] = $_POST['username'];
            header('location: welkom.php');
        }
    }
}
else {
// $message = "Ongeldige username/wachtwoord
// {$_POST['username']}, probeer het nog eens.";
    include "opdracht61.php";
}
?>