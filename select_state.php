<?php 
// Create connection
$con=mysqli_connect("localhost","root","","jeehub");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 $vin="SELECT * FROM `college` WHERE id = '$_POST[stateoption]' and zone = '$_POST[zone]'  ";
     $result = mysqli_query($con,$vin); 
	while($row = mysqli_fetch_array($result))
	{
		echo $row['c_name'] . " " . $row['s_name']. " " . $row['estab']. " " . $row['city']. " " . $row['site']. " " . $row['shortname'];
		echo "<br>";
	}
  mysqli_close($con);
//header("Location:index.html"); 
?>

