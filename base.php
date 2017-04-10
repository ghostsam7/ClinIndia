<?php
include 'connect.php';
 $qu= mysql_query("SELECT usr_lvl FROM users
WHERE id='".$_SESSION['id']."';");

$usr_lvl=mysql_result($qu, 0);


$qu2= mysql_query("SELECT username FROM users
WHERE id='".$_SESSION['id']."';");

$username=mysql_result($qu2, 0);


if ($usr_lvl==1) {

	?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <style type="text/css">
  .carousel h1{
    font-size: 20px;
  }


   .bg{
    background-color:#414CA0;
    color: white;
   } 
     @font-face {
    font-family: 'museo-slab';
    src: url('fonts/28 Days Later.ttf');
    font-style: normal;
}


.samtag h1{
    color: #908C4F;
    padding-left: 50px;
    font-size: 2.5em;
    line-height: 18px;
    
    }

.carousel .carousel-inner .item img {
  
  height: 400px;
  width: 100%;

}
.well {
  margin-left: 20%;
}

nav{
  margin-bottom: 0px;
}



/* Small devices (tablets, 768px and up) */
@media (min-width: @screen-sm-min) { 

   .carousel h1{
    font-size: 50px;
  }

 }

 footer{
  height: auto;
  padding: 10px;
  background-color: #25252C;
 }

.admin h1 h3{
  margin-left: 20px;
}

</style>

<title>Consumer</title>
   
  </head>


  <body>

      
   
   <nav class="navbar navbar-inverse   samtag" >
      <div class="container starttag">

      
        <div class="navbar-header ">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <h1>Clinindia</h1>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Home</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="admin.php">Administration</a></li>
            <li> <button style="margin-top:10px;" type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-user" ></span> admin
        </button></li>
           
            <li><a href="logout.php" style="margin-left:19px; margin-top:2px;">Logout
          <span class="glyphicon glyphicon-log-out"></span>
        </a></li>

          </ul>
        </div>
      </div>
    </nav>


  






    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   
    <script src="js/bootstrap.min.js"></script>
  </body>

</html>

<?php

	}

	elseif($usr_lvl==2){



		?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <style type="text/css">
  .carousel h1{
    font-size: 20px;
  }


   .bg{
    background-color:#414CA0;
    color: white;
   } 
     @font-face {
    font-family: 'museo-slab';
    src: url('fonts/28 Days Later.ttf');
    font-style: normal;
}


.samtag h1{
    color: #908C4F;
    padding-left: 50px;
    font-size: 2.5em;
    line-height: 18px;
    
    }

.carousel .carousel-inner .item img {
  
  height: 400px;
  width: 100%;

}
.well {
  margin-left: 20%;
}

nav{
  margin-bottom: 0px;
}



/* Small devices (tablets, 768px and up) */
@media (min-width: @screen-sm-min) { 

   .carousel h1{
    font-size: 50px;
  }

 }

 footer{
  height: auto;
  padding: 10px;
  background-color: #25252C;
 }

.admin h1 h3{
  margin-left: 20px;
}

</style>

<title>Consumer</title>
   
  </head>


  <body>

      
   
   <nav class="navbar navbar-inverse   samtag" >
      <div class="container starttag">

      
        <div class="navbar-header ">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <h1>Clinindia</h1>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Home</a></li>
            <li><a href="services.php">Services</a></li>
            
             <li> <button style="margin-top:10px;" type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-user" ></span> <?php echo $username;?>
        </button></li>
            <li><a href="logout.php" style="margin-left:19px; margin-top:2px;">Logout
          <span class="glyphicon glyphicon-log-out"></span>
        </a></li>

        

          </ul>
        </div>
      </div>
    </nav>


  






    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   
    <script src="js/bootstrap.min.js"></script>
  </body>

</html>


<?php
}

else{

	?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <style type="text/css">
  .carousel h1{
    font-size: 20px;
  }


   .bg{
    background-color:#414CA0;
    color: white;
   } 
     @font-face {
    font-family: 'museo-slab';
    src: url('fonts/28 Days Later.ttf');
    font-style: normal;
}


.samtag h1{
    color: #908C4F;
    padding-left: 50px;
    font-size: 2.5em;
    line-height: 18px;
    
    }

.carousel .carousel-inner .item img {
  
  height: 400px;
  width: 100%;

}
.well {
  margin-left: 20%;
}

nav{
  margin-bottom: 0px;
}



/* Small devices (tablets, 768px and up) */
@media (min-width: @screen-sm-min) { 

   .carousel h1{
    font-size: 50px;
  }

 }

 footer{
  height: auto;
  padding: 10px;
  background-color: #25252C;
 }

.admin h1 h3{
  margin-left: 20px;
}

</style>

<title>Consumer</title>
   
  </head>


  <body>

      
   
   <nav class="navbar navbar-inverse   samtag" >
      <div class="container starttag">

      
        <div class="navbar-header ">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <h1>Clinindia</h1>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Home</a></li>
            <li><a href="services.php">Services</a></li>
            <li> <button style="margin-top:10px;" type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-user" ></span> Guest
        </button></li>
           <li><a href="login.php" style="margin-left:19px; margin-top:2px;">Login
          <span class="glyphicon glyphicon-log-in"></span>
        </a></li>

          </ul>
        </div>
      </div>
    </nav>


  






  

<?php

}


?>