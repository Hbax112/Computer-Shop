<?php 
include 'conecteaza.php';
$sir1 = " SELECT * FROM `categorie` where id_meniu=1 ORDER BY denumire ";
$res1 = mysqli_query($con,$sir1);
//print $sir1;
if ($admin==1){
    print "<div class='menu-bar'>";
       print "<ul>";
            print "<li><a href='index.php'>Acasa</a></li>";
            print "<li><a href='products.php'>Produse</a>";
            print "<div class='sub-menu1'>";
                print "<ul>";
                while($row1 = mysqli_fetch_array($res1)){
                    $denumire=$row1['denumire'];
                    $id_categorie=$row1['id_categorie'];
                    $link=$row1['link'];
                    //print "<li class='hover-me'><a href='laptop.php'>Laptop ></a>";
                    print "<li class='hover-me'><a href=".$link.">".$denumire."></a>";
                        /*
                        print "<div class='sub-menu2'>";
                            $sir2 = " SELECT * FROM subcategorie where id_categorie=$id_categorie ORDER BY denumire";
                            $res2 = mysqli_query($con,$sir2);
                            //print $sir2;                    
                            print "<ul>";
                            while($row2 = mysqli_fetch_array($res2)){
                                $denumire2=$row2['denumire'];
                                $link2=$row2['link'];
                                print "<li><a href=".$link2.">".$denumire2."</a></li>";
                            }
                            print "</ul>";
                        print "</div>";
                        */
                    print "</li>";
                }
            print "</div>";    
            print "<li><a href='cauta.php'>Cauta</a></li>";  
            print "<li><a href='adaug_produse.php'>Adaugare produse</a></li>";
            print "<li><a href='cos.php'>Cos</a></li>";
            print "<li><a href='login.php'>Acces</a></li>";
            //print "<li><a href='admin/index.php'>Acces</a></li>";
            if ($nume!=""){
                print "<li><a href='sumar_cos.php'>Istoric comenzi ".ucfirst($nume)." </a></li>";
                print "<li><a href='logout.php'>Iesire ".ucfirst($nume)." </a></li>";
            }
        print "</ul>";
    print "</div>";    
}
else{   
    print "<div class='menu-bar'>";
	   print "<ul>";
            print "<li><a href='index.php'>Acasa</a></li>";
            print "<li><a href='products.php'>Produse</a>";
            print "<div class='sub-menu1'>";
                print "<ul>";
                while($row1 = mysqli_fetch_array($res1)){
                	$denumire=$row1['denumire'];
                    $id_categorie=$row1['id_categorie'];
                    $link=$row1['link'];
                    //print "<li class='hover-me'><a href='laptop.php'>Laptop ></a>";
                    
                    print "<li class='hover-me'><a href=".$link.">".$denumire."></a>";
                    /*
                        print "<div class='sub-menu2'>";
                            $sir2 = " SELECT * FROM subcategorie where id_categorie=$id_categorie ORDER BY denumire";
                            $res2 = mysqli_query($con,$sir2);
                            //print $sir2;                    
                            print "<ul>";
                            while($row2 = mysqli_fetch_array($res2)){
         		     		    $denumire2=$row2['denumire'];
             			        $link2=$row2['link'];
                                print "<li><a href=".$link2.">".$denumire2."</a></li>";
                            }
                            print "</ul>";
                        print "</div>";
                    */
                    print "</li>";
                    
                }
            print "</div>";    
            print "<li><a href='cauta.php'>Cauta</a></li>";  
            print "<li><a href='cos.php'>Cos</a></li>";
            print "<li><a href='login.php'>Acces</a></li>";
            //print "<li><a href='admin/index.php'>Acces</a></li>";
            if ($nume!=""){
				print "<li><a href='sumar_cos.php'>Istoric comenzi ".ucfirst($nume)." </a></li>";
                print "<li><a href='logout.php'>Iesire ".ucfirst($nume)." </a></li>";
            }
        print "</ul>";
    print "</div>";
}

 ?>