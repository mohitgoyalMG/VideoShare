<?php
	session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
<title>
Video Share-Login
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
<div id="login">   
	<form method="post" action="bew/auth.php">
		<p><label><strong>Username :</strong><input type="text" name="usrnm" /></label></p>
		<p><label><strong>Password :   </strong><input type="password" name="pass" /></label></p>
		<p class="login"><br><input type="submit" name="submit" class="button" value="login" />    
			<a class="reg" href="register.php">Register</a></p>                    
	</form>	  	  
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