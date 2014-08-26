<?php 
// Create connection
$con=mysqli_connect("localhost","root","","jeehub");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 $vin="INSERT INTO user (username, password, address, phone, email_id)
VALUES ('$_POST[user]','$_POST[pass]','$_POST[addr]','$_POST[phn]','$_POST[email]')";
mysqli_query($con,$vin); 
mysqli_close($con);
header("Location:index.html"); 
?>