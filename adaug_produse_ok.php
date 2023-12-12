<?php include 'cap.php'?>
<?php include 'meniu.php'?>
<?php
    //include 'conecteaza.php';
    $err=0;

    $id_categorie=$_POST['id_cat'];
    $denumire=$_POST['denumire'];
    $pu=$_POST['pu'];
    $cantitate=$_POST['cantitate'];
    $link=$_POST['link'];
    //$descriere=$_POST['descriere'];
    $descriere=filter_var($_POST['descriere'], FILTER_SANITIZE_STRING);        
    $so=$_POST['so'];
    $procesor=$_POST['procesor'];
    $ram=$_POST['ram'];
    $video=$_POST['video'];
    $imagine=$_POST['imagine'];

    // Ia datele imaginii din formular
    $numeImagine = $_FILES['imagine']['name'];
    $tipImagine = $_FILES['imagine']['type'];
    $marimeImagine = $_FILES['imagine']['size'];
    $caleTemporara = $_FILES['imagine']['tmp_name'];

    // Citirea conținutului imaginii
    $dateImagine = addslashes(file_get_contents($caleTemporara));

    // Înserare în baza de date
//    $sql = "INSERT INTO imagini (nume, imagine) VALUES ('$numeImagine', '$dateImagine')";
    $sir="insert into produse (id_categorie, denumire, pu, cantitate, link, descriere, so, procesor, ram, video, imagine) values (".$id_categorie.",'".$denumire."',".$pu.",".$cantitate.",'".$link."','".$descriere."','".$so."','".$procesor."','".$ram."','".$video."','".$dateImagine."')";
   
    if (mysqli_query($con, $sir)) {
        echo "Produsul a fost încărcat cu succes în baza de date.";
    } else {
        echo "Eroare la încărcarea produsului: " . mysqli_error($con);
    }
    print "<meta HTTP-EQUIV='Refresh' CONTENT='10; URL=index.php'>";
?>
<?php include 'coada.php'?>