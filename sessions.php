<?php 
session_start();
$_SESSION['username'] = 'Hassan';
$_SESSION['role'] = 'admin';


echo $_SESSION['username']; // Outputs: Hassan


?>