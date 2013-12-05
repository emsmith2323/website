<html>

<title>Set Options</title>

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
<td class="currentpage"><a href="./names.php">Set Options</a></td>
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
$sql_update = "UPDATE pet_names SET pet_name='$_POST[p1]' WHERE pet_number='1'";

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


if (isset($_POST['email']) && $_POST['email'] != "")
{

//define strings used in performing sql transactions     
$sql_update = "UPDATE user_params SET user_value='$_POST[email]' WHERE param_type='1'";

mysqli_query($con,$sql_update); 

unset($_POST['email']);
}


$result=mysqli_query($con,"SELECT * FROM pet_names ");
$name1="";
$name2="";
while ($row = mysqli_fetch_array($result))
 {
  if($row[0]==1) $name1=$row['pet_name'];
  if($row[0]==2) $name2=$row['pet_name'];
  }

$params=mysqli_query($con,"SELECT * FROM user_params ");
$emailaddr="";
while ($paramrow = mysqli_fetch_array($params))
 {
  if($paramrow[0]==1) $emailaddr=$paramrow['user_value'];
 }

//close sql connection
mysqli_close($con);
?>

<body>
<h3>Enter Options</h3>
<br>
<form action="names.php" method="post">
Pet 1 (green collar):<br><input type="text" name="p1" value="<?php echo $name1; ?>">
<br><br>
Pet 2 (pink collar):<br><input type="text" name="p2" value="<?php echo $name2; ?>">
<br><br>
Email:<br><input type="text" name="email" value="<?php echo $emailaddr; ?>">
<br><br>
<table>
<td><input class="loadbutton" type="submit" value="Save"></td>
</table>
</form>

</body>
</html>
