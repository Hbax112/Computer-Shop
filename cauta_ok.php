<?php include 'cap.php'?>
<?php include 'meniu.php';
    $produs=$_POST['produs'];
    print "<div class='small-container'>";
    print "<h2 class='title'>Produse in magazin - $produs</h2>";
    print "<div class='row'>";
            $sir="select count(*) as nr from produse where denumire like '%".$produs."%'";
            $nr=mysqli_query($con,$sir);
            
            if ($nr!=0){
                $sir = " SELECT * FROM produse where denumire like "."'%".$produs."%'";
                //print $sir;
                $res = mysqli_query($con,$sir);
                while($row = mysqli_fetch_array($res))
                    {
                        $link=$row['link'];
                        $nume=$row['denumire'];
                        $suma=$row['pu'];
                        print "<div class='col-4'>";
                        print "<a href= $link];>";
                        ?>
                        <?php echo '<img src="data:image;base64,'.base64_encode($row['imagine']).'" alt="Imagine"  width="250" height="250">'; ?> 
                        <?php
                        print " </a><br>  <center><strong>";
                        print $row['denumire']; 
                        print " </strong></center></div>";
                    }
                print "</div>";
                }else{
                print "<br><br>Produsul cautat - <strong>$produs</strong> - nu este in stoc";
                }
    print "</div> ";
    
    
include 'coada.php'
?>
