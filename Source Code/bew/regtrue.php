<?php
 session_start();
 
require('../config.php'); 

$sql="INSERT INTO users (name,usrnm,pass)
VALUES
('$_SESSION[name]','$_SESSION[usrnm]','$_SESSION[pass]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error());
  }
echo "Registration Successful";
header('Location: ../regdone.php');
mysqli_close($con);
?>