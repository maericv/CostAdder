
<!DOCTYPE html >
<html>
<head>
<title>Cost Calculator</title>
    <link rel="stylesheet" href="style.css" />

</head>

	<body> 
	<?php
	$connection=mysql_connect('localhost','root','Venhou890258') or die(mysql_error());
	mysql_select_db('costs',$connection) or die(mysql_error());
	$query=mysql_query("SELECT * FROM Costs") or die(mysql_error());
	
	if(mysql_num_rows($query)>0):
	
	?>
	 <div>





<form>

    <h1>Monthly Costs</h1>

	
	<ul>
  <li>
   Name <span>&nbsp&nbsp&nbsp&nbsp&nbsp Cost&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  </li>
  <?php 
  // looping 

  while($row=mysql_fetch_object($query)):?>
  <li>
  <?php echo $row->Name; // row name ?>  <span> $<?php echo $row->Cost; //row cost  ?> <span> &nbsp&nbsp&nbsp&nbsp
  <a href="delete.php?id=<?php echo $row->ID; ?>"> Delete </a>
  </li>
  <?php endwhile;?>

</il>
	  <?php endif; ?>
	  
</body>

    <div class="total"  style="text-align:right">
<?php
	
	$total = mysql_query("SELECT SUM(Cost) AS sum FROM Costs");
	$row = mysql_fetch_assoc($total); 
	echo "Total: $";
	echo $row['sum'];
	?>
	</form>
	<br>
	<form action="insert.php" method="post">
	Entry Adder
	<br> Name: <input type="text" name="name" size="10"> Cost: <input type="text" name="cost"  size="5" pattern="(\d{2,})([\.])(\d{2})" value="59.99"> 
	<input type="submit" value="Add"></span>
	</form>
	</div>
</html>