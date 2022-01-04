<?php
$dbhost="localhost:3307";
$dbuser ="root";
$dbpass ="";
$dbname ="grocery";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("failed to connect");
}


