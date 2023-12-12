<?php //include 'admin/autorizare.php' ?>
<?php include 'cap.php'?>
<?php include 'meniu.php'?>


    <!-------products---------->
        <form action="" method="POST" enctype="multipart/form-data">
        <div class="small-container">
        <h2 class="title">Cele mai cautate produse - in ordine alfabetica a categoriei si denumirii</h2>
            <div class="row">
                <?php 
                    $sir = " SELECT * FROM `produse` ORDER BY id_categorie,denumire ";
                    $res = mysqli_query($con,$sir);
                    //print $sir;
                    while($row = mysqli_fetch_array($res))
                        {
                            $link=$row['link'];
                            $nume=$row['denumire'];
                            $suma=$row['pu'];
                            $id_produs=$row['id_produs'];
                            $cantitate=$row['cantitate'];
                            print "<div class='col-4'>";
                            ?>
                            <a href= <?php echo $row['link']; ?> >
                            <?php echo '<img src="data:image;base64,'.base64_encode($row['imagine']).'" alt="Image" >'; ?>  </a><br>
                            <?php print $nume.", <br/><strong>Pret unitar: ".$suma. " lei</strong>" ?>    
                            <?php 
                            //print "<div class='small-container cart-page'><tr><td>".$denumire."  ".$descriere." </td><td> ".$cantitate."</td><td> ".$suma." lei</td>";
                            print "<div class='small-container cart-page'><tr><td><strong>Stoc: </strong></td><td> <strong>".$cantitate."</strong></td> buc <td> </td>";
                            if ($admin==1){
                                print "<td>";
                                    print "<form action='stoc_ok.php' method='POST' enctype='multipart/form-data'>";
                                        print "<input type='submit' name='incrementeaza' label='Incrementeaza cantitatea' value='Incrementeaza cantitatea (+)' title='Incrementeaza cantitatea de pe stoc'>";
                                        print "<input type='submit' name='decrementeaza' value='Decrementeaza cantitatea (-)' title='Decrementeaza cantitatea de pe stoc'>";
                                        print "<input type='submit' name='sterge' value='Elimina produsul din stoc' title='Elimina produsul din stoc'>";
                                        print "<input type='text' name='suma' value=".$suma." lei title='Actualizeaza pretul'>";
                                        print "<input type='submit' name='act_pret' value='Actualizeaza pretul produsului' title='Actualizeaza pretul produsului'>";
                                        print "<input type='hidden' name='cantitate' value=".$cantitate.">";
                                        print "<input type='hidden' name='id_produs' value=".$id_produs.">";
                                    print "</form>";
                                print "</td>";
                                }
                                print"</tr></div>";
                            ?>
                             </div>
                        <?php
                        }
                    ?>
                        

                        
            </div>
            </div>
        </form>
 <button onclick="topFunction()" id="myBtn" ><img src="imagini/b2.jpeg" width="70" height="50"/></button>

<script>

let mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
        
    <!--------info-footer-page-------->
  <?php include 'coada.php'?>