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
        <li>Hoofdstuk 6
            <ul>
                <li>
                    <a href="#">Opdracht 6.1</a>
                </li>
                <li>
                    <a href="#">Opdracht 6.2</a>
                </li>
            </ul>
        </li>
    </ul>
</aside>

<main id="wrapper">
    <h2>Uitwerkingen</h2>
    <form method="post" action="checklogin.php">
        Username<input type="text" name="username">
        <br>
        Password<input type="password" name="password">
        <br>
        <input type="submit" value="Login">
    </form>
</main>

<?php
include("../../includes/footer.php");
?>

</body>
</html>
