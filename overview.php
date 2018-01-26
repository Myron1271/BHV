<?php

    $servernaam = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'bhv';

    $con = new mysqli($servernaam, $username, $password , $dbname);

    $sql = 'SELECT id, naam, email, telefoonnummer, actief FROM gebruikers';
    $overzicht = mysqli_query($con, $sql);

    if (mysqli_num_rows($overzicht) > 0)
    {
        while ($row = mysqli_fetch_assoc($overzicht))
        {
            Echo "<b> Naam: </b>" .$row['naam'], "<br> <b> Email: </b>" .$row['email'], "<b><br> Telefoonnummer: </b>" .$row['telefoonnummer'];
        }
    }
    else
    {
        Echo "Geen gebruikers";
    }

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
        <table>
            <tr>
                <th><h1>Naam:</h1></th>
                <th><h1>Email:</h1></th>
            </tr>
            <tr>
                <td>Myron</td>
                <td>m.seelen@leeuwenborgh.nl</td>
            </tr>
        </table>
    </div>

    </body>
    </html>
