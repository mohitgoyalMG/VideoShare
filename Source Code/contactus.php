<?php
	session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
<title>
Video Share-CONTACT US
</title>
<script type="text/javascript">
function msg()
{
alert("If you want to give your feedback regarding Videoshare or any post then please go to feedback section")
}
</script>
<style>

<?php
	require('style.css');
?>

</style>
</head>
<body bgcolor="black" onload="msg()">

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
	<p classc="us"><strong>Team VideoShare</strong><p>
</center>
	<p><strong>Members: </strong>
	<ol>
		<li>Manaj Sarkar(1022310047)</li>
		<li>Mohit Goyal(1022310050)</li>
		<li>Rahul Negi(1022310067)</li>
		<li>Rishi Sharma(1022310070)</li>
	</ol>
	</p>
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