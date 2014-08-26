<?php

// Create connection
$con=mysqli_connect("localhost","root","","jeehub");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql="INSERT INTO member (email,m_name, password)
VALUES
('$_POST[email]','$_POST[m_name]','$_POST[password]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

mysqli_close($con);


mysqli_close($con);
?> 
