<html>

<title>On Demand</title>

<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<!--banner-->
<table>
<tr>
<td><a href="./load.php">Load</a></td>
<td class="currentpage"><a href="./ondemand.php">On Demand</a></td>
<td><a href="./schedule.php">Schedule</a></td>
<td><a href="./names.php">Set Options</a></td>
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

//Get Names
$result=mysqli_query($con,"SELECT * FROM pet_names ");
$name1="";
$name2="";
while ($row = mysqli_fetch_array($result))
 {
  if($row[0]==1) $name1=$row['pet_name'];
  if($row[0]==2) $name2=$row['pet_name'];
  }


if (isset($_POST['p1']))
{

//define strings used in performing sql transactions	 
$sql_update = "INSERT INTO on_demand (pill_number,pet_number) VALUES (1,1)";

mysqli_query($con,$sql_update); 
echo "<br>Calling " . $name1 . " to take Pill 1";

unset($_POST['p1']);
}

if (isset($_POST['p2']))
{

//define strings used in performing sql transactions     
$sql_update = "INSERT INTO on_demand (pill_number,pet_number) VALUES (2,1)";

mysqli_query($con,$sql_update); 
echo "<br>Calling " . $name1 . " to take Pill 2";


unset($_POST['p2']);
}

if (isset($_POST['p3']))
{

//define strings used in performing sql transactions     
$sql_update = "INSERT INTO on_demand (pill_number,pet_number) VALUES (3,1)";

mysqli_query($con,$sql_update); 
echo "<br>Calling " . $name1 . " to take Pill 3";

unset($_POST['p3']);
}

if (isset($_POST['p4']))
{

//define strings used in performing sql transactions     
$sql_update = "INSERT INTO on_demand (pill_number,pet_number) VALUES (4,2)";

mysqli_query($con,$sql_update); 
echo "<br>Calling " . $name2 . " to take Pill 1";

unset($_POST['p4']);
}

if (isset($_POST['p5']))
{

//define strings used in performing sql transactions     
$sql_update = "INSERT INTO on_demand (pill_number,pet_number) VALUES (5,2)";

mysqli_query($con,$sql_update); 
echo "<br>Calling " . $name2 . " to take Pill 2";

unset($_POST['p5']);
}

if (isset($_POST['p6']))
{

//define strings used in performing sql transactions     
$sql_update = "INSERT INTO on_demand (pill_number,pet_number) VALUES (6,2)";

mysqli_query($con,$sql_update); 
echo "<br>Calling " . $name2 . " to take Pill 3";

unset($_POST['p6']);
}

//post item to sql
//if( $update_item == false) {
//	die( print_r( sqlsrv_errors(),true));
//	}

//echo "record added";


//close sql connection
mysqli_close($con);
?>

<h3>Select location to fill</h3>
<br>

<form action="ondemand.php" method="post">
<table>
<tr>
<th class="one"><?php echo $name1; ?></th>
<th class="space"></th>
<th class="three"><?php echo $name2; ?></th>
</tr>
<tr>
<td class="one"><input class="loadbutton" type="submit" name="p1" value="Pill 1" id="submit"></td>
<td class="space"></td>
<td class="one"><input class="loadbutton" type="submit" name="p4" value="Pill 1" id="submit"></td>

</tr>
<tr>
<td class="one"><input class="loadbutton" type="submit" name="p2" value="Pill 2" id="submit"></td>
<td class="space"></td>
<td class="one"><input class="loadbutton" type="submit" name="p5" value="Pill 2" id="submit"></td>

</tr>
<tr>
<td class="one"><input class="loadbutton" type="submit" name="p3" value="Pill 3" id="submit"></td>
<td class="space"></td>
<td class="one"><input class="loadbutton" type="submit" name="p6" value="Pill 3" id="submit"></td>

</tr>
</table>
</form>
</body>
</html>
