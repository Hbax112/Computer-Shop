<?php include 'cap.php'?>
<?php include 'meniu.php'?>

<?php
	$sesiune=$_SESSION['key_admin'];
    if (is_null($sesiune)){
        print "<strong><center><br>Nu puteti adauga poduse in cos<br>fara sa fiti autentificat</center></strong>";
		include 'coada.php';
		print "<meta HTTP-EQUIV='Refresh' CONTENT='2; URL=index.php'>";
        exit;
    }

	$id_produs=$_POST['id_produs'];
	$suma=$_POST['suma'];	
	$descriere=$_POST['descriere'];	
	$denumire=$_POST['denumire'];
	$id_utilizator=$_POST['id_utilizator'];
	$cantitate=$_POST['cantitate'];
	$os=$_POST['os'];	
	$procesor=$_POST['procesor'];	
	$ram=$_POST['ram'];	
	$video=$_POST['video'];	

	$sesiune=$_SESSION['key_admin'];
	$data_comanda=date("Y.m.d");
	$cant=$cantitate-1;
	$sir="update produse set cantitate=$cant where id_produs=$id_produs";
	mysqli_query($con,$sir);

//	$sir="insert into cos (id_produs, cantitate, id_utilizator, pu, descriere, denumire, os, procesor, ram, video,sesiune, data_comanda) values ($id_produs, 1,$id_utilizator, $suma, '".$descriere."', '".$denumire."','".$sesiune."','".$data_comanda."')";

	$sir="insert into cos (id_produs, cantitate, id_utilizator, pu, descriere, denumire, so, procesor, ram, video,sesiune, data_comanda) values ($id_produs, 1,$id_utilizator, $suma, '".$descriere."', '".$denumire."','".$os."','".$procesor."','".$ram."','".$video."','".$sesiune."','".$data_comanda."')";


	//print $sir;
	
	mysqli_query($con,$sir);
	print "<br /><br /><br /><center><strong>Cosul a fost actualizat cu succes</strong></center>";
	print "<meta HTTP-EQUIV='Refresh' CONTENT='1; URL=cos.php'>";
?>
<?php include 'coada.php'?>