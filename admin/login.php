<?php

//verifica corectitudinea datelor introduse:

include '../conecteaza.php';
$nume=$_POST['nume'];
$parola=$_POST['parola'];
//print "<br>....<br>";
//print $_POST['nume'];
$pe=md5($parola);

//print $parola;
//print $pe;

$user=$nume;
$sir="select * from admin where nume='".$nume."'";
//print $sir;

 
$res=mysqli_query($con, $sir);
//print $res;
while ($row=mysqli_fetch_array($res)){
	$cnp=$row['cnp'];
}

//echo "User= $nume, cnp=".$cnp;

if ($nume=="" or $parola==""){

	print "<center>";
		print "<html>";
		print "<title>Acces neautorizat!</title>";
		print "<body style='background-color: rgb(200, 250, 250); color: rgb(0, 0, 0);'  alink='#ee0000' link='#0000ee' vlink='#551a8b'>";
		print "<center><font color='red' size='7'><br><br>";
		print "<font size='+3' color='red'>Trebuie introduse si numele si parola</font>";
		print "</font></center>";
		print "</body>";
		print "</html>";
 		print "<meta HTTP-EQUIV='Refresh' CONTENT='2; URL=index.php'>";
	}
else
	{
	//include ('../cap.php');
	//echo "User= $nume, cnp=".$cnp;
	$sir="select * from admin where nume='".$nume."' and parola='".$pe."'";
	//print $sir;
	$resursa=mysqli_query($con,$sir);
	$x= mysqli_num_rows($resursa);
	//print $x;
	if (mysqli_num_rows($resursa)==0){
		print "<title>Acces neautorizat!</title>";
		print "<body style='background-color: rgb(200, 250, 250); color: rgb(0, 0, 0);'  alink='#ee0000' link='#0000ee' vlink='#551a8b'>";
		print "<center><font color='red' size='7'><br><br>";
		print "Ati gresit userul sau parola!<br>mai incearca!";
		print "</font></center>";
		include ('../coada.php');
 		print "<meta HTTP-EQUIV='Refresh' CONTENT='5; URL=index.php'>";
	}
	else{
		session_start();
                //include ('../cap.php');
                $cale="http://".$_SERVER['SERVER_ADDR'].dirname($_SERVER['SCRIPT_NAME']);//
                //echo $cale;                 
                $l=strlen($cale);
                $cale_dir=substr($cale,0, $l-6);
                //echo "caledir=".$cale_dir.",l=".$l;

 				$_SESSION['nume']=$nume;
 				$_SESSION['parola']=$pe;
				$_SESSION['key_admin']=session_id();
       			$_SESSION['user_app']=$nume;
        		$_SESSION['id_utilizator']=$id_utilizator;
                //$_SESSION['cale']=$cale_dir;
		print "<body style='background-color: rgb(200, 250, 250); color: rgb(0, 0, 0);'  alink='#ee0000' link='#0000ee' vlink='#551a8b'>";
		print "<center><font color='blue' size='7'><br><br><br>";
		$nn=ucfirst($nume);
		print "Bine ai revenit, <br /> $nn, ".$id_utilizator."</i></b>";
		print "</font></center>";
		include ('../coada.php');
 		print "<meta HTTP-EQUIV='Refresh' CONTENT='3; URL=../index.php'>";
	}
}
?>
