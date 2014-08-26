<script>
function validate(var n)
{
alert(n."YOU ARE SUCCESSING FULLY LOGGED IN");
}
function java()
{
alert("invalid username password");
}
</script>
<?php 
// Create connection
$con=mysqli_connect("localhost","root","","jeehub");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $user=$_POST["user"];
  $pass=$_POST["pass"];
  
  $result = mysqli_query($con,"SELECT * FROM user");
$x=0;
while($row = mysqli_fetch_array($result))
  {
  if($row['username']==$user && $row['password']==$pass)
  {
    $x=1;
  }
  }
  if($x==1)
  {
   session_start();
  $_SESSION['user']=$user;
   header("Location: index1.php");

  }
  
  else
  {
  echo "invalid username or password";

  header("Location: wrong.html");
  }
  ?>
  <script>
function validate(var n)
{
alert(n."YOU ARE SUCCESSING FULLY LOGGED IN");
}
function java()
{
alert("invalid username password");
}
</script>
 