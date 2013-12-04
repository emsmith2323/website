<html>

<title>Load</title>

<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<!--banner-->
<table>
<tr>
<td><a href="./load.php">Load</a></td>
<td><a href="./ondemand.php">On Demand</a></td>
<td><a href="./schedule.php">Schedule</a></td>
<td class="currentpage"><a href="./names.php">Set Names</a></td>
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

if (isset($_POST['p1']) && $_POST['p1'] != "")
{

//define strings used in performing sql transactions	 
$sql_update = "INSERT INTO on_demand VALUES ('0','1')";

mysqli_query($con,$sql_update); 

unset($_POST['p1']);
}

if (isset($_POST['p2']) && $_POST['p2'] != "")
{

//define strings used in performing sql transactions     
$sql_update = "UPDATE pet_names SET pet_name='$_POST[p2]' WHERE pet_number='2'";

mysqli_query($con,$sql_update); 

unset($_POST['p2']);
}

//post item to sql
//if( $update_item == false) {
//	die( print_r( sqlsrv_errors(),true));
//	}

//echo "record added";

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

<h3>Select location to fill</h3>
<br>

<form action="load.php" method="post">
<table>
<tr>
<th class="one"><?php echo $name1; ?></th>
<th class="space"></th>
<th class="three"><?php echo $name2; ?></th>
</tr>
<tr>
<td class="one"><input type="button" name="p1" value="p1">Pill 1</a></td>
<td class="space"></td>
<td class="three"><a href="./four.html">Pill 1</a></td>
</tr>
<tr>
<td class="one"><a href="./space.html">Pill 2</a></td>
<td class="space"></td>
<td class="three"><a href="./five.html">Pill 2</a></td>
</tr>
<tr>
<td class="one"><a href="./three.html">Pill 3</a></td>
<td class="space"></td>
<td class="three"><a href="./six.html">Pill 3</a></td>
</tr>
</table>
</form>
</body>
</html>
