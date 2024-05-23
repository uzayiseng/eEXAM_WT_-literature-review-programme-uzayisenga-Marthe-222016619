<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "marthe"; 

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("fail to connect!");
}