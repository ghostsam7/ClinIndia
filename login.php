
<?php
session_start();
include 'base.php';

if ( $_SESSION['id']!=0) {
	
	header('location: index.php');
}

?>


    <div id="container ">
      
      

          <div class="col-sm-10 text-left"> 
       <div class="well">
     
<h1>Log in</h1>
      <br/>
      <h3>Insert data about Laboratories</h3>

          
    <form method="post">
  <div class="form-group">
    <label >Username:</label>
    <input type="text" class="form-control" name="username">
  </div>
 
  <div class="form-group">
    <label >Password:</label>
    <input type="password" class="form-control" name="password">
  </div>

  <button type="submit" name="submit" class="btn btn-default">Log in</button>
</form>
 </div>
    </div>

</div>




	<?php 

         
			include 'connect.php';

			



				if (isset($_POST['submit'])) {
					$username = $_POST['username'];
					$password = md5($_POST['password']);

					if (empty($username) or empty($password)) {
						echo "<p>Fields Empty!<p>";
					}

				 else {

				 	$result= mysql_query("SELECT id FROM users WHERE username='".$username."' AND password='".$password."' ");

				 	if (mysql_num_rows($result)) {
				 		
				 	$check_login=mysql_result($result, 0, 'id');
				 	}
				 	

				 		if ( mysql_num_rows($result)) {
				 			echo "u're logged in!";
				 			$_SESSION['id']=$check_login;
				 			header('location: index.php');
				 		}else
				 		echo "<br/> Incorrect Username and Password combination!";
					
					}
				}




			?>