<?php
    $servernaam = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'bhv';

    $con = new mysqli($servernaam, $username, $password , $dbname);

    $sql = 'SELECT id, naam, email, telefoonnummer, actief FROM gebruikers';
    $overzicht = mysqli_query($con, $sql);


?>

    <!doctype html>
    <html lang="nl">
    <head>

        <link rel="stylesheet" href="Style.css" type="text/css">

        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Overzicht</title>
    </head>
    <body>

    <div class="overzicht">
        <?php
        if (mysqli_num_rows($overzicht) > 0)
        {
            echo "<table> <tr> <th><h1>Naam:</h1></th> <th><h1>Email:</h1></th> <th><h1>Telefoonnummer:</h1></th> </tr>";
            while ($row = mysqli_fetch_assoc($overzicht))
            {
                Echo "<tr> <td>".$row['naam'],"</td> <td>".$row['email'],"</td> <td>".$row['telefoonnummer']."</td> </tr>";
            }
            echo "</table>";
        }
        else
        {
            Echo "Geen gebruikers";
        }
        ?>
    </div>

    </body>
    </html>
