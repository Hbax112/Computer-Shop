<?php session_start() ?>
<?php include 'cap.php'?>
<?php include 'meniu.php'?>
<?php
$a= session_id();
//print $a;
//echo "---SID: ".SID."<br>session_id(): ".session_id()."<br>COOKIE: ".$_COOKIE["PHPSESSID"];
$sir="create temporary table $a select * from produse where ";
print $sir;	


?>
<?php include 'coada.php'?>	