<?php
function linie(){
    print "<tr onMouseover=\"this.bgColor='#DDDDDD'\" \"onMouseout=\"this.bgColor='white'\">";
}

function mesaj($sir, $timp){
print "<br /><br /><br /><br /><div style='background: red' align: 'center'><center><font size='+1'>$sir<font><center></div>";
print "<meta HTTP-EQUIV='Refresh' CONTENT='$timp; URL=index.php'>";
}

?>
