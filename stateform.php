<!DOCTYPE html>

<html>

<body style="background-color: #EEEEEE;">


<div id="header" style="width: 1024px;
margin: 0 auto;
background: #FFA500;
box-shadow: 0 8px 6px rgba(0,0,0,0.5);
margin-bottom: 5px;
padding: 0 0 12px 0;
overflow: visible;">
<HEAD>

<style>

h1

{

text-shadow: 5px 5px 5px #FF0000;

}

</style>

</head>
<h1>
<CENTER>
MY JEE HUB
</CENTER>
</h1>



<div id="menu" style="background-color:#FFA500;height:75px;padding-left:75px">



<style>

#nav ul 
{
padding: 0;
 margin:;0; list-style-type:none;
}

#nav li {display: inline;}

#nav li a {font-family: algerian;font-size:20px;text-decoration: none;float:left;padding: 12px;background-color: #999999;color: #0038A8; border-bottom:0px solid #000;}

#nav li a:hover 
{background-color: #BFCDE9; color: #FFFFFF; padding-bottom:12px; border-bottom:0px solid #000; margin:-1px;}

</style>

<div id="main-nav">

<ul id="nav" style="clear:both;">

<li>

<a href="/jeehub/index1.php"><img src="/jeehub/Home.png" width="40" height="20"></a>
</li>

<li>
<a href="/jeehub/collegeguide.html">College Guide</a>
</li>


<li>
<a href="/jeehub/courses.html">Courses</a>
</li>

<li>
<a href="/jeehub/exam.html">exams</a>
</li>
<li>
<a href="/jeehub/scholarship.html">Scholarships</a>
</li>
<li>
<li>
<a href="/jeehub/contact us.html">contact us</a>
</li>
</ul>

</div>
</div>











<div id="contener" style="background-color:#FFA500;">







	<div id="contener1" style="background-color:#FFA500;margin-top: 15px;margin-bottom: 12px;overflow: hidden;">





		


		

	
<div id="info" style="width: 1000px;margin: 0 auto;background: #FFFFFF;box-shadow: 0 8px 6px rgba(0,0,0,0.5);margin-bottom: 5px;padding: 0 0 12px 0;overflow: visible;">
	<!--Content goes here-->
	<span style="color:blue;font-weight:bold;font-size: 24px;">College suggetions  for you</span><br>
	<?php 
// Create connection
$con=mysqli_connect("localhost","root","","jeehub");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $zone=$_POST["zone"];
 
  
  $result = mysqli_query($con,"SELECT * FROM college WHERE zone=$zone");

echo "<table border='1'>
<tr>
<th>college </th>
<th>state </th>
<th>establishment</th>
<th>city</th>
<th>site</th>
<th>shortname</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['c_name'] . "</td>";
  echo "<td>" . $row['s_name'] . "</td>";
  echo "<td>" . $row['estab'] . "</td>";
  echo "<td>" . $row['city'] . "</td>";
  echo "<td>" . $row['site'] . "</td>";
  echo "<td>" . $row['shortname'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

  ?>
 
 
</form> 
</div>
</div>
</div>
</html>
