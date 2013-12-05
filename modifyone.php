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

// Create connection
$con=mysqli_connect(localhost,"root","raspberry","rpmd");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

//User saved settings, so delete existing rows, then insert new rows
if (isset($_POST['save'])) {

 //define strings used in performing sql transactions	 
 $sql_update = "DELETE * FROM pill_schedule WHERE pet_number='1'";

 mysqli_query($con,$sql_update); 

unset($_POST['save']);

}

//If a time is set for pill 1, then set days
if (isset($_POST['p1']))
{

  //If monday is checked, insert time for monday
  if (isset($_POST['p1m']))
  {
    //define strings used in performing sql transactions	 
    $sql_update = "INSERT INTO pill_schedule (pill_number,pet_number,deliver_day,deliver_time)
                   VALUES (1,1,'mon','$_POST['p1']:00')";

    mysqli_query($con,$sql_update); 

    unset($_POST['p1m']);
  }

  //If tuesday is checked, insert time
  if (isset($_POST['p1t']))
  {
    //define strings used in performing sql transactions	 
    $sql_update = "INSERT INTO pill_schedule (pill_number,pet_number,deliver_day,deliver_time)
                   VALUES (1,1,'tue','$_POST['p1']:00')";

    mysqli_query($con,$sql_update); 

    unset($_POST['p1t']);
  }

  //If wed is checked, insert time
  if (isset($_POST['p1w']))
  {
    //define strings used in performing sql transactions	 
    $sql_update = "INSERT INTO pill_schedule (pill_number,pet_number,deliver_day,deliver_time)
                   VALUES (1,1,'wed','$_POST['p1']:00')";

    mysqli_query($con,$sql_update); 

    unset($_POST['p1w']);
  }

  //If thu is checked, insert time
  if (isset($_POST['p1r']))
  {
    //define strings used in performing sql transactions	 
    $sql_update = "INSERT INTO pill_schedule (pill_number,pet_number,deliver_day,deliver_time)
                   VALUES (1,1,'thu','$_POST['p1']:00')";

    mysqli_query($con,$sql_update); 

    unset($_POST['p1r']);
  }

  //If fri is checked, insert time
  if (isset($_POST['p1f']))
  {
    //define strings used in performing sql transactions	 
    $sql_update = "INSERT INTO pill_schedule (pill_number,pet_number,deliver_day,deliver_time)
                   VALUES (1,1,'fri','$_POST['p1']:00')";

    mysqli_query($con,$sql_update); 

    unset($_POST['p1f']);
  }

  //If sat is checked, insert time
  if (isset($_POST['p1a']))
  {
    //define strings used in performing sql transactions	 
    $sql_update = "INSERT INTO pill_schedule (pill_number,pet_number,deliver_day,deliver_time)
                   VALUES (1,1,'sat','$_POST['p1']:00')";

    mysqli_query($con,$sql_update); 

    unset($_POST['p1a']);
  }

  //If sun is checked, insert time
  if (isset($_POST['p1u']))
  {
    //define strings used in performing sql transactions	 
    $sql_update = "INSERT INTO pill_schedule (pill_number,pet_number,deliver_day,deliver_time)
                   VALUES (1,1,'sun','$_POST['p1']:00')";

    mysqli_query($con,$sql_update); 

    unset($_POST['p1u']);
  }



unset($_POST['p1']);
}


//If a time is set for pill 2, then set days
if (isset($_POST['p2']))
{

  //If monday is checked, insert time for monday
  if (isset($_POST['p2m']))
  {
    //define strings used in performing sql transactions	 
    $sql_update = "INSERT INTO pill_schedule (pill_number,pet_number,deliver_day,deliver_time)
                   VALUES (2,1,'mon','$_POST['p2']:00')";

    mysqli_query($con,$sql_update); 

    unset($_POST['p2m']);
  }

  //If tuesday is checked, insert time
  if (isset($_POST['p2t']))
  {
    //define strings used in performing sql transactions	 
    $sql_update = "INSERT INTO pill_schedule (pill_number,pet_number,deliver_day,deliver_time)
                   VALUES (2,1,'tue','$_POST['p2']:00')";

    mysqli_query($con,$sql_update); 

    unset($_POST['p2t']);
  }

  //If wed is checked, insert time
  if (isset($_POST['p2w']))
  {
    //define strings used in performing sql transactions	 
    $sql_update = "INSERT INTO pill_schedule (pill_number,pet_number,deliver_day,deliver_time)
                   VALUES (2,1,'wed','$_POST['p2']:00')";

    mysqli_query($con,$sql_update); 

    unset($_POST['p2w']);
  }

  //If thu is checked, insert time
  if (isset($_POST['p2r']))
  {
    //define strings used in performing sql transactions	 
    $sql_update = "INSERT INTO pill_schedule (pill_number,pet_number,deliver_day,deliver_time)
                   VALUES (2,1,'thu','$_POST['p2']:00')";

    mysqli_query($con,$sql_update); 

    unset($_POST['p2r']);
  }

  //If fri is checked, insert time
  if (isset($_POST['p2f']))
  {
    //define strings used in performing sql transactions	 
    $sql_update = "INSERT INTO pill_schedule (pill_number,pet_number,deliver_day,deliver_time)
                   VALUES (2,1,'fri','$_POST['p2']:00')";

    mysqli_query($con,$sql_update); 

    unset($_POST['p2f']);
  }

  //If sat is checked, insert time
  if (isset($_POST['p2a']))
  {
    //define strings used in performing sql transactions	 
    $sql_update = "INSERT INTO pill_schedule (pill_number,pet_number,deliver_day,deliver_time)
                   VALUES (2,1,'sat','$_POST['p2']:00')";

    mysqli_query($con,$sql_update); 

    unset($_POST['p2a']);
  }

  //If sun is checked, insert time
  if (isset($_POST['p2u']))
  {
    //define strings used in performing sql transactions	 
    $sql_update = "INSERT INTO pill_schedule (pill_number,pet_number,deliver_day,deliver_time)
                   VALUES (2,1,'sun','$_POST['p2']:00')";

    mysqli_query($con,$sql_update); 

    unset($_POST['p2u']);
  }



unset($_POST['p2']);
}



