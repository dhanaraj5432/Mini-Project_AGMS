<!DOCTYPE html>
<html>
<head>
  <title>solved</title>
  <style type="text/css">
    .solve
    {
      background-color:#33ff8a;
            margin-left:600px;
        margin-top:2px;
        text-align: center;
        width:60px;
        height:25px;
        border-radius: 10%;
        box-shadow:0 0 10px 10px rgba(0,0,0,0.2);
        z-index: 3;
        position: fixed;
    }
  </style>
</head>
<body>
<?php
  $conn=mysqli_connect("localhost", "root","", "AGMS");
  // Check connection
  if (!$conn) 
  {
      die("Connection failed: " .mysqli_connect_error());
  }
  session_start();
  $Workers=$_SESSION["Workers"];
  echo $Workers;
  $sq="SELECT Id,Username,Roomnum,Problem,Workertype FROM solve WHERE isSloved='SOLVED' AND Workertype='$Workers'";
  $result=mysqli_query($conn,$sq);
  if(mysqli_num_rows($result) > 0)
  {
    while ($row = $result->fetch_assoc()) 
    {
      //echo $i;
  echo "Id : ".$row["Id"]." Username : ".$row["Username"]."&nbsp;&nbsp;&nbsp;&nbsp;"."House Num : ".$row["Roomnum"]."&nbsp;&nbsp;&nbsp;&nbsp;"."Problem : ".$row["Problem"]."&nbsp;&nbsp;&nbsp;&nbsp;"."Workertype : ".$row["Workertype"]."<br><br>";
    }
  }
?>
</body>
</html>