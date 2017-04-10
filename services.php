<?php

session_start();

include 'connect.php';
include 'functions.php';
include 'base.php';






?>

<div id="container">
      
      <div class="col-sm-10 text-left"> 
       <div class="well">
      <h1>Our services</h1>
      <p><h4>Welcome to Clinindia . We put your family’s health and well being first. If you live in the metro area, you can stop by one of our offices for a health and well being consultation. However, don’t worry if you don’t live near us. Our service will be available at your home. World class diagnostic facility will be given by well trained Blood technician at your home The majority of our information and services are available on this website.

We provide the latest healthcare information for families like yours. We strive to offer the best advice and most current news to keep your family as healthy and safe as possible.</h4>
</p>
        </div>

 <div class="col-sm-12 text-left"> 
       <div class="well">

          <h1> We're here for you and your Diagnostic needs</h1>

          <h4>search for test labs and compare prices</h4>

          <form method="post">

          <h3>laboratory</h3><input type="text" name="lab"><h3>test</h3> <input type="text" name="test">
  <input type="submit" name="submit" value="search">
            

          </form>

          <?php

          include 'connect.php';


            if (isset($_POST['submit']) && !empty($_POST['lab']) || !empty($_POST['test'])) {

    $search_lab =$_POST['lab'];
    $search_test =$_POST['test'];
    

    $result1= mysql_query("SELECT * FROM lab NATURAL JOIN  test
WHERE test_name LIKE '%".mysql_real_escape_string($search_test)."%'
AND lab_name LIKE '%".mysql_real_escape_string($search_lab)."%';");


$array1=mysql_fetch_assoc($result1);
$row=mysql_num_rows($result1);



   

          if ($row != 0) {
            
              ?>

                    <table class="table">
    <thead>
      <tr>
        <th>test</th>
        <th>Lab</th>
        <th>city</th>
        <th>pincode</th>
        <th>state</th>
        <th>price (Rs)</th>
      </tr>
    </thead>
    <tbody> <?php

     for ($i=0 ; $i < $row ; $i++ ) {  ?>

        <tr>
        <td><?php echo mysql_result($result1,$i,"test_name"); ?></td>
        <td><?php echo mysql_result($result1,$i,"lab_name"); ?></td>
        <td><?php echo mysql_result($result1,$i,"city"); ?></td>
        <td><?php echo mysql_result($result1,$i,"pincode"); ?></td>
        <td><?php echo mysql_result($result1,$i,"state"); ?></td>
        <td><?php echo mysql_result($result1,$i,"price"); ?></td>
       
      </tr>

      <?php
     
}


?>
      
    </tbody>
  </table>


<?php
          }


    else {
      echo "no results found!";
    }

  }

          ?>



     


       </div>
       </div>

    </div>



    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   
    <script src="js/bootstrap.min.js"></script>
  </body>

</html>
