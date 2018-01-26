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

?>