<?php

    $random = rand(1000, 9999);
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
    }
