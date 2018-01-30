<?php

    $random = rand(1000, 3000);
    //Echo "$random";

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
        $sql = "UPDATE administratie SET code='".$random."' WHERE id=1";

        if (mysqli_query($con, $sql))
        {

            //timer;
            $_SESSION['vervallen'] = false;
            $sql3 = "UPDATE php_cron SET last_ts = NOW() WHERE id=1";
            mysqli_query($con, $sql3) or die("[3] MySQL ERROR: ".mysqli_error());

        }
    }
