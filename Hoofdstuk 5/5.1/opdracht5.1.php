<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h1>
            Restaria Kees Kroket
        </h1>
        <p>
            Visstraat 12<br>
            5211 DN 's-Hertogenbosch<br>
            073 613 6720<br>
            info@restariakeeskroket.nl
        </p>
        <form action="form_data.php" method="get">
            <label>Bedrijfsnaam: </label><br>
            <input name="nameCompany" type="text"><br>
            <label>Voornaam: </label><br>
            <input name="nameFirst" type="text"><br>
            <label>Achternaam: </label><br>
            <input name="nameLast" type="text"><br>
            <label>Telefoon: </label><br>
            <input name="Tel" type="tel"><br>
            <label>Email: </label><br>
            <input name="Email" type="text"><br>
            <label>Bericht:</label><br>
            <textarea name="Message"></textarea><br>
            <input type="submit" name="verzend" value="Versturen">
        </form>
    </body>
</html>
