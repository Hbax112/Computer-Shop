<?php include 'cap.php'?>
<?php include 'meniu.php'?>

 
    <!------cart--------->
<?php
    print "<div class='small-container cart-page'>";
    $sesiune=$_SESSION['key_admin'];
    if (is_null($sesiune)){
        print "<strong><center><br>Nu aveti produse in cos</center></strong>";
        exit;
    }
    $sir="select count(*) as nr from cos where sesiune='".$sesiune."'";
    //print $sir;
    if (mysqli_query($con, $sir)==0){
        print "<strong><center><br>Nu aveti produse in cos</center></strong>";
        exit;
    }
    else{
        print "<table>";

            print "<tr>";
                print "<th>Produs</th>";
                print "<th>Cantitate</th>";
                print "<th>Valoare</th>";
                print "<th>Operatii</th>";
            print "</tr>";

		
		$total=0;
		$sir="update cos set livrat=0 where livrat<>1 and sesiune='".$sesiune."'";
        //print $sir;
        mysqli_query($con,$sir);

       
            $sir="select * from cos where sesiune='".$sesiune."' and livrat!=1";
    		//print "<br>".$sir;
    		$resursa=mysqli_query($con,$sir);
	   	   while ($row=mysqli_fetch_array($resursa)){
			 $descriere=$row['descriere'];
			 $denumire=$row['denumire'];
			 $cantitate=$row['cantitate'];
			 $suma=$row['pu'];
			 $suma=floatval($suma);
			 $total=$total+$suma*$cantitate;
             $id_produs=$row['id_produs'];

			 //print "<div class='small-container cart-page'><tr><td>".$denumire."  ".$descriere." </td><td> ".$cantitate."</td><td> ".$suma." lei</td></tr></div>";
             print "<div class='small-container cart-page'><tr><td>".$denumire."  ".$descriere." </td><td> ".$cantitate."</td><td> ".$suma." lei</td>";
             print "<td>";
                print "<form action='cos_ok.php' method='POST' enctype='multipart/form-data'>";
                    print "<input type='submit' name='incrementeaza' value='+'>";
                    print "<input type='submit' name='decrementeaza' value='-'>";
                    print "<input type='submit' name='sterge' value='Elimina'>";
                    print "<input type='hidden' name='cantitate' value=".$cantitate.">";
                    print "<input type='hidden' name='id_produs' value=".$id_produs.">";

                print "</form>";
             print "</td>";
             print"</tr></div>";
		  }
		}

        print "</table>";

        print "<div class='total-price'>";
            print "<table>";
                print "<tr>";
                    print "<td>Total</td>";
                    print "<td>$total lei</td>";
                print "</tr>";

                print "<tr>";
                    $tva=round($total*19/119,2);
                    print "<td>Din care TVA 19%</td>";
                    print "<td>$tva</td>";
                print "</tr>";

                print "<tr>";
                    print "<td>Pret fara TVA</td>";
                    print "<td>".round($total-$tva,2)." lei</td>";
                print "</tr>";
				print "</table>";
				print "</div>";
			print "</div>";

				print "<table>";
                print "<tr>";
					print "<form action='finalizare_comanda.php' method='post'>";
						print "<td colspan='3'><input type='submit' name='submit' value='Plata' ></td>";
					print "</form>";
                print "</tr>";
				print "</table>";
		?>        

<?php include 'coada.php'?>


