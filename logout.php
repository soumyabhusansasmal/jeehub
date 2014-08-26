<?php
session_start();
$s=$_SESSION["user"];
// Create connection
$con=mysqli_connect("localhost","root","","jeehub");
$result = mysqli_query($con,"SELECT * FROM buy WHERE username='$s'");
while($row = mysqli_fetch_array($result))

session_destroy();
header("Location: index.html");
?>