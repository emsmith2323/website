<html>

<title>Enter Names</title>

<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<!--banner-->
<table>
<tr>
<td><a href="./load.html">Load</a></td>
<td><a href="./ondemand.html">On Demand</a></td>
<td><a href="./schedule.html">Schedule</a></td>
<td class="currentpage"><a href="./nameentry.html">Set Names</a></td>
</tr>
</table>
<!--end banner-->

<?php
if (isset($_POST['p1']))
{

// Create connection
$con=mysqli_connect(localhost,"root","raspberry","rpmd");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

//define strings used in performing sql transactions	 
$sql_update = "UPDATE pet_names SET $_POST[p1] WHERE pet_name=1";
 

//post item to sql
if( $sql_update == false) {
	die( print_r( sqlsrv_errors(),true));
	}

echo "record added";
	
//close sql connection
mysqli_close($con);

//unset post
unset($_POST);	

}


<h3>Enter Names</h3>
<br>
<form action="names.php" method="post">
Pet 1:<br><input type="text" name="p1">
<br><br>
Pet 2:<br><input type="text" name="p2">
<br><br>
<input type="submit" value="Save">
</form>
</body>
</html>