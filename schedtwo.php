<html>

<title>Schedule</title>

<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<!--banner-->
<table>
<tr>
<td><a href="./load.html">Load</a></td>
<td><a href="./ondemand.html">On Demand</a></td>
<td class="currentpage"><a href="./schedule.php">Schedule</a></td>
<td><a href="./names.php">Set Names</a></td>
</tr>
</table>
<!--end banner-->

<?php
//Pet Number to use
$thisPetNumber=2

// Create connection
$con=mysqli_connect(localhost,"root","raspberry","rpmd");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result=mysqli_query($con,"SELECT * FROM pet_names WHERE $thisPetNumber");
$name1="";

while ($row = mysqli_fetch_array($result))
 {
  if($row[0]==1) $name1=$row['pet_name'];
  }

$pill1=mysqli_query($con,"SELECT * FROM pill_schedule WHERE pill_number=4");
$p1mon="notsched"
$p1tue="notsched"
$p1wed="notsched"
$p1thu="notsched"
$p1fri="notsched"
$p1sat="notsched"
$p1sun="notsched"

while ($pillrows=mysqli_fetch_array($pill1))
{
 $p1time=$pill1[deliver_time];
 if($pill1[deliver_day]=0] $p1sun="scheduled";
 if($pill1[deliver_day]=1] $p1mon="scheduled";
 if($pill1[deliver_day]=2] $p1tue="scheduled";
 if($pill1[deliver_day]=3] $p1wed="scheduled";
 if($pill1[deliver_day]=4] $p1thu="scheduled";
 if($pill1[deliver_day]=5] $p1fri="scheduled";
 if($pill1[deliver_day]=6] $p1sat="scheduled";
}

//close sql connection
mysqli_close($con);
?>


<h3><?php echo $name1; ?> : Current Schedule</h3>

<hr>

<table>
<tr>
<th class="one">Pill 1</a></th>
</tr>
<tr>
<td class="null"></td>";
<td class="<?php echo $p1mon; ?>"><a href="./one.html">Mon</a></td>
<td class="null"></td>
<td class="<?php echo $p1tue; ?>"><a href="./four.html">Tue</a></td>
<td class="null"></td>
<td class="<?php echo $pwed; ?>"><a href="./four.html">Wed</a></td>
<td class="null"></td>
<td class="<?php echo $p1thu; ?>"><a href="./four.html">Thu</a></td>
<td class="null"></td>
<td class="<?php echo $p1fri; ?>"><a href="./four.html">Fri</a></td>
<td class="null"></td>
<td class="<?php echo $p1sat; ?>"><a href="./four.html">Sat</a></td>
<td class="null"></td>
<td class="<?php echo $p1sun; ?>"><a href="./four.html">Sun</a></td>
<td class="space"></td>
<td class="actionbutton"><a href="./four.html">Delete</a></td>
</tr>
</table>

<hr>

<table>
<tr>
<th class="one">Pill 2</a></th>
</tr>
<tr>
<td class="null">1:00p</td>
<td class="scheduled"><a href="./one.html">Mon</a></td>
<td class="null"></td>
<td class="three"><a href="./four.html">Tue</a></td>
<td class="null"></td>
<td class="scheduled"><a href="./four.html">Wed</a></td>
<td class="null"></td>
<td class="seven"><a href="./four.html">Thu</a></td>
<td class="null"></td>
<td class="scheduled"><a href="./four.html">Fri</a></td>
<td class="null"></td>
<td class="eleven"><a href="./four.html">Sat</a></td>
<td class="null"></td>
<td class="scheduled"><a href="./four.html">Sun</a></td>
<td class="space"></td>
<td class="actionbutton"><a href="./four.html">Delete</a></td>
</tr>
</table>

<hr>

<table>
<tr>
<th class="one">Pill 3</a></th>
</tr>
<tr>
<td class="null">6:30a</td>
<td class="one"><a href="./one.html">Mon</a></td>
<td class="null"></td>
<td class="scheduled"><a href="./four.html">Tue</a></td>
<td class="null"></td>
<td class="five"><a href="./four.html">Wed</a></td>
<td class="null"></td>
<td class="scheduled"><a href="./four.html">Thu</a></td>
<td class="null"></td>
<td class="nine"><a href="./four.html">Fri</a></td>
<td class="null"></td>
<td class="scheduled"><a href="./four.html">Sat</a></td>
<td class="null"></td>
<td class="thirteen"><a href="./four.html">Sun</a></td>
<td class="space"></td>
<td class="actionbutton"><a href="./four.html">Delete</a></td>
</tr>
</table>

<hr>

<table>
<tr>
<td class="actionbutton">Add</td>
</tr>
</table>

</body>
</html>