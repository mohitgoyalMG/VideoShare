<?php
	session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
<title>
Video Share-User Pannel
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
	<p class="wel"><b>welcome:</b>
	
<?php
echo $_SESSION['usrnm'];
?>
	</p>
<br>
<center>
	<a href="feedback.php">Post Comments</a>
<br>
	<a href="view_feedback.php">View Your Comments</a>
<br>
	<a href="view_videos.php">View Your Videos</a>
<center>
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