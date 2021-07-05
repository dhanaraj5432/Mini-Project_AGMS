<?php 
$conn=mysqli_connect("localhost", "root","", "AGMS");
// Check connection
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST["submit"]))
{
    if($_POST["username"])
    {
        $username=$_POST["username"];
        $password=$_POST["password"];
        //echo "you have selected :".$_POST["radio"];
        $sql = "INSERT INTO  Worker (User,Password) VALUES ('$username','$password')";
        $result = mysqli_query($conn, $sql);
        $sq = " CREATE TABLE $username (Id int,Username varchar(20),Roomnum int(10),Problem varchar(200),Workertype varchar(20))";
        $result = mysqli_query($conn, $sq);
        echo $username." added Successfully";
        echo $username."table added Successfully";
    }
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
        margin-top:100px;
        width:400px;
        height:400px;
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
            .radio
            {
        margin-left:80px;
        margin-top:510px;
        box-shadow:0 0 10px 10px rgba(0,0,0,0.2);
            }
            #rbt
            {
                margin-top:420px;
                margin-left:540px;
            }
        </style>
    </head>
    <body>
        <form method="post" action="#">
            <div class="menu-icon">
                <img src="user.svg" id="userimg"/><br>
                 <p style="text-align: center">Add Worker</p>
                 <input required type="text" name="username" placeholder="Username" class="username"><br><br>
                 <input required type="password" name="password" placeholder="Password" class="username">
                 <pre>
                 </pre>
             
                <input type="submit" value="Add Worker" name="submit" style="margin-left: 150px">
            </div><br><br><br><br><br><br>
        </form>
    </body>
</html>