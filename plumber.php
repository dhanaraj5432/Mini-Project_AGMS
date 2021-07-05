<?php
$conn=mysqli_connect("localhost", "root","", "AGMS");
// Check connection
if (!$conn) 
{
    die("Connection failed: " .mysqli_connect_error());
}
session_start();
//echo $_SESSION["username"];
$username=$_SESSION["username"];
//echo $username;
//echo $_SESSION["roomnum"];
$roomnum=$_SESSION["roomnum"];
//echo $_SESSION["Worker"];
//echo $roomnum;
$Worker=$_SESSION["Workers"];
//echo $_SESSION["problem"];
//echo $Worker;
$problem=$_SESSION["problem"];
//echo $problem;

$sq="INSERT INTO plumber (Username,Roomnum,Problem,Workertype) VALUES ('$username',$roomnum,'$problem','$Worker')";
	$result=mysqli_query($conn,$sq);
$so="INSERT INTO solve (Username,Roomnum,Problem,Workertype) VALUES ('$username',$roomnum,'$problem','$Worker')";
	$result=mysqli_query($conn,$so);
	/*if(mysqli_num_rows($result)==0)
	{
		echo "your query is wrong";
	}
   if(!$result)
   {
   	echo "you are wrong";
      echo mysqli_error();
   }
   else
   {
       echo "Records added successfully.";
   }*/
   mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Plumber</title>
	<style type="text/css">
		body 
        {
            background-image: url('home1.jpeg');
            background-repeat: no-repeat;
            background-attachment: fixed; 
            background-size: 100% 100%;
        }
		.menu-icon1
        {
        	background-color:#33ff8a;
            margin-left:400px;
		    margin-top:200px;
		    text-align: center;
		    width:200px;
		    height:200px;
		    border-radius: 10%;
		    box-shadow:0 0 10px 10px rgba(0,0,0,0.2);
		    z-index: 3;
		    position: fixed;
        }
        .menu-icon2
        {
        	background-color:#33ff8a;
            margin-left:750px;
		    margin-top:200px;
		    text-align: center;
		    width:200px;
		    height:200px;
		    border-radius: 10%;
		    box-shadow:0 0 10px 10px rgba(0,0,0,0.2);
		    z-index: 3;
		    position: fixed;
        }
	</style>
</head>
<body>
	<a href="solved.php"><div class="menu-icon1" name="plumber">Solved Problems</div></a>
	<a href="solve.php"><div class="menu-icon2" name="plumber">To be Solve</div></a>
</body>
</html>