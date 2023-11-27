<?php //include 'admin/autorizare.php' ?>
<?php include 'cap.php'?>
<?php include 'conecteaza.php' ?>


	<br><br><br><br><br><br><br><br>

    <!-------products---------->
    <!-- se introduc randurile marcate cu //*** -->


        <form action="ad_cos.php" method="POST" enctype="multipart/form-data"> <!-- //*** ad_cos.php  -->
        <div class="small-container">
        <h2 class="title">Tablete</h2>
            <div class="row">
                        <?php 

							$sir = " SELECT * FROM `produse` where descriere='tableta' and descriere2='android' ORDER BY id_p";
                        $res = mysqli_query($con,$sir);

                        //print $sir;

                        while($row = mysqli_fetch_array($res))
                        {
                            $link=$row['link_p'];
                            $nume=$row['name_p'];
                            $suma=$row['amount_p'];
                            $id_produs=$row['id_p'];  //***
                            $descriere=$row['descriere'];  //***
                            $descriere2=$row['descriere2'];  //***

							$descriere2=$nume;
					
                            print "<div class='col-4'>";
                            

                            //print $sir;
                            
                            //print $link.", ".$nume.", ".$suma;
                            print $nume.", ".$suma. " lei";
                            ?>
                        
                            <a href= <?php echo $row['link_p']; ?>  >
                            <?php echo '<img src="data:image;base64,'.base64_encode($row['image_p']).'" alt="Image" >'; ?>  </a><br>
                            
                             <?php echo $row['name_p']; ?> <br>
                             <?php echo $row['amount_p']; ?> <br>
                           



								<form class="" action="ad_cos.php" method="post" autocomplete="off"> 
                                <?php
                                if(!empty($_SESSION["id_utilizator"])){
                                    $id_utilizator=$_SESSION['id_utilizator'];
                                } else {
                                    $id_utilizator="";
                                }
                                print "<input type='hidden' name='id_produs' value='".$id_produs."' >";
                                print "<input type='hidden' name='suma' value='".$suma."' >";
                                print "<input type='hidden' name='descriere' value='".$descriere."' >";
                                print "<input type='hidden' name='descriere2' value='".$descriere2."' >";                                
                                print "<input type='hidden' name='id_utilizator' value='".$id_utilizator."' >";                                
                                print "<input type='submit' name='submit' value='Inregistreaza' >";
                                ?>
                                <!--
                                <button class="button" type="submit" style="background: #D3C5FF;"> Adauga in cos </button>
                                <input type="hidden"> 
                            -->
							</form>
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