<html>

<title>Schedule</title>

<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<!--banner-->
<table>
<tr>
<td><a href="./load.php">Load</a></td>
<td><a href="./ondemand.php">On Demand</a></td>
<td class="currentpage"><a href="./schedule.php">Schedule</a></td>
<td><a href="./names.php">Set Names</a></td>
</tr>
</table>
<!--end banner-->

<?php
// Create connection
$con=mysqli_connect(localhost,"root","raspberry","rpmd");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result=mysqli_query($con,"SELECT * FROM pet_names ");
$name1="";
$name2="";
while ($row = mysqli_fetch_array($result))
 {
  if($row[0]==1) $name1=$row['pet_name'];
  if($row[0]==2) $name2=$row['pet_name'];
  }

//close sql connection
mysqli_close($con);
?>

<br>
<h3>Select pet</h3>

<table>
<tr>
<td class="one"><a href="./schedone.php"><?php echo $name1; ?></a></td>
<td class="space"></td>
<td class="one"><a href="./schedtwo.php"><?php echo $name2; ?></a></td>
</tr>
</table>

</body>
</html>
