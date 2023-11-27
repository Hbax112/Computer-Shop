<?php //include 'admin/autorizare.php' ?>
<?php include 'cap.php'?>

	<br><br><br><br><br><br><br><br>

    <!-------products---------->
        <form action="" method="POST" enctype="multipart/form-data">
        <div class="small-container">
        <h2 class="title">Laptopuri</h2>
            <div class="row">
                <?php 
                        $sir = " SELECT * FROM `produse` where descriere='laptop' ORDER BY id_p ";
                        $res = mysqli_query($con,$sir);

                        //print $sir;

                        while($row = mysqli_fetch_array($res))
                        {
                            $link=$row['link_p'];
                            $nume=$row['name_p'];
                            $suma=$row['amount_p'];
                       

                            print "<div class='col-4'>";
                            

                            //print $sir;
                            
                            //print $link.", ".$nume.", ".$suma;
                            print $nume.", ".$suma. " lei";
                            ?>
                        
                            <a href= <?php echo $row['link_p']; ?>  >
                            <?php echo '<img src="data:image;base64,'.base64_encode($row['image_p']).'" alt="Image" >'; ?>  </a><br>
                            
                             <?php echo $row['name_p']; ?> <br>
                             <?php echo $row['amount_p']; ?> <br>
                           


							<!--
                             <form class="" action="" method="post" autocomplete="off">
                                <button class="button" type="submit" style="background: #D3C5FF;"> Adauga in cos </button>
                                <input type="hidden"> 
                            </form> 
							
							-->
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