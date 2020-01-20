<?php
	session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
<title>
Video Share-Feedback
</title>
<style>

<?php
	require('style.css');
?>

</style>
</head>
<body bgcolor="black">

<div id="wrap"> <div id="logo"> <img src="videoshare.jpg" id="logo"> </div>
<div id="content">
	<p class="nav">
		<a class="nav" href="index.php">HOME</a>
		<a class="nav" href="categories.php">CATEGORIES</a>
		<a class="nav" href="bew/login_check.php">USER PANNEL</a>
		<a class="nav" href="contactus.php">CONTACT US</a>
	</p>
<center>

<?php
	require('config.php');
	if(isset($_SESSION['authorised'])) //A Simple Yes Or No
	require('post_feedback.php');
	else
	print "<a href=" ."login.php" .">" ."Login" ."</a>" ."to give feedback";
?>

</center>
<hr>

<?php
	require('config.php'); 
	$result = mysqli_query($con,"SELECT * FROM feedback order by fid desc");
	while($row = mysqli_fetch_array($result))
	{ 
		if($row['vid']!=0)
		{
			print "<b>" ."Feedback: " ."</b>" .$row['feed'] ."<br>";
			print "<b>" ."User Name: " ."</b>" .$row['usrnm'] ."<br>";
			print "<b>" ."Video ID: " ."</b>" .$row['vid'] ."<br>" ."<hr>";
		}
		else
		{
		print "<b>" ."Feedback: " ."</b>" .$row['feed'] ."<br>";
    	print "<b>" ."User Name: " ."</b>" .$row['usrnm'] ."<br>" ."<hr>";
		}
	}
	mysqli_close($con);
?>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<center>
	<p>&copy; Video Share 2013</p>
<center>

<?php 
	require('sidebar.php');
?>

</div>
</div>
</body>
</html>