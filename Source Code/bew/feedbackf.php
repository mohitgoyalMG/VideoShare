<?php
session_start();

require('../config.php'); 

$sql="INSERT INTO feedback (feed,vid,usrnm)
VALUES
('$_POST[feed]','$_POST[vid]','$_SESSION[usrnm]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error());
  }
echo "Feedback Successful";
header('Location: ../feedback_done.php');
mysqli_close($con);

?>