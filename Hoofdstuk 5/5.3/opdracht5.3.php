<?php
/**
 * User: Youri Pols
 * Date: 24-3-2020
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
        <li>Hoofdstuk 2
            <ul>
                <li>
                    <a href="Hoofdstuk%202/opdracht2.1.php">Opdracht 2.1</a>
                </li>
                <li>
                    <a href="Hoofdstuk%202/opdracht_2-2.php">Opdracht 2.2</a>
                </li>
            </ul>
        </li>
        <br>
        <li>Hoofdstuk 3
            <ul>
                <li>
                    <a href="Hoofdstuk%203/opdracht3.1.php">Opdracht 3.1</a>
                </li>
                <li>
                    <a href="Hoofdstuk%203/opdracht3.2.php">Opdracht 3.2</a>
                </li>
                <li>
                    <a href="Hoofdstuk%203/opdracht3.3.php">Opdracht 3.3</a>
                </li>
            </ul>
        </li>
        <br>
        <li>Hoofdstuk 4
            <ul>
                <li>
                    <a href="Hoofdstuk%204/opdracht4.1.php">Opdracht 4.1</a>
                </li>
                <li>
                    <a href="Hoofdstuk%204/4.2/script.php">Opdracht 4.2</a>
                </li>
                <li>
                    <a href=Hoofdstuk%204/4.3/opdracht_4.3.php">Opdracht 4.3</a>
                </li>
                <li>
                    <a href="Hoofdstuk%204/4.4/opdracht44.php">Opdracht 4.3</a>
                </li>
            </ul>
        </li>
        <br>
        <li>Hoofdstuk 5
            <ul>
                <li>
                    <a href="../5.1/opdracht5.1.php">Opdracht 5.1</a>
                </li>
                <li>
                    <a href="../5.2/opdracht5.2.php">Opdracht 5.2</a>
                </li>
                <li>
                    <a href="#">Opdracht 5.3</a>
                </li>
                <li>
                    <a href="#">Opdracht 5.4</a>
                </li>
            </ul>
        </li>
    </ul>
</aside>

<main id="wrapper">
    <h2>Uitwerkingen</h2>


    <?php
    echo "<style> 
label {
    width: 20em;
    display: inline-block;    
}
</style>";

    echo "<h2>Opdracht 5.3</h2>";
    echo "
         
            <form method='post' action='opdracht5.3B.php'>
            <fieldset>
            <legend>Registratieformulier</legend>
	        <div><label>Wat is je naam: </label><input name='naam' type='text' value=''>
            </div>
            <div><label>Wat is je leeftijd: </label><input name='age' type='text' value=''>
            </div><div>
            
            </div><div><label>Gemeente:</label>
            <select name='gemeente'>                    
            <option value='-1'Selecteer Gemeente</option>
                    <option value='Den Bosch'>Den Bosch</option>
                    <option value='Loon op Zand'>Loon op Zand</option>
                    <option value='Waalwijk'>Waalwijk</option>
                    <option value='Drunen'>Drunen</option>
                   <option value='Waspik'>Waspik</option>
                    <option value='Tilburg'>Tilburg</option>
                    <option value='Breda'>Breda</option>
                    <option value='Dongen'>Dongen</option>

                   
            </select>            
           
	        </div><div><label>aantal inwoners in gemeente: </label><input name='inwoners' type='text' value=''>
            </div><div><label>Ken je mensen die besmet zijn in je gemeente?: </label><input name='kenjePersonen' type='radio' value='JA'>JA<input name='kenjePersonen' type='radio' value='NEE'>NEE

            </div><div><label>Aantal mensen besmet in je gemeente?</label>
                <input type='text' name='infected'>
	        </div></fieldset>
	        Zie aantal per gemeente per 100.000 <a target='_blank' href='https://www.rivm.nl/coronavirus-kaart-van-nederland-per-gemeente'>site RIVM</a>.
	        <div>
	        <input type='submit' value='verzend' name='verzend'>
	        <input type='reset' value='reset' name='reset'>
            </div>
            </form>       
           ";

    ?>
</main>

<?php
include("../../includes/footer.php");
?>

</body>
</html>


