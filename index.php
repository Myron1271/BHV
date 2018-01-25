<?php

    $servernaam = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'bhvtest';

    $con = new mysqli($servernaam, $username, $password , $dbname);

    if($con->connect_error)
    {
        die("Vebinding mislukt:" . $con->connect_error);
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
    <label>Code:<br><input type="password" name="code" class="label-normal" required></label>
    <br>
    <input class="btn-normal" type="submit" name="inloggen" value="Inloggen">
</div>

</body>
</html>