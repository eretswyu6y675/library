<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$dp = 'bebe';


$connect = mysqli_connect($host,$user,$pass,$dp);
if($connect->connect_error){
    die("Database error".$connect->connect_error);
}