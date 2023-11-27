<?php include 'cap.php'?>
<?php include 'meniu.php'?>

<?php
	$sesiune=$_SESSION['key_admin'];
    if (is_null($sesiune)){
        print "<strong><center><br>Nu puteti adauga poduse in cos<br>fara sa fiti autentificat</center></strong>";
        exit;
    }

	$id_produs=$_POST['id_produs'];
	$suma=$_POST['suma'];	
	$descriere=$_POST['descriere'];	
	$denumire=$_POST['denumire'];
	$id_utilizator=$_POST['id_utilizator'];

	$os=$_POST['os'];	
	$procesor=$_POST['procesor'];	
	$ram=$_POST['ram'];	
	$video=$_POST['video'];	

	$sesiune=$_SESSION['key_admin'];
	$data_comanda=date("Y.m.d");

//	$sir="insert into cos (id_produs, cantitate, id_utilizator, pu, descriere, denumire, os, procesor, ram, video,sesiune, data_comanda) values ($id_produs, 1,$id_utilizator, $suma, '".$descriere."', '".$denumire."','".$sesiune."','".$data_comanda."')";

	$sir="insert into cos (id_produs, cantitate, id_utilizator, pu, descriere, denumire, so, procesor, ram, video,sesiune, data_comanda) values ($id_produs, 1,$id_utilizator, $suma, '".$descriere."', '".$denumire."','".$os."','".$procesor."','".$ram."','".$video."','".$sesiune."','".$data_comanda."')";


	//print $sir;
	
	mysqli_query($con,$sir);
	print "<br /><br /><br /><center><strong>Cosul a fost actualizat cu succes</strong></center>";
	print "<meta HTTP-EQUIV='Refresh' CONTENT='2; URL=cos.php'>";

/*
	print "<br />1. produs=$id_produs";
	print "<br />2. suma=$suma";
	print "<br />3. descriere=$descriere";
	print "<br />4. descriere2=$descriere2";
	print "<br />5. id utilizator=$id_utilizator";

	print "<br />6. os=$os";
	print "<br />7. procesor=$procesor";
	print "<br />8. ram=$ram";
	print "<br />9. video=$video";

	print "<br />10. sir=$sir";
	print "<br />11. sesiune=$sesiune";
	print_r($_SESSION);
*/	

?>