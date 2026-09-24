<?php

$host= "127.0.0.1";
$username= "root";
$password= "MySQL@123";
$dbname="web";

$connection= new mysqli($host, $username, $password, $dbname);
if($connection->connect_error){
    die("Connection failed:");
}
// echo "Connected successfully";

?>