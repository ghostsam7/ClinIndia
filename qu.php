

<?php

include 'connect.php';



$result = mysql_query("SELECT * FROM users WHERE id = 1" );
$array=mysql_fetch_assoc($result);

echo $array['username'];




echo mysql_get_server_info();




$in="INSERT INTO `clinindia`.`users` (`id`, `username`, `password`, `usr_lvl`) 
		VALUES 
			(NULL, 'major', '332532dcfaa1cbf61e2a266bd723612c', '2'), 
			(NULL, 'mani', '332532dcfaa1cbf61e2a266bd723612c', '2')";



mysql_query($in);

?>
<br/>
<br/>





<?php 

echo "gap";

?>

<br/><br/><br/><br/><br/>

<form method="post">
<h3>laboratory</h3>
	<input type="text" name="lab"><br>
<h3>test</h3>
	<input type="text" name="test"><br>
	<input type="submit" name="submit" value="search">
</form>

<?php
	if (isset($_POST['submit']) && !empty($_POST['lab']) || !empty($_POST['test'])) {

		$search_lab =$_POST['lab'];
		$search_test =$_POST['test'];
		

		$result1= mysql_query("SELECT * FROM lab NATURAL JOIN  test
WHERE test_name LIKE '%".mysql_real_escape_string($search_test)."%'
AND lab_name LIKE '%".mysql_real_escape_string($search_lab)."%';");


$array1=mysql_fetch_assoc($result1);
$row=mysql_num_rows($result1);



		for ($i=0 ; $i < $row ; $i++ ) { 


			echo mysql_result($result1,$i,"test_name");
			echo mysql_result($result1,$i,"lab_name");
			echo mysql_result($result1,$i,"city");
			echo mysql_result($result1,$i,"pincode");
			echo mysql_result($result1,$i,"state");
			echo mysql_result($result1,$i,"price");



		}

	}


