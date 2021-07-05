<?php
//session_start();
//echo $_SESSION["username"];



?>

<!DOCTYPE html>
<html>
<head>
	<title>Worker</title>
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
            margin-left:250px;
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
            margin-left:600px;
            text-align: center;
		    margin-top:200px;
		    width:200px;
		    height:200px;
		    border-radius: 10%;
		    box-shadow:0 0 10px 10px rgba(0,0,0,0.2);
		    z-index: 3;
		    position: fixed;
        }
        .menu-icon3
        {
        	background-color:#33ff8a;
            margin-left:960px;
            text-align: center;
		    margin-top:200px;
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
	<a href="plumber.php"><div class="menu-icon1" name="plumber">Plumber</div></a>
	<div class="menu-icon2" name="electrician">Electrician</div>
	<div class="menu-icon3" name="mechanic">Mechanic</div>
</body>
</html>