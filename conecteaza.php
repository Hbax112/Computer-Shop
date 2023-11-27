<?php
session_start();
//conexiunea la baza de date
$host="localhost";
$user="marius";
$pass="simonica";
$baza="dd_nou";

//print $baza.', '.$host.', '.$user;
$con=mysqli_connect($host,$user,$pass,$baza) or die ("Nu am putut accesa serverul MySql");
mysqli_select_db($con,$baza) //or die ("Nu am putut accesa baza de date ". $baza.")";

?>
