<?php

    $servernaam = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'bhvtest';

    $con = new mysqli($servernaam, $username, $password , $dbname);


    if(isset($_POST['inloggen']))
    {
        $sql = "INSERT INTO code(password) VALUES ('1234EE')";
    }


?>

<!doctype html>
<head>

    <link rel="stylesheet" href="Style.css" type="text/css">

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Index</title>

</head>
<body>

<div class="inlogcode">
    <input type="submit" value="Stuur Code" class="inlogcode">
    <br>
    <label> Gebruikersnaam: <input type="text" name="GbNaam" class="inlogcode"></label>
    <br>
    <label> Wachtwoord: <input type="text" name="Wachtwoord" class="inlogcode"></label>
    <br>
<input type="submit" name="inloggen" class="inlogcode" value="Inloggen">
</div>

</body>

<footer>
    Powered by Leeuwenborgh
</footer>
</html>