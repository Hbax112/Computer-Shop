<?php include 'cap.php'?>
<?php include 'meniu.php'?>
<?php include 'functii.php'?>
<?php
    if(isset($_POST["submit"])){

        $id_categorie=$_POST['id_cat'];
        $denumire=filter_var($_POST['denumire'], FILTER_SANITIZE_STRING);
        //$name = filter_var($name, FILTER_SANITIZE_STRING);
        $pu=filter_var($_POST['pu'], FILTER_SANITIZE_STRING);
        $cantitate=filter_var($POST['cantitate'], FILTER_SANITIZE_STRING);
        $link=filter_var($_POST['link'], FILTER_SANITIZE_STRING);
        $descriere=filter_var($_POST['descriere'], FILTER_SANITIZE_STRING);
        $so=filter_var($_POST['so'], FILTER_SANITIZE_STRING);
        $procesor=filter_var($_POST['procesor'], FILTER_SANITIZE_STRING);
        $ram=filter_var($_POST[ram], FILTER_SANITIZE_STRING);
        $video=filter_var($_POST['video'], FILTER_SANITIZE_STRING);

        $sir="insert into produse (id_categorie, denumire, pu, cantitate, link, descriere, so, procesor, ram, video) values (".$id_categorie.",'".$denumire."',".$pu.",".$cantitate.",'".$link."','".$descriere."','".$so."','".$procesor."','".$ram."','".$video."')";
        mysqli_query($con,$sir);
        mesaj($sir,11);
    }
    else{
        print '<div class="small-container">';

        print "</ br><form name='adaug' action='adaug_produse_ok.php' method='POST' enctype='multipart/form-data'>";
        print "<center><table border='2'> ";
            $sir="select id_categorie, denumire from categorie order by denumire";
            $res=mysqli_query($con,$sir);
            linie();
            print "<tr><td>Categorie produs</td><td>";
            print "<select name='id_cat' size='5'>";
                while ($row=mysqli_fetch_array($res)){
                    $id_cat=$row['id_categorie'];
                    $denumire=$row['denumire'];
                    print "<option value=".$id_cat.">".$denumire."</option>";
                }
            print"</select>";
            print "</td></tr>";
            linie();
            print "<tr><td>Denumire produs</td><td>";
            print "<input type='text' name='denumire' size='150' maxlength='150' placeholder='Denumire produs'>";
            print "</td></tr>";
            print "<tr><td>Pret de vanzare cu TVA (LEI)</td><td>";
            print "<input type='text' name='pu' size='15' maxlength='15' placeholder='Pret de vanzare cu TVA'>";
            print "</td></tr>";
            linie();
            print "<tr><td>Cantitate</td><td>";
            print "<input type='text' name='cantitate' size='15' maxlength='15' placeholder='Cantitatea introdusa'>";
            print "</td></tr>";
            print "<tr><td>Link</td><td>";
            print "<input type='text' name='link' size='250' maxlength='250' placeholder='Links spre pagina produsului'>";
            print "</td></tr>";
            linie();
            print "<tr><td>Descriere produs</td><td>";
            //print "<input type='textarea' name='descriere' size='15' maxlength='15' placeholder='Descrierea cat mai detaliata a produsului'>";
            print "<textarea placeholder='Scurta descriere a produsului' name='descriere' rows='4' cols='90' > </textarea>";
            print "</td></tr>";
            linie();
            print "<tr><td>Incarcati o imagine sugestiva a produsului</td><td>";
            print "<input type='file' name='imagine' size='15' maxlength='15' placeholder='O imagine sugestiva a produsului' accept='image/*'>";
            print "</td></tr>";
            linie();
            print "<tr><td colspan='2'><center><strong>Daca produsul face parte din categoria Laptop/Desktop</strong></center></td>";
            print "</tr>";
            linie();
            print "<tr><td>Sistem de operare</td><td>";
            print "<input type='text' name='so' size='15' maxlength='15' placeholder='Sistem de operare (Linux - varianta, Windows - varianta, NO SO, altele)'>";
            print "</td></tr>";
            linie();
            print "<tr><td>Tip Procesor</td><td>";
            print "<input type='text' name='procesor' size='15' maxlength='15' placeholder='Tip procesor (Intel, AMD, ARM si modelul)'>";
            print "</td></tr>";
            linie();
            print "<tr><td>RAM</td><td>";
            print "<input type='text' name='ram' size='15' value='0' maxlength='15' placeholder='Capacitatea memoriei RAM instalate'>";
            print "</td></tr>";
            linie();
            print "<tr><td>Placa video</td><td>";
            print "<input type='text' name='video' size='15' maxlength='15' placeholder='Tip si model placa video'>";
            print "</td></tr>";
            linie();
            print "<tr><td colspan='2'><center><strong>";
            print "<input type='submit' value='Inregistreaza'>";
            print "</strong></center></td>";
            print "</tr>";
        print "</table></center>";
        print "</form>";
        print "</div>";

    }
?>
<?php include 'coada.php'?>