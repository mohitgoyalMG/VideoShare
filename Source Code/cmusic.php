<?php
	session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
<title>
Video Share-Music
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
<div id="vid">
<?php
	require('config.php'); 
	$result = mysqli_query($con,"SELECT  vname, videofile, vid FROM videos where category='music' order by vid desc");
	while($row = mysqli_fetch_array($result))
	{ 
		print "<b>" ."Video Title: " ."</b>" .$row['vname'] ."<br>";
		print "<video" ." width=" ."320" ." height=" ."240" ." controls>" ."<" ."source" ." src" ."=" ."videos/" .$row['videofile'] ." type" ."=" ."video/mp4" .">" ."Your browser does not support video" ."</video>";
		print "<b>" ."Video ID= " ."</b>" .$row['vid'] ."<br>" ."<hr>";
	}
	mysqli_close($con);
?>
</div>
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