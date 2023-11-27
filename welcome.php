<?php include 'cap.php'?>
<?php include 'meniu.php'?>

<?php
session_start();
global $nume_utilizator;
global $admin;
require 'conecteaza.php';
if(!empty($_SESSION["id_utilizator"])){
    $id_utilizator = $_SESSION["id_utilizator"];
    $result = mysqli_query($con, "SELECT * FROM admin WHERE id_utilizator = $id_utilizator");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        $nume=$row['nume'];
        $nume_utilizator=$nume;
        $admin=$row['admin'];
    }
}
else{
    header("Location login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ComputerShop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>




	<br>
    <h2>Bine ai revenit, <?php echo ucfirst($row["nume"]); ?></h2>
    <a href="logout.php"><button type="submit" class="btn">Logout</button></a>
  
     <form class="form-container1" action="https://formspree.io/f/mbjvvgzw" method="POST" id="form">

            <h2>Întreabă-ne</h2>
            <br>
            <center><div id="validare-msg" style="color: rgb(210, 156, 156);" ></div></center>
            
            <div class = "nc" style= "margin-top:10px;">
                <label class = "p1">Adresă email</label>
                <br>
                <input type="text" class="chenarInput" id="Mail"  name="Email">
            </div>
    
           <div class="intrebare">
                <textarea id = "mesaj" name="Mesaj" cols="30" rows="10" placeholder="Textul tau..."  required></textarea>
    
           </div>
    
            <center><button type="submit" class="buton">Trimite</button></center>
        </form>

    <script>
        function validareMail()
        {
            let x = document.getElementById("Mail");
            const sablon = /\S+@\S+\.\S+/;
            if(!x.value.match(sablon))
                document.getElementById("validare-msg").innerHTML = "Adresa de email invalidă!";
        }        
    </script>

<br>
<br>



<div id="feedback-form">
  <form class="form-container1" action="save_feedback.php" method="POST" id="form">
    <h2> Lasa un feedback! </h2>
    <br>
    <label for="username">Nume:</label>
    <?php
        print "<input type='text' id='username' name='username' value='".$nume_utilizator."'' required>";
    ?>
    <label for="feedback-text">Feedback:</label>
    <div class="ratings" >
    <textarea id="feedback-text" name="feedback-text" rows="10" placeholeder="Textul tau..."required></textarea>
    </div>
    <center><button type="submit" class="buton" name="submit" >Trimite</button></center>
    <!--<input type='submit' class="buton" name='submit' value='Trimite feedback'>-->
  </form>
</div>

<?php include 'coada.php' ?>


