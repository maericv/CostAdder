<html>
<body>

<?php
$con = mysql_connect('localhost','root','Venhou890258');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("costs", $con);

$sql="INSERT INTO `costs`.`Costs` (`Name`, `Cost`, `Num`, `Max`)
VALUES
('$_POST[name]','$_POST[cost]', '0', ' ')";


if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
mysql_close($con)

?>&nbsp&nbsp
<a href='javascript:window.location = document.referrer;'>Back to Previous Page</a>
</body>
</html>