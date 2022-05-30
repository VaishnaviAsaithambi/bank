<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<style>
  .container{
    padding:20px;
    width:350px;
    height:1100px;
    border:2px solid black;
    background-color:white;
  }
  body{
          background-image:url('images3.jpg');
          background-repeat:no-repeat;
          background-attachment:fixed;
          background-size:cover;

  }
  </style>
  
<body>
 <form name="myform" action="customerinsert.php" method="post">   
<div class="container">

<div class="col-md-6">
    <h1><i>Customer Details</i></h1>
    <div class="col-md-6">
    <label>Userid</label><br>
    <?php
     $str="123456789101123" ;
     //echo str_shuffle($str); 
     $user=str_shuffle($str);
     $user=substr($user,0,7);
     
     ?>
    <input type="text" name="userid" value="<?php echo $user?>">
    
    <div class="col-md-6">
    <label>Password</label><br>
    <?php
     $str1="Abcde@gQWZ$129" ;
     //echo str_shuffle($str); 
     $pass=str_shuffle($str1);
     $pass=substr($pass,0,6);
     
     ?>
    <input type="text" name="password" value="<?php echo $pass?>">
   

    <label>FirstName</label><br>
    <input type="text" name="FirstName">
  
    
  </div>
  
  <div class="col-md-6">
    <label>LastName</label><br>
    <input type="text" name="LastName">
    <span id="alert3" style="color: red;"></span><br>
</div>
   
  <div class="col-md-6">
  <label>DateofBirth</label><br>
    <input type="date" name="DateofBirth">
  
</div>
<div class="col-md-6">
  <label>Address</label><br>
    <input type="text" name="Address">
 
    </div>
    <div class="col-md-6">
  <label>City</label><br>
    <input type="text" name="City">
    
</div>
<div class="col-md-6">
  <label>State</label><br>
    <input type="text" name="State">
    
</div>
<div class="col-md-6">
  <label>PinCode</label><br>
    <input type="text" name="PinCode">
    
</div>
<div class="col-md-6">
  <label>MobileNumber</label><br>
    <input type="text" name="MobileNumber">
    
</div>
<div class="col-md-6">
  <label>Occupation</label><br>
    <input type="text" name="Occupation">
 
</div>
      <div class="col-12">
    <button class="btn btn-primary" type="submit" onclick="return validationform()">Add Customer</button>
 
  </div>
  </div>
</form>
 

</body>
</html>