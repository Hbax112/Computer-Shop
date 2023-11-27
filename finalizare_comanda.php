<?php include 'cap.php'?>
<?php include 'meniu.php'?>

<?php
	require 'conecteaza.php';
	$sesiune=$_SESSION['key_admin'];
	//$sir="select * from cos where sesiune='".$sesiune."'";
	$sir="update cos set livrat=true where sesiune='".$sesiune."'";
	//print $sir;
	$res=mysqli_query($con,$sir);
	
	print "<center><h1>Produsele dumneavoastra sunt in curs de livrare<br/>Va multumim.</h1></center>";
	print "<meta HTTP-EQUIV='Refresh' CONTENT='5; URL=index.php'>";
?>