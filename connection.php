<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "crud_php";

(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("failed to conect!");
}

?>