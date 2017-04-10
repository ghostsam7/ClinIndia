<?php
session_start();

include 'connect.php';

include 'functions.php';

session_destroy();
      
header('location: index.php');

?>