<html>
<body>

<?php
$con = mysql_connect('localhost','root','Venhou890258');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("costs", $con);

$delete = $_GET['id'];

$sql="DELETE FROM `costs`.`Costs` WHERE `ID` = $delete";


if (!mysql_query($sql,$con))
  {
	  
  die('Error: ' . mysql_error());
  }
echo "1 record deleted";

mysql_close($con)
?>
&nbsp&nbsp

<a href='javascript:window.location = document.referrer;'>Back to Previous Page</a>
</body>
</html>