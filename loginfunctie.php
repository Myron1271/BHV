<?php

$servernaam = 'sql11.freemysqlhosting.net';
$username = 'sql11218706';
$password = 'IiJ6svZtMt';
$dbname = 'sql11218706';


$conn = new mysqli($servernaam, $username, $password , $dbname);

if($conn->connect_error)
{
    die("Vebinding mislukt:" . $conn->connect_error);
}

if (isset($_POST["inloggen"])){

    $LoginCode = $_POST["code"];
    global $conn;
    $sql = "SELECT code FROM administratie WHERE code = '".$LoginCode."' ";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0 ){
        $_SESSION["gebruiker"] = 1;
    }
    else{

        echo "De code is onjuist!";

    }

}
if (isset($_POST["sendmail"])) {

    global $conn;
    $sql = "SELECT code FROM administratie WHERE id = '1' ";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_array($result);
    $row = implode($row);
    $row = substr($row, 4);


    $msg = "Beste Gebruiker, \n De code is: '".$row."'  ";

    // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,70);

    // send email
    mail("sssssssss@live.nl","BHV Code",$msg);
    echo "De code is verzonden";
}



?>