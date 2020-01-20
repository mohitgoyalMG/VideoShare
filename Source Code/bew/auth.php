<?php 
	
	 session_start();
	 require('../config.php');

	$usr=$_POST['usrnm'];
	$pas=$_POST['pass'];
   
   // Check The DataBase
    $result = mysqli_query($con,"SELECT * FROM users WHERE usrnm = '$usr' AND pass = '$pas'");
      
	$row = mysqli_fetch_array($result);
	  
   if ($row==null)

   {
      //The Username and Pass Does Not Matches
	  $_SESSION['error'] = 'Videoshare May Be A New Project But Do Not Try To Test Our Security';
	  header('Location: ../tryagain.php');
      
   } 
   else 
   {
					  
	  // Direct to session start
      $_SESSION['authorised']=true;
	  $_SESSION['usrnm']=$usr;
	header('Location: ../usrpannel.php');
	  
   }


?>