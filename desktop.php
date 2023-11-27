<?php include 'cap.php'?>
<?php include 'meniu.php'?>
                <!-------products---------->
<form action="ad_cos.php" method="POST" enctype="multipart/form-data">
    <div class="small-container">
        <h2 class="title">Desktop</h2>
            <div class="row">
                <?php 
                    $sir = "select * from produse where produse.id_categorie=2 order by denumire;";
                    $res = mysqli_query($con,$sir);
                    while($row = mysqli_fetch_array($res)){
                        $id_produs=$row['id_produs'];
                        //$link=$row['link'];
                        $denumire=$row['denumire'];
                        $descriere=$row['descriere'];
                        $suma=$row['pu'];
                        $cantitate=$row['cantitate'];
                        $os=$row['so'];
                        $procesor=$row['procesor'];
                        $ram=$row['ram'];
                        $video=$row['video'];     
              
                        print "<div class='col-4'>";
                ?>
                <a href= <?php echo $row['link']; ?>  >
                <?php echo '<img src="data:image;base64,'.base64_encode($row['imagine']).'" alt="Image" >'; ?>  </a><br>
                 <?php echo $row['denumire']; ?> <br>
                 <!-- <?php echo $row['descriere']; ?> <br><br><br>  -->
                 <?php echo "Ramas in stoc:" .$row['cantitate']." buc"; ?> <br><br>
                 <?php echo "<center><strong>".$row['pu'] ." lei</strong></center>"; ?> <br>
                <form class="" action="ad_cos.php" method="post" autocomplete="off"> <?php
                    if(!empty($_SESSION["id_utilizator"])){
                        $id_utilizator=$_SESSION['id_utilizator'];
                    } else {
                        $id_utilizator="";
                    }
                    print "<input type='hidden' name='id_produs' value='".$id_produs."' >";
                    print "<input type='hidden' name='suma' value='".$suma."' >";
                    print "<input type='hidden' name='descriere' value='".$descriere."' >";
                    print "<input type='hidden' name='denumire' value='".$denumire."' >";

                    print "<input type='hidden' name='os' value='".$os."' >";
                    print "<input type='hidden' name='procesor' value='".$procesor."' >";
                    print "<input type='hidden' name='ram' value='".$ram."' >";
                    print "<input type='hidden' name='video' value='".$video."' >";

                    print "<input type='hidden' name='id_utilizator' value='".$id_utilizator."' >";                                
                    print "<input type='submit' name='submit' value='Adauga in cos' >";
                ?>
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