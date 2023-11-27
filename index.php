<?php include 'cap.php'?>
<?php include 'meniu.php'?>

        <form action="" method="POST" enctype="multipart/form-data">
        <!-- <div class="small-container">  -->
        <h2 class="title"></h2>
            
           <div class="row"> 

                    <?php 

                        //$sir = " SELECT * FROM `produse` ORDER BY id_produs ";
                        $sir = " SELECT * FROM `categorie` ORDER BY id_categorie ";
                        $res = mysqli_query($con,$sir);

                        while($row = mysqli_fetch_array($res))
                        {
                            $link=$row['link'];
                            $nume=$row['denumire'];
                            //$suma=$row['pu'];
                       

                            print "<div class='col-4'>";
                            
                            ?>
                        
                            <a href= <?php echo $row['link']; ?>  >
                            <?php echo '<img src="data:image;base64,'.base64_encode($row['imagine']).'" alt="Imagine"  width="250" height="250">'; ?>  </a><br>
                            
                             <center><strong>
                             <?php echo $row['denumire']; ?> </strong></center>
				
                             </div>
                            
                        <?php
                        }
                    ?>
                        
            </div>
            </div>
        </form>
        

<?php include 'coada.php'?>
