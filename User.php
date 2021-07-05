<?php 
//session_start();
//echo $_SESSION["username"];
$conn=mysqli_connect("localhost", "root","", "AGMS");
// Check connection
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST["submit"]))
{
   if($_POST["problem"])
   {
	  $username=$_POST["username"];
	  $problem=$_POST["problem"];
	  $Workers=$_POST["Workers"];
    echo $Workers;
	  $roomnum=$_POST["roomnum"];
	  $insert=mysqli_query($conn,"UPDATE User SET Problems='$problem' WHERE User.User='$username'");
	  //$result = mysqli_query($conn, $insert);
    //print_r($result);
      
       echo "you aren in if block";
          session_start();
          $_SESSION["username"]=$_POST["username"];
          echo $_SESSION["username"];
          //$_SESSION["Workers"]=$_POST["Workers"];
          $_SESSION["Workers"]=$Workers;
          echo $_SESSION["Workers"];
          $_SESSION["roomnum"]=$_POST["roomnum"];
          echo $_SESSION["roomnum"];
          $_SESSION["problem"]=$_POST["problem"];
          echo $_SESSION["problem"];
          header("Location:".$Workers.".php");
   }
   if(!$insert)
   {
      echo mysqli_error();
   }
   else
   {
       echo "                Records added successfully.";
   }
}
?>

<html>
    <head>
        <title>AGMS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body 
            {
               background-image: url('home1.jpeg');
               background-repeat: no-repeat;
               background-attachment: fixed; 
               background-size: 100% 100%;
            }
            #userimg
            {
		        margin-top:10px;
		        margin-left:150px;
		        width:100px;
		        height:100px;
            }
            .menu-icon
            {
                margin-left:480px;
		        margin-top:40px;
		        width:400px;
		        height:440px;
		        background-color:white;
		        border-radius: 10%;
		        box-shadow:0 0 10px 10px rgba(0,0,0,0.2);
		        z-index: 3;
		        position: fixed;
            }
            .username
            {
		        border: 0;
		        border-bottom: 1px solid black;
		        width: 200px;
		        height: 20px;
		        margin-left:100px;
            }
        </style>
    </head>
    <body>
        <form method="post" action="#">
        	<button style="margin-left:1200px;margin-top: 20px;box-shadow:0 0 10px 10px rgba(0,0,0,0.2);">History</button>
            <div class="menu-icon">
                <img src="user.svg" id="userimg"/><br>
                 <p style="text-align: center"><b>User Login</b></p>
                 <input type="text" name="username" placeholder="Username" class="username" value="<?php session_start();echo $_SESSION["username"];?>">
                 <input required type="text" name="roomnum" placeholder="room number" class="username" style="margin-top: 10px">
                 <select name="Workers" style="margin-top: 15px;margin-left: 130px">
                 	  <option value="plumber">plumber</option>
				            <option value="electrician">electrician</option>
				            <option value="mechanic">mechanic</option>
                 </select><br>
                 <textarea required name="problem" rows="5" cols="30" style="margin-top:10px ; margin-left: 80px;text-align: center;" placeholder="Type the problem"></textarea>
                 <pre>
                 </pre>
             
                <input type="submit" value="submit" name="submit" style="margin-left: 150px">
            </div>
        </form>
    </body>
</html>