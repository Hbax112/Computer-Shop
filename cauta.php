<?php include 'cap.php'?>
<?php include 'meniu.php'?>
                <!-------products---------->
<form action="cauta_ok.php" method="POST" enctype="multipart/form-data">
    <div class="small-container">
        <h2 class="title">Cauta denumire produse in magazin</h2>
            <div class="row">
                <input type="text" placeholder="Cauta" name="produs" id="produs" required value=""><br>
                <input type='submit' name='submit' value='Cauta produse'>
         </div>
    </div>        
</form>
<?php include 'coada.php'?>