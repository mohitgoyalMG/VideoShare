<?php
	session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
<title>
Video Share-Thankyou
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
<br>
<center>
	<p class="success"><b>Your Feedback Has Been Successfull Stored !!!</b></p>
		<a class="success" href="feedback.php">Give feedback again<a>
<br>
		<a class="success" href="usrpannel.php">Go To User Pannel<a>
</center>
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