<?php
require 'conecteaza.php';
if(!empty($_SESSION["id_utilizator"])){
    header("Location: welcome.php");
}
if(isset($_POST["submit"])){
    $utilizator = $_POST["nume"];
    $email = $_POST["email"];
    $parola = md5($_POST["parola"]);
    $duplicate = mysqli_query($con, "SELECT * FROM admin WHERE nume = '$utilizator' OR email = '$email'");
    if(mysqli_num_rows($duplicate) > 0){
        echo
        "<script> alert('Numele de utilizator este inregistrat'); </script>";
    }
    else{
            $client="client";
            $query = "INSERT INTO admin (nume,parola,departament,email) VALUES ('$utilizator','$parola','$client','$email')";
            //print $query;
            mysqli_query($con,$query);
            echo
            "<script> alert($query'<br>$utilizator a fost inregistrat cu succes'); </script>";
            print "<meta HTTP-EQUIV='Refresh' CONTENT='1; URL=index.php'>";
    }
}
?>

<?php include 'cap.php'?>


    <br><br><br><br><br><br>

    <!----------account----------->
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <a href="login.php"><span>Conecteaza</span></a>
                            <a href="registration.php"><span>Inregistreaza</span></a>
                        </div>
                        <h3>Inregistrare</h3>
                        <form id="RegForm" method="post" autocomplete="off">
                            <input type="text" placeholder="Nume utilizator" name="nume" id="nume" required value="">
                            <input type="email" placeholder="Email" name="email" id = "email" required value="">
                            <input type="password" placeholder="Parola" name="parola" id="parola" required value="">
                            <button type="submit" class="btn" name="submit">Inregistreaza</button>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include 'coada.php'?>