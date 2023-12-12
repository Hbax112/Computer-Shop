<?php
session_start();
global $nume;
if ($_SESSION['key_admin']!=session_id()){
	print "<html>";
	print "<title>Acces neautorizat!</title>";
	print "<body style='background-color: rgb(200, 250, 250); color: rgb(0, 0, 0);'  alink='#ee0000' link='#0000ee' vlink='#551a8b'>";
	print "<center><font color='red' size='7'><br><br>";
	print "Nu incercati sa intrati pe cai ocolite in sistem!<br>Nu aveti si nu veti avea acces pe aceasta cale!";
	print "</font></center>";
	print "</body>";
	print "</html>";
	exit;
}
include ('../conecteaza.php');
$nume=$_SESSION['nume'];
$pe=$_SESSION['parola'];
$sir="select * from admin where nume='".$nume."' and parola='".$pe."'";
        
$resursa=mysqli_query($con,$sir);
//print $sir;

//print "<meta HTTP-EQUIV='Refresh' CONTENT='13; URL=../index.php'>";

if (mysqli_num_rows($resursa)==0){
	print "<html>";
	print "<title>Acces neautorizat!</title>";
	print "<body style='background-color: rgb(240, 146, 74); color: rgb(0, 0, 0);'  alink='#ee0000' link='#0000ee' vlink='#551a8b'>";
	print "<center><font color='red' size='7'><br><br>";
	print "Ati gresit userul sau parola!<br>Acces neautorizat!";
	print "</font></center>";
	print "</body>";
	print "</html>";
	exit;
}
?>
