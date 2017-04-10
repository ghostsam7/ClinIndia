
<?php

session_start();

include 'connect.php';
include 'functions.php';
include 'base.php';

if ( $_SESSION['id']!=1) {
	
	header('location: login.php');
}
else{
	include 'administration.php';
}


?>

