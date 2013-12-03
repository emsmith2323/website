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
// Create connection
$con=mysqli_connect(localhost,"root","raspberry","rpmd");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM pet_names");

while($row = mysqli_fetch_array($result))
  {
  echo $row['pet_number'] . " " . $row['pet_name'];
  echo "<br>";
  }

mysqli_close($con);
?> 

</body>
</html>