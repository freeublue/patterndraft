<p><b>Start a new pattern</b></p>
<br /><a href='insertpattern.php'>Set up</a><br />
<?
include "conf.php";
$sq = $db->query("SELECT * FROM pattername");
while($row = $sq->fetchArray(SQLITE3_ASSOC) ) { 

echo "$row[pattern_title] Add pattern piece<a href='insertnew.php?id=$row[pt_id]'>$row[pattern_title]</a><br />"; 
echo "$row[pattern_title] Add sections to pattern piece<a href='addsections.php?id=$row[pt_id]'>$row[pattern_title]</a><br />"; 
echo "$row[pattern_title] Render image to pattern piece<a href='renderpieces.php?id=$row[pt_id]'>$row[pattern_title]</a><br />"; 
} 

?>
<b><a href='editlead.php'>Edit</a></b><br /><br />
<b><a href='grade.php'>Grade</a></b><br />
