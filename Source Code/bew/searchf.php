<?php

require('../config.php'); 

$sql="INSERT INTO search (sitem)
VALUES
('$_GET[sitem]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error());
  }
  
$search=$_GET['sitem'];

$result = mysqli_query($con,"SELECT  vname, videofile, category, vid FROM videos where vname like '%$search%' order by vid desc");

while($row = mysqli_fetch_array($result))
  { 
    print "<video" ." width=" ."320" ." height=" ."240" ." controls>" ."<" ."source" ." src" ."=" ."../videos/" .$row['videofile'] ." type" ."=" ."video/mp4" .">" ."Your browser does not support video" ."</video>";
	print "<b>" ."Video Title: " ."</b>" .$row['vname'] ."<b>" ." Category: " ."</b>" .$row['category'] ."<b>" ." Video Id: " ."<b>" .$row['vid'] ."<br>";
  }

mysqli_close($con);
?>