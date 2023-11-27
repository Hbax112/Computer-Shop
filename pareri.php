<?php include 'cap.php'?>
<?php include 'meniu.php'?>
                
<?php
$sir="select * from feedbacks order by data desc";
$res = mysqli_query($con,$sir);
print "<table border='0'><tr><th>Data</th><th>Nume</th><th>Comentariu</th></tr>";
while($row = mysqli_fetch_array($res)){
    $data=$row['data'];
    $nume=$row['nume'];
    $comentariu=$row['feedback'];
    print "<tr><td>$data</td><td>".$nume."</td><td>".$comentariu."</td></tr>";
}
print "</table>";
?>
<?php include 'coada.php'?>
