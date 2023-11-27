<?php
 //$nume="";
 print "<html>";
 print "<!DOCTYPE html>";
 print "<html lang='en'>";

    print "<head>";
     print "<title>ComputerShop- nou</title>";
        print "<link rel='stylesheet' href='style.css'>";
		print "<meta charset='utf-8'>";
		print "<meta http-equiv='X-UA-Compatible' content='IE=edge'>";
		print "<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>";
		print "<meta name='description' content=''>";
		print "<meta name='author' content='Diana Nicoleta Sirbu'>";
    print "</head>";
    print "<body>";
  
    print "<h1>Computer Shop - nou<br />  ".ucfirst($nume)."  </h1>";
    print "<div class='menu-bar'>";
        print "<ul>";
            print "<li><a href='index.php'>Acasa</a></li>";
            print "<li><a href='products.php'>Produse</a>";
                print "<div class='sub-menu1'>";
                    print "<ul>";
                        print "<li class='hover-me'><a href='laptop.php'>Laptop ></a>";
                            print "<div class='sub-menu2'>";
                                print "<ul>";
                                    print "<li><a href='apple.php'>MacOS</a></li>";
                                    print "<li><a href='dell.php'>Windows</a></li>";
                                    //print "<li><a href='linux.php'>Linux</a></li>"; 
                                print "</ul>";
                            print "</div>";
                        print "</li>";
                        print "<li class='hover-me'><a href='desktop.php'>Desktop></a>";
                            print "<div class='sub-menu2'>";
                                print "<ul>";
                                    print "<li><a href='dapple.php'>Apple</a></li>";
                                    print "<li><a href='ddell.php'>Windows</a></li>";
                                print "</ul>";
                            print "</div>";
                        print "</li>";
                        print "<li class='hover-me'><a href='tablete.php'>Tablete></a>";
                            print "<div class='sub-menu2'>";
                                print "<ul>";
                                    print "<li><a href='tapple.php'>Toate</a></li>";
                                print "</ul>";
                            print "</div>";
                        print "</li>";
                    print "</ul>";
                print "</div>";
            print "</li>";
            print "<li><a href='cos.php'>Cos</a></li>";
            print "<li><a href='login.php'>Acces</a></li>";
            //print "<li><a href='admin/index.php'>Acces</a></li>";
            if ($nume!=""){
				print "<li><a href='sumar_cos.php'>Istoric comenzi ".ucfirst($nume)." </a></li>";
                print "<li><a href='logout.php'>Iesire ".ucfirst($nume)." </a></li>";
            }
        print "</ul>";
    print "</div>";
?>
