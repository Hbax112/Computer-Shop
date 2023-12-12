<?
//include ('set.css');
print "<div id=postit>";
		//$sir="select distinct anul, luna from istoric order by anul desc, luna desc";
		//$resursa=mysql_query($sir);
		print "Lunile facturate:<br>";
		//while ($row=mysql_fetch_array($resursa)){
			//$luna=$row['luna'];
			//$an=$row['anul'];
			print "---------------------<br>Anul: <b>$an</b>, luna: <b>$luna</b><br>";

?>
postare:pstit	{
	position:absolute;
    width:250;
    padding:5px;
    background-color:lightyellow;
    border:1px solid black;
    visibility:hidden;
    z-index:100;
    cursor:hand;
}