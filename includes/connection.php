<?php

$server     = "";
$username   = "";
$password   = "";
$db         = "";

// create a connection
$conn = mysqli_connect( $server, $username, $password, $db);

// check connection
if(!$conn) {
    die("Connection faild: there is a connection error!");
}


?>
