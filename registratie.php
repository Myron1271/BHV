<?php

    $random = rand(1000, 3000);
    Echo "$random";

    $servernaam = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'bhv';

    $con = new mysqli($servernaam, $username, $password , $dbname);

    if($con->connect_error)
    {
        die("Vebinding mislukt:" . $con->connect_error);
    }

    if(isset($_POST['codeverzenden']))
    {
        $sql = "UPDATE administratie SET code='$random' WHERE id=1";

        if (mysqli_query($con, $sql))
        {
            echo "<br>";
            Echo "Code Verzonden";
        }
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

    <title>Code verzenden</title>

</head>
<body>

<form action="registratie.php" method="POST">
<div class="inlogcode">
    <input type="submit" name="codeverzenden" value="Stuur Code" class="btn-normal">
</div>
</form>

</body>
</html>
