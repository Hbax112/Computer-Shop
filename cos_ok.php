<?php include 'cap.php'?>
<?php include 'meniu.php'?>
<?php
        include 'conecteaza.php';
        include 'functii.php';
        $err=0;

        $id_produs=$_POST['id_produs'];
        $cantitate=$_POST['cantitate'];
        $submit=$_POST['submit'];
        $incrementeaza=$_POST['incrementeaza'];
        $decrementeaza=$_POST['decrementeaza'];
        $elimina=$_POST['sterge'];

        //determinam stocul produsului pentru a-l reface in cazul in care un produs se elimina din cos
        $sir1="select * from produse where id_produs=$id_produs";
        print $sir1;
        $res1=mysqli_query($con,$sir1);
        while ($row1=mysqli_fetch_array($res1)){
            $cantitate1=$row1['cantitate'];
        }


        if (isset($_POST['incrementeaza'])){
            $cantitate=$cantitate+1;
            $sir="update cos set cantitate = $cantitate where id_produs=$id_produs and id_utilizator=".$_SESSION['id_utilizator'];
            mysqli_query($con,$sir);
            $sir="update produse set cantitate = $cantitate1-1 where id_produs=$id_produs";  // reface cantitatea  (cea calculata) in tabela produse
            mysqli_query($con,$sir);
            //print $sir;
        }
        if (isset($_POST['decrementeaza'])){
            $cantitate=$cantitate-1;
            $sir="update cos set cantitate = $cantitate where id_produs=$id_produs and id_utilizator=".$_SESSION['id_utilizator'];
            mysqli_query($con,$sir);
            $sir="update produse set cantitate = $cantitate1+1 where id_produs=$id_produs";  // reface cantitatea (cea calculata) in tabela produse
            mysqli_query($con,$sir);
            //print $sir;
        }
        if (isset($_POST['sterge'])){
            $sir="delete from cos where id_produs=$id_produs and id_utilizator=".$_SESSION['id_utilizator'];
            mysqli_query($con,$sir);
            $sir="update produse set cantitate = $cantitate1+$cantitate where id_produs=$id_produs";  // reface cantitatea (cea citita initial din tabela cos) in tabela produse
            mysqli_query($con,$sir);
            //print $sir;
        }
//sterge din cos produsele cu cantitate 0 ca sa nu mai apara in cosul utilizatorului, cu cantitate zero
$sir="delete from cos where cantitate = 0";
mysqli_query($con,$sir);
print "<br /><br /><br /><center><strong>Cosul a fost actualizat cu succes</strong></center>";
print "<meta HTTP-EQUIV='Refresh' CONTENT='1; URL=cos.php'>";

?>
<?php include 'coada.php'?>