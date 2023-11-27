<?php
session_start();
if(!empty($_SESSION["id_utilizator"])){
    header("Location: welcome.php");
}
?>

<?php include 'cap.php'?>
<?php include 'meniu.php'?>


<?php
if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $nume=$_POST['nume'];
    $parola = md5($_POST["parola"]);
    $result = mysqli_query($con, "SELECT * FROM admin WHERE email = '$email' OR nume = '$nume'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        if($parola == $row["parola"]){
            $_SESSION["login"] = true;
            $_SESSION["id_utilizator"] = $row["id_utilizator"];
            $_SESSION["nume"] = $row["nume"];
            $_SESSION['key_admin']=session_id();
            header("Location: welcome.php");
        }
        else{
            echo
            "<script> alert('Parola gresita'); </script>";
        }
    }
    else{
        echo
        "<script> alert('Utilizator necunoscut'); </script>";
    }
}

print $nume;

?>
 
	<!----------account----------->
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <a href="login.php"><span>Conectare</span></a>
                            <a href="registration.php"><span>Inregistreaza</span></a>
                        </div>
                        <h3>Conectare</h3>
                        <form id="RegForm" method="post" autocomplete="off">
                            <input type="text" placeholder="Nume" name="nume" id="nume" required value="">
                            <input type="password" placeholder="Parola" name="parola" id="parola" required value="">
                            <button type="submit" class="btn" name="submit">Conecteaza</button>
                            <!--<a href="admin/index.php">Admin</a>-->
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include 'coada.php'?>