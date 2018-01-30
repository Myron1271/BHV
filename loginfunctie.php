<?php

$servernaam = 'localhost';
$username = 'root';
$password = '';
$dbname = 'bhv';

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


?>