 <?php
include 'connection.php';

$name = $_POST['name'];
$roadpoint = $_POST['roadpoint'];
$class = $_POST['class'];
$madrassa = $_POST['madrassa'];
$fathername = $_POST['fathername'];
$job = $_POST['job'];
$address = $_POST['address'];
$tutiontype = $_POST['tutiontype'];
$transport = $_POST['transport'];
$laststudiedschool = $_POST['laststudiedschool'];
$laststudiedmadrassa = $_POST['laststudiedmadrassa'];
$mcontact = $_POST['mcontact'];
$wcontact = $_POST['wcontact'];

 
// Prepare an insert statement
$sql = "INSERT INTO `admission`(`name`, `roadpoint`, `class`, `madrassa`, `fathername`, `address`, `job`, `tutiontype`, `laststudiedschool`, `laststudiedmadrassa`, `transport`, `mcontact`, `wcontact`) VALUES  ( '$name', '$roadpoint', '$class', '$madrassa', '$fathername',  '$address','$job', '$tutiontype', '$laststudiedschool', '$laststudiedmadrassa', '$transport', '$mcontact', '$wcontact')";
 

    
    // Set parameters
   
    // Attempt to execute the prepared statement
   if ($conn->query($sql) === TRUE){
          ?> <html>
          <head>	
          	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
        <center><h1 style="margin-top: 
        30vh;">
        	<?php echo " Dear ".$name. " " ;?><br>
        	APPLICATION SUBMITTED SUCCESSFULLY.</h1></center>
         <?php
    } else{
        echo "ERROR: Could not execute query: $sql. " . mysqli_error($link);
    }

 