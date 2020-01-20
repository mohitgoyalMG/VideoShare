<?php
session_start();
unset($_SESSION['authorised']);
unset($_SESSION['usrnm']);
header('Location: ../login.php');
?>