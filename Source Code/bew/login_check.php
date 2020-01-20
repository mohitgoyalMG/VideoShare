<?php
require('../config.php');
session_start();

if(isset($_SESSION['authorised'])) //A Simple Yes Or No
		header('Location: ../usrpannel.php');
		else
		header('Location: ../login.php');

?>