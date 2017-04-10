<?php

    include 'connect.php';

  if (isset($_POST['sub_l']) && !empty($_POST['lab_name']) && !empty($_POST['city']) && !empty($_POST['state'])  && !empty($_POST['pincode'])) {

    $lab =$_POST['lab_name'];
    $city =$_POST['city'];
    $state=$_POST['state'];
    $pin=$_POST['pincode'];




    $in="INSERT INTO lab (`lab_name`,`city`, `pincode`, `state`) 
    VALUES 
          ('".$lab."','".$city."','".$pin."','".$state."')";



    mysql_query($in);
    echo "DATA successfully added!";



    }

    elseif ( isset($_POST['sub_l']) && (empty($_POST['lab_name']) || empty($_POST['city']) || empty($_POST['state'])  || empty($_POST['pincode']))) {
      echo '!please enter all fields';
    }
       



    ?>



    <div id="container ">
      
      

          <div class="col-sm-10 text-left"> 
       <div class="well">
     
<h1>Welcome to admin page.</h1>
      <br/>
      <h3>Insert data about Laboratories</h3>

          
    <form method="post">
  <div class="form-group">
    <label >Lab Name:</label>
    <input type="text" class="form-control" name="lab_name">
  </div>
  <div class="form-group">
    <label >City:</label>
    <input type="text" class="form-control" name="city">
  </div>
  <div class="form-group">
    <label >State:</label>
    <input type="text" class="form-control" name="state">
  </div>
  <div class="form-group">
    <label >Pincode:</label>
    <input type="text" class="form-control" name="pincode">
  </div>

  <button type="submit" name="sub_l" class="btn btn-default">Submit</button>
</form>
 </div>
    </div>



          <div class="col-sm-10 text-left"> 
       <div class="well">
     

      <br/>
      <h3>Insert data about Tests available</h3>

          
    <form method="post">
  <div class="form-group">
    <label >Test Name:</label>
    <input type="text" class="form-control" name="test_name">
  </div>
  <div class="form-group">
    <label >Lab name:</label>
    <input type="text" class="form-control" name="lab_name">
  </div>
  <div class="form-group">
    <label >Price:</label>
    <input type="text" class="form-control" name="price">
  </div>
 

  <button type="submit" name="sub_t" class="btn btn-default">Submit</button>
</form>
 </div>
    </div>


</div>


<?php

    include 'connect.php';

  if (isset($_POST['sub_t']) && !empty($_POST['test_name']) && !empty($_POST['lab_name']) && !empty($_POST['price']) ) {

    $test=$_POST['test_name'];
    $lab2 =$_POST['lab_name'];
    $price=$_POST['price'];




    $in2="INSERT INTO test (`test_name`,`lab_name`, `price`) 
    VALUES 
          ('".$test."','".$lab2."','".$price."')";



    mysql_query($in2);
    echo "DATA successfully added!";




    }

     elseif ( isset($_POST['sub_t']) && (empty($_POST['lab_name']) || empty($_POST['city']) || empty($_POST['state'])  || empty($_POST['pincode']))) {
      echo '!please enter all fields';
    }
       

    ?>