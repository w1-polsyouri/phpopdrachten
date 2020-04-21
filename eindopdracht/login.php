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
    <style>
        fieldset{
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }
        fieldset {
            padding: 3px;
            margin:0;
            float: left;
            height: 150px;
        }
        #field1 {
            width: 50%;
        }
        #field2 {
            width: 50%;
        }
    </style>
    <title>Mij PHP opdrachten</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<?php
include ("script.php");
?>
<body>
<?php
include("../includes/header.php");
?>
<aside>
    <h2>Menu</h2>
    <ul>
        <li>Hoofdstuk 2
            <ul>
                <li>
                    <a href="../Hoofdstuk%202/opdracht2.1.php">Opdracht 2.1</a>
                </li>
                <li>
                    <a href="../Hoofdstuk%202/opdracht_2-2.php">Opdracht 2.2</a>
                </li>
            </ul>
        </li>
        <br>
        <li>Hoofdstuk 3
            <ul>
                <li>
                    <a href="../Hoofdstuk%203/opdracht3.1.php">Opdracht 3.1</a>
                </li>
                <li>
                    <a href="../Hoofdstuk%203/opdracht3.2.php">Opdracht 3.2</a>
                </li>
                <li>
                    <a href="../Hoofdstuk%203/opdracht3.3.php">Opdracht 3.3</a>
                </li>
            </ul>
        </li>
        <br>
        <li>Hoofdstuk 4
            <ul>
                <li>
                    <a href="../Hoofdstuk%204/opdracht4.1.php">Opdracht 4.1</a>
                </li>
                <li>
                    <a href="../Hoofdstuk%204/4.2/script.php">Opdracht 4.2</a>
                </li>
                <li>
                    <a href=../Hoofdstuk%204/4.3/opdracht_4.3.php">Opdracht 4.3</a>
                </li>
                <li>
                    <a href="../Hoofdstuk%204/4.4/opdracht44.php">Opdracht 4.3</a>
                </li>
            </ul>
        </li>
        <br>
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
            </ul>
        </li>
        <li>Eindopdracht
            <ul>
                <li>
                    <a href="#">Eindopdracht</a>
                </li>
            </ul>
        </li>
    </ul>
</aside>

<main id="wrapper">
    <h2>Uitwerkingen</h2>
    <h2>Bergheen</h2>
    <p style="color: red">
        <?php
        if($loginSucces == false)
        {
            echo($message);

        }
        ?>
    </p>
    <?php
    if($loginSucces == false)
    {
        echo('<form action="login.php" method="post">
        <label>username</label>
        <input type="text" name="username">
        <label>password</label>
        <input type="password" name="password">
        <br>
        <input type="submit" value="Login">
    </form>
        <p>Login om onze inloggegevens + adresgegevens te zien</p>');
    }
    ?>

    <?php
        if($loginSucces == true)
        {
           echo("<p style='text-align: center'>Welkom!</p><fieldset id=\"field1\">
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
Deze gegevens dien je ten alle tijde geheim te houden.");
        }
    ?>
</main>

<?php
include("../includes/footer.php");
?>

</body>
</html>

