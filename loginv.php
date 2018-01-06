<html>
<head>
	<title>
	Re;AnimeSan
	</title>
</head>


<body>
<?php
 error_reporting(E_ALL | E_STRICT);  
ini_set('display_startup_errors',1);  
ini_set('display_errors',1);
 $servername='localhost';
   $username='wt';
   $password='';
   $dbname='reanimesan';
   $con=mysqli_connect($servername,$username,$password,$dbname);

// Check connection
if (!$con)
  {
  die("Connection error: " . mysqli_connect_error());
  }
echo "Connected successfully<br>";
$myusername=$_POST['username']; 
$mypassword=$_POST['password']; 
$sql="SELECT id FROM login WHERE username='$myusername' and password='$mypassword'";
$result = mysqli_query($con, $sql);
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
if($myusername=="shailendra"){
	header("location: http://localhost/Re;animesan/WTProject/dashboard.html");
}
if($myusername=="shailesh"){
	header("location: http://localhost/Re;animesan/WTProject/dashboard_ss.html");
}
if($myusername=="sharath"){
	header("location: http://localhost/Re;animesan/WTProject/dashboard_sm.html");
}
}
else 
{
echo "Your Login Name or Password is invalid. <br>go back to <script>alert('Your Login Name or Password is invalid.')</script> ";
header("location: http://localhost/Re;animesan/WTProject/login.php");
}

mysqli_close($con);
echo error_get_last()
?>

</body>
<br>
<html>
