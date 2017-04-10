<?php 

 mysql_connect('localhost','root','');

 mysql_select_db('clinindia');



    if(!isset($_SESSION['id'])) 
    { 
        
        $_SESSION['id']='0';
    } 






?>