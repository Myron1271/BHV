<?php

    $random = rand(1000, 3000);
    //Echo "$random";

    $servernaam = 'sql11.freemysqlhosting.net';
    $username = 'sql11218706';
    $password = 'IiJ6svZtMt';
    $dbname = 'sql11218706';

    $con = new mysqli($servernaam, $username, $password , $dbname);

    if($con->connect_error)
    {
        die("Vebinding mislukt:" . $con->connect_error);
    }

    if(isset($_POST['codeverzenden']))
    {



// the message
        $msg = "Beste Gebruiker, \n De code is: $random";

        // use wordwrap() if lines are longer than 70 characters
        $msg = wordwrap($msg,70);

        // send email
        mail("sssssssss@live.nl","BHV Code",$msg);

    $sql = "UPDATE administratie SET code='".$random."' WHERE id=1";

        if (mysqli_query($con, $sql))
        {

            //timer;
            $_SESSION['vervallen'] = false;
            $sql3 = "UPDATE php_cron SET last_ts = NOW() WHERE id=1";
            mysqli_query($con, $sql3) or die("[3] MySQL ERROR: ".mysqli_error());

        }
    }
