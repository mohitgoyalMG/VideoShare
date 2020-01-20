<?php

session_start();

$_path = "../videos/";

$_path = $_path . basename( $_FILES['videofile']['name']);

$_orgnm = basename( $_FILES['videofile']['name']);

if(move_uploaded_file($_FILES['videofile']['tmp_name'], $_path)) {

echo "Successful upload of ". basename( $_FILES['videofile']['name']);

print "<br>" ."CLICK" ."<a href=" ."../index.php" .">" ."HERE" ."</a>" ."TO GO TO HOME PAGE";

require('../config.php'); 

$sql="INSERT INTO videos (vname,videofile,category,usrnm)
VALUES
('$_POST[vname]','$_orgnm','$_POST[category]','$_SESSION[usrnm]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error());
  }
echo ".";

mysqli_close($con);



} else{

echo "Error when uploading the video.";

}

?>