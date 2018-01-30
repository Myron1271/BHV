<?php
if(isset($_POST['uitloggen'])) {
    session_destroy();
    header("location: login.php");
}