//If a time is set for pill 3, then set days
if (isset($_POST['p3']))
{

  //If monday is checked, insert time for monday
  if (isset($_POST['p3m']))
  {
    //define strings used in performing sql transactions	 
    $sql_update = "INSERT INTO pill_schedule (pill_number,pet_number,deliver_day,deliver_time)
                   VALUES (3,1,'mon','$_POST['p3']:00')";

    mysqli_query($con,$sql_update); 

    unset($_POST['p3m']);
  }

  //If tuesday is checked, insert time
  if (isset($_POST['p3t']))
  {
    //define strings used in performing sql transactions	 
    $sql_update = "INSERT INTO pill_schedule (pill_number,pet_number,deliver_day,deliver_time)
                   VALUES (3,1,'tue','$_POST['p3']:00')";

    mysqli_query($con,$sql_update); 

    unset($_POST['p3t']);
  }

  //If wed is checked, insert time
  if (isset($_POST['p3w']))
  {
    //define strings used in performing sql transactions	 
    $sql_update = "INSERT INTO pill_schedule (pill_number,pet_number,deliver_day,deliver_time)
                   VALUES (3,1,'wed','$_POST['p3']:00')";

    mysqli_query($con,$sql_update); 

    unset($_POST['p3w']);
  }

  //If thu is checked, insert time
  if (isset($_POST['p3r']))
  {
    //define strings used in performing sql transactions	 
    $sql_update = "INSERT INTO pill_schedule (pill_number,pet_number,deliver_day,deliver_time)
                   VALUES (3,1,'thu','$_POST['p3']:00')";

    mysqli_query($con,$sql_update); 

    unset($_POST['p3r']);
  }

  //If fri is checked, insert time
  if (isset($_POST['p3f']))
  {
    //define strings used in performing sql transactions	 
    $sql_update = "INSERT INTO pill_schedule (pill_number,pet_number,deliver_day,deliver_time)
                   VALUES (3,1,'fri','$_POST['p3']:00')";

    mysqli_query($con,$sql_update); 

    unset($_POST['p3f']);
  }

  //If sat is checked, insert time
  if (isset($_POST['p3a']))
  {
    //define strings used in performing sql transactions	 
    $sql_update = "INSERT INTO pill_schedule (pill_number,pet_number,deliver_day,deliver_time)
                   VALUES (3,1,'sat','$_POST['p3']:00')";

    mysqli_query($con,$sql_update); 

    unset($_POST['p3a']);
  }

  //If sun is checked, insert time
  if (isset($_POST['p3u']))
  {
    //define strings used in performing sql transactions	 
    $sql_update = "INSERT INTO pill_schedule (pill_number,pet_number,deliver_day,deliver_time)
                   VALUES (3,1,'sun','$_POST['p3']:00')";

    mysqli_query($con,$sql_update); 

    unset($_POST['p3u']);
  }



unset($_POST['p3']);
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




<h3><?php echo $name1; ?> : Update Schedule</h3>

<hr>

<form action="modifyone.php" method="post">

<table>
<tr>
<th class="one">Pill 1</th>
</tr>

<tr>
<td class="null">Time (24 Hour HH:MM)</td>
<td class="null">Mon</td>
<td class="null"></td>
<td class="null">Tue</td>
<td class="null"></td>
<td class="null">Wed</td>
<td class="null"></td>
<td class="null">Thu</td>
<td class="null"></td>
<td class="null">Fri</td>
<td class="null"></td>
<td class="null">Sat</td>
<td class="null"></td>
<td class="null">Sun</td>
</tr>


<tr>
<td class="null"><input type="text" name="p1" value="<?php  echo substr($p1time,0,5); ?>"></td>
<td class="null"><input type="checkbox" name="p1m" <?php if ($p1mon == 'scheduled') echo "checked='checked'"; ?></td>
<td class="null"></td>
<td class="null"><input type="checkbox" name="p1t" <?php if ($p1tue == 'scheduled') echo "checked='checked'"; ?></td>
<td class="null"></td>
<td class="null"><input type="checkbox" name="p1w" <?php if ($p1wed == 'scheduled') echo "checked='checked'"; ?></td>
<td class="null"></td>
<td class="null"><input type="checkbox" name="p1r" <?php if ($p1thu == 'scheduled') echo "checked='checked'"; ?></td>
<td class="null"></td>
<td class="null"><input type="checkbox" name="p1f" <?php if ($p1fri == 'scheduled') echo "checked='checked'"; ?></td>
<td class="null"></td>
<td class="null"><input type="checkbox" name="p1a" <?php if ($p1sat == 'scheduled') echo "checked='checked'"; ?></td>
<td class="null"></td>
<td class="null"><input type="checkbox" name="p1u" <?php if ($p1sun == 'scheduled') echo "checked='checked'"; ?></td>
</tr>


</table>

<hr>

<table>
<tr>
<th class="one">Pill 2</th>
</tr>

<tr>
<td class="null">Time (24 Hour HH:MM)</td>
<td class="null">Mon</td>
<td class="null"></td>
<td class="null">Tue</td>
<td class="null"></td>
<td class="null">Wed</td>
<td class="null"></td>
<td class="null">Thu</td>
<td class="null"></td>
<td class="null">Fri</td>
<td class="null"></td>
<td class="null">Sat</td>
<td class="null"></td>
<td class="null">Sun</td>
</tr>


<tr>
<td class="null"><input type="text" name="p2" value="<?php  echo substr($p2time,0,5); ?>"></td>
<td class="null"><input type="checkbox" name="p2m" <?php if ($p2mon == 'scheduled') echo "checked='checked'"; ?></td>
<td class="null"></td>
<td class="null"><input type="checkbox" name="p2t" <?php if ($p2tue == 'scheduled') echo "checked='checked'"; ?></td>
<td class="null"></td>
<td class="null"><input type="checkbox" name="p2w" <?php if ($p2wed == 'scheduled') echo "checked='checked'"; ?></td>
<td class="null"></td>
<td class="null"><input type="checkbox" name="p2r" <?php if ($p2thu == 'scheduled') echo "checked='checked'"; ?></td>
<td class="null"></td>
<td class="null"><input type="checkbox" name="p2f" <?php if ($p2fri == 'scheduled') echo "checked='checked'"; ?></td>
<td class="null"></td>
<td class="null"><input type="checkbox" name="p2a" <?php if ($p2sat == 'scheduled') echo "checked='checked'"; ?></td>
<td class="null"></td>
<td class="null"><input type="checkbox" name="p2u" <?php if ($p2sun == 'scheduled') echo "checked='checked'"; ?></td>
</tr>


</table>

<hr>

<table>
<tr>
<th class="one">Pill 3</th>
</tr>

<tr>
<td class="null">Time (24 Hour HH:MM)</td>
<td class="null">Mon</td>
<td class="null"></td>
<td class="null">Tue</td>
<td class="null"></td>
<td class="null">Wed</td>
<td class="null"></td>
<td class="null">Thu</td>
<td class="null"></td>
<td class="null">Fri</td>
<td class="null"></td>
<td class="null">Sat</td>
<td class="null"></td>
<td class="null">Sun</td>
</tr>


<tr>
<td class="null"><input type="text" name="p3" value="<?php  echo substr($p3time,0,5); ?>"></td>
<td class="null"><input type="checkbox" name="p3m" <?php if ($p3mon == 'scheduled') echo "checked='checked'"; ?></td>
<td class="null"></td>
<td class="null"><input type="checkbox" name="p3t" <?php if ($p3tue == 'scheduled') echo "checked='checked'"; ?></td>
<td class="null"></td>
<td class="null"><input type="checkbox" name="p3w" <?php if ($p3wed == 'scheduled') echo "checked='checked'"; ?></td>
<td class="null"></td>
<td class="null"><input type="checkbox" name="p3r" <?php if ($p3thu == 'scheduled') echo "checked='checked'"; ?></td>
<td class="null"></td>
<td class="null"><input type="checkbox" name="p3f" <?php if ($p3fri == 'scheduled') echo "checked='checked'"; ?></td>
<td class="null"></td>
<td class="null"><input type="checkbox" name="p3a" <?php if ($p3sat == 'scheduled') echo "checked='checked'"; ?></td>
<td class="null"></td>
<td class="null"><input type="checkbox" name="p3u" <?php if ($p3sun == 'scheduled') echo "checked='checked'"; ?></td>
</tr>


</table>
<hr>

<table>
<tr>
<td><input class="loadbutton" type="submit" value="Save" name="save"></td>
</tr>
</table>
</form>

</body>
</html>
