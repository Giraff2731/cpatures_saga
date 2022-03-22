<?php

$hostname ='localhost';
$username = 'anilk';
$password = 'anil{@!#}2731';
$database = 'captures';


$con=mysqli_connect($hostname,$username,$password,$database);

if(!$con){
    die(mysqli_error($con));
}

$base_url = "https://code.akhfasoft.net/login-register-youtube/";
$my_email = "aniltheco@gmail.com";

?>