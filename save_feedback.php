<?php include 'cap.php'?>
<?php include 'meniu.php'?>
                
<?php

$nume = $_POST['username'];
$feedback = $_POST['feedback-text'];
$data = date("Y/m/d") ;

$sir = "INSERT INTO feedbacks (nume, feedback, data) VALUES ('$nume', '$feedback', '$data')";
mysqli_query($con, $sir);

print "<center><h1>Feeback-ul dumneavoastra a fost trimis<br/>Va multumim.</h1></center>";
    print "<meta HTTP-EQUIV='Refresh' CONTENT='3; URL=index.php'>"

?>
<?php include 'coada.php'?>
