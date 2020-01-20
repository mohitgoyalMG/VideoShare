<html>
<head>
<style>

<?php
	require('style.css');
?>

</style>
</head>
<body>
</div>
<div id="sidebar">
<center>

<?php
	require('config.php');
	if(isset($_SESSION['authorised'])) //A Simple Yes Or No
	print "<a href=" ."bew/logoutf.php." .">" ."logout" ."</a>" ."<hr>";
?>

	<p>Click <a href="feedback.php">here</a> to view Feedbacks</p>
<hr>

<?php 
	require('search.php'); 
?>

<hr>

<?php 
	if(isset($_SESSION['authorised'])) //A Simple Yes Or No
	require('upload.php');
	else
	print "Please " ."<a href=" ."login.php" .">" ."Login" ."</a>" ." To Upload Videos";
?>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</center>
</div>
</body>
</html>