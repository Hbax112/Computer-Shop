<?php
print "<hr><center><br><br>";
print "<font size='+1' color='red'><b>Pentru a avea acces la program, este nevoie de user si parola<br>pe care va rugam sa le introduceti in formularul de mai jos:</b></font><br><br>";
print "<form action='login.php' method='POST'>";
print "<table border='0' bgcolor='#00AAAA'>";
print "<tr> <td align='center' valign='center'>Nume </td><td align='center' valign='center'><input type='text' name='nume' size='15' checked></td> </tr>";
print "<tr> <td align='center' valign='center'>Parola </td><td align='center' valign='center'><input type='password' name='parola' size='15'></td> </tr>";
print "<tr><td align='center' valign='center' colspan='3'><input type='submit' name='submit' value='OK'></tr>";
print "</table>";
print "</form>";
include ('../coada.php');
?>
