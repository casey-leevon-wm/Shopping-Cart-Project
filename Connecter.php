<?php

/*** mysql hostname ***/
$hostname = 'localhost';

/*** mysql username ***/
$username = 'root';

/*** mysql password ***/
$password = 'root';

try{
    $dbh = new PDO("mysql:host=$hostname;dbname=CartProject", $username, $password);
    /*** echo a message saying we have connected ***/
    //echo 'Connected to database';
}
catch(PDOException $e) {
    echo $e->getMessage();
}
session_start();
?>