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
<td><a href="./names.php">Set Options</a></td>
</tr>
</table>
<!--end banner-->

<?php
//Pet Number to use
//$thisPetNumber=2

// Create connection
$con=mysqli_connect(localhost,"root","raspberry","rpmd");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result=mysqli_query($con,"SELECT * FROM pet_names");
$name1="";
$name2="";


while ($row = mysqli_fetch_array($result))
 {
  if($row[0]==1) $name1=$row['pet_name'];
  if($row[0]==2) $name2=$row['pet_name'];
  }

$pill1rows=mysqli_query($con,"SELECT * FROM pill_schedule WHERE pill_number=1");
$p1mon="notsched";
$p1tue="notsched";
$p1wed="notsched";
$p1thu="notsched";
$p1fri="notsched";
$p1sat="notsched";
$p1sun="notsched";


while ($pill1=mysqli_fetch_array($pill1rows))
{
 $p1time=$pill1[3];
 if($pill1[2]==0) $p1sun="scheduled";
 if($pill1[2]==1) $p1mon="scheduled";
 if($pill1[2]==2) $p1tue="scheduled";
 if($pill1[2]==3) $p1wed="scheduled";
 if($pill1[2]==4) $p1thu="scheduled";
 if($pill1[2]==5) $p1fri="scheduled";
 if($pill1[2]==6) $p1sat="scheduled";
}

$pill2rows=mysqli_query($con,"SELECT * FROM pill_schedule WHERE pill_number=2");
$p2mon="notsched";
$p2tue="notsched";
$p2wed="notsched";
$p2thu="notsched";
$p2fri="notsched";
$p2sat="notsched";
$p2sun="notsched";

    
while ($pill2=mysqli_fetch_array($pill2rows))
{
 $p2time=$pill2[3];
 if($pill2[2]==0) $p2sun="scheduled";
 if($pill2[2]==1) $p2mon="scheduled";
 if($pill2[2]==2) $p2tue="scheduled";
 if($pill2[2]==3) $p2wed="scheduled";
 if($pill2[2]==4) $p2thu="scheduled";
 if($pill2[2]==5) $p2fri="scheduled";
 if($pill2[2]==6) $p2sat="scheduled";
}

$pill3rows=mysqli_query($con,"SELECT * FROM pill_schedule WHERE pill_number=3");
$p3mon="notsched";
$p3tue="notsched";
$p3wed="notsched";
$p3thu="notsched";
$p3fri="notsched";
$p3sat="notsched";
$p3sun="notsched";

          
while ($pill3=mysqli_fetch_array($pill3rows))
{
 $p3time=$pill3[3];
 if($pill3[2]==0) $p3sun="scheduled";
 if($pill3[2]==1) $p3mon="scheduled";
 if($pill3[2]==2) $p3tue="scheduled";
 if($pill3[2]==3) $p3wed="scheduled";
 if($pill3[2]==4) $p3thu="scheduled";
 if($pill3[2]==5) $p3fri="scheduled";
 if($pill3[2]==6) $p3sat="scheduled";
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
<td class="null"><?php  echo substr($p1time,0,5); ?></td>
<td class="<?php echo $p1mon; ?>">Mon</td>
<td class="null"></td>
<td class="<?php echo $p1tue; ?>">Tue</td>
<td class="null"></td>
<td class="<?php echo $p1wed; ?>">Wed</td>
<td class="null"></td>
<td class="<?php echo $p1thu; ?>">Thu</td>
<td class="null"></td>
<td class="<?php echo $p1fri; ?>">Fri</td>
<td class="null"></td>
<td class="<?php echo $p1sat; ?>">Sat</td>
<td class="null"></td>
<td class="<?php echo $p1sun; ?>">Sun</td>
<td class="space"></td>
</tr>


</table>

<hr>

<table>
<tr>
<th class="one">Pill 2</a></th>
</tr>
<tr>
<td class="null"><?php  echo substr($p2time,0,5); ?></td>
<td class="<?php echo $p2mon; ?>">Mon</td>
<td class="null"></td>
<td class="<?php echo $p2tue; ?>">Tue</td>
<td class="null"></td>
<td class="<?php echo $p2wed; ?>">Wed</td>
<td class="null"></td>
<td class="<?php echo $p2thu; ?>">Thu</td>
<td class="null"></td>
<td class="<?php echo $p2fri; ?>">Fri</td>
<td class="null"></td>
<td class="<?php echo $p2sat; ?>">Sat</td>
<td class="null"></td>
<td class="<?php echo $p2sun; ?>">Sun</td>
<td class="space"></td>
</tr>

</table>

<hr>

<table>
<tr>
<th class="one">Pill 3</a></th>
</tr>
<tr>
<td class="null"><?php  echo substr($p3time,0,5); ?></td>
<td class="<?php echo $p3mon; ?>">Mon</td>
<td class="null"></td>
<td class="<?php echo $p3tue; ?>">Tue</td>
<td class="null"></td>
<td class="<?php echo $p3wed; ?>">Wed</td>
<td class="null"></td>
<td class="<?php echo $p3thu; ?>">Thu</td>
<td class="null"></td>
<td class="<?php echo $p3fri; ?>">Fri</td>
<td class="null"></td>
<td class="<?php echo $p3sat; ?>">Sat</td>
<td class="null"></td>
<td class="<?php echo $p3sun; ?>">Sun</td>  
<td class="space"></td>
</tr>
</table>

<hr>

<table>
<tr>
<td class="actionbutton"><a href="./modifyone.php">Change</a></td>
</tr>
</table>

</body>
</html>
