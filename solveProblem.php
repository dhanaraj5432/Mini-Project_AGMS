<?php 
$conn=mysqli_connect("localhost", "root","", "AGMS");
print_r($_POST);
  // Check connection
  if (!$conn) 
  {
      die("Connection failed: " .mysqli_connect_error());
  }

$id=$_POST["Id"];
$sql="UPDATE solve SET isSloved='SOLVED' WHERE Id=$id";
$result=mysqli_query($conn,$sql);
echo $result;
echo $sql;

?>