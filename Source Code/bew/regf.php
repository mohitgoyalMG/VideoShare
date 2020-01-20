<?php
	session_start();

$name=$_POST['name'];	
$usrnm=$_POST['usrnm'];	
$pass=$_POST['pass'];
$_SESSION['name']=$_POST['name'];
$_SESSION['usrnm']=$_POST['usrnm'];
$_SESSION['pass']=$_POST['pass'];

require('../config.php'); 

	$result = mysqli_query($con,"SELECT * FROM users where usrnm='$usrnm'");
	$row = mysqli_fetch_array($result);

	if($row!=0)
	{
	print "Username already registred.." ."<a href=" ."../login.php" .">" ."Try Again" ."</a>";
	}
	else
	{
	header('Location: regtrue.php');
	}

mysqli_close($con);
?>