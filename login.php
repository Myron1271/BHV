<?php
error_reporting( error_reporting() & ~E_NOTICE );
session_start();
include 'loginfunctie.php';
include 'timecheck.php';
if ($_SESSION['vervallen'] == true)
{
    header("Location: vervallen.php");
}
if ($_SESSION['gebruiker'] == 1) {
    header("Location: overview.php");
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
<form action="login.php" method="post">
<div class="inlogcode">
    <label>Code:
        <br>
        <input type="password" name="code" class="label-normal" required>
    </label>
    <br>
    <input class="btn-normal" type="submit" name="inloggen" value="Inloggen">
</form>
<form action="login.php" method="post">
    <input class="btn-normal" type="submit" name="sendmail" value="Code versturen">
</form>
</div>
</body>
</html>