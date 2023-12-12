<?php
//session_start();
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
error_reporting(E_ERROR | E_WARNING);
ini_set('display_errors', 0);
include "conecteaza.php";
if(!empty($_SESSION["id_utilizator"])){
    $id_utilizator = $_SESSION["id_utilizator"];
    $result = mysqli_query($con, "SELECT * FROM admin WHERE id_utilizator = $id_utilizator");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        $nume=$row['nume'];
        $nume_utilizator=$nume;
        $admin=$row['administrator'];
    }
} 

 //$nume="";
 print "<html>";
 print "<!DOCTYPE html>";
 print "<html lang='en'>";

    print "<head>";
     print "<title>ComputerShop</title>";
        print "<link rel='stylesheet' href='style.css'>";
		print "<meta charset='utf-8'>";
		print "<meta http-equiv='X-UA-Compatible' content='IE=edge'>";
		print "<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>";
		print "<meta name='description' content=''>";
		print "<meta name='author' content='Diana Nicoleta Sirbu'>";
    print "</head>";
    print "<body>";
    //print $nume;
/*
    if ($nume_utilizator!=""){
        print "<h1 id='".top."'> Computer Shop  -".ucfirst($nume_utilizator)."  </h1>";
    }
    else{
        print "<h1 id='".top."'> Computer Shop  ".ucfirst($nume_utilizator)."  </h1>";
    }
*/

?>
