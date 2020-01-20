<?php
	session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
<title>
Video Share-Categories
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
	<p class="topic">Choose the deasired category to continue:</p>
<br>
<center>
	<p>
		<a class="cat" href="ctutorials.php">Tutorials</a>
<br>
		<a class="cat" href="cmusic.php">Music</a>
<br>
		<a class="cat" href="cshortmovies.php">Short Movies</a>
<br>
		<a class="cat" href="csports.php">Sports</a>
	</p>
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