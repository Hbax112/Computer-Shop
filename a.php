<?php
        include 'conecteaza.php';
        include 'functii.php';
        $id_categorie=$_POST['id_cat'];
        $denumire=$_POST['denumire'];
        $pu=$_POST['pu'];
        $cantitate=$_POST['cantitate'];
        $link=$_POST['link'];
        $descriere=$_POST['descriere'];
        $so=$_POST['so'];
        $procesor=$_POST['procesor'];
        $ram=$_POST[ram];
        $video=$_POST['video'];

        //print $denumire;

        //$sir="insert into produse (id_categorie, denumire, pu, cantitate, link, descriere, so, procesor, ram, video) values (".$id_categorie.",".$denumire.",".$pu.",".$cantitate.",".$link.",".$descriere.",".$so.",".$procesor.",".$ram.",".$video.")";


        //$sir="insert into produse (id_categorie, denumire, pu, cantitate, link, descriere, so, procesor, ram, video) values (".$id_categorie.",'".$denumire."',".$pu.",".$cantitate.",'".$link."','".$descriere."','".$so."','".$procesor."','".$ram."','".$video."')";

        //$sir="insert into produse (id_categorie, denumire, pu, cantitate, link, descriere, so, procesor, ram, video) values ($id_categorie,$denumire,$pu,$cantitate,$link,$descriere,$so,$procesor,$ram,$video)";


        //$sir="insert into produse (id_categorie, denumire, pu, cantitate, link, descriere, so, procesor, ram, video) values ($id_categorie,$denumire,$pu,$cantitate,$link,$descriere,$so,$procesor,$ram,$video)";
        

        $sir="insert into produse (id_categorie, denumire, pu, cantitate, link, descriere, so, procesor, ram, video) values (".$id_categorie.",'".$denumire."',".$pu.",".$cantitate.",'".$link."','".$descriere."','".$so."','".$procesor."','".$ram."','".$video."')";
        mysqli_query($con,$sir);
         mesaj($sir,11);

        print $sir;
?>