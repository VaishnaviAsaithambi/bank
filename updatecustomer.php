<?php
include 'connect.php';

$Id=$_GET['id'];
$sql="select * from customer where id='$Id'";
if($result=mysqli_query($con,$sql)){
    if($row=mysqli_fetch_array($result)){
        $Userid=$row['Userid'];
        $Password=$row['Password'];
        $FirstName=$row['FirstName'];
       
        $LastName=$row['LastName'];
        $DateofBirth=$row['DateofBirth'];
        $Address=$row['Address'];
        
        $City=$row['City'];
        $State=$row['State'];
        $PinCode=$row['PinCode'];
        $MobileNumber=$row['MobileNumber'];
        $Occupation=$row['Occupation'];
            
      }else{
        echo "no data in database";
    }
}else{
    echo "error in update data". mysqli_error($con);
}?>
<style>
  .container{
    padding:20px;
    width:300px;
    height:550px;
    border:2px solid black;
    background-color:lightblue;
    margin-left:550px;
  }
  </style>
  
<body>
 <form name="myform" action="updateusercustomer.php" method="post">   
<div class="container">

<div class="col-md-6">
    <h1><i>Customer Details</i></h1>
    <div class="col-md-6">
    <label>Userid</label><br>
    <?php
     $str="ABCD$235190" ;
     //echo str_shuffle($str); 
     $user=str_shuffle($str);
     $user=substr($user,0,8);
     
     ?>
    <input type="text" name="userid" value="<?php echo $user?>">
    <span id="alert2" style="color: red;"></span><br>
    <div class="col-md-6">
    <label>Password</label><br>
    <?php
     $str1="Abcde@gQWZ$129" ;
     //echo str_shuffle($str); 
     $pass=str_shuffle($str1);
     $pass=substr($pass,0,6);
     
     ?>
    <input type="text" name="password" value="<?php echo$pass?>">
</div>

    <div class="col-md-06">
    <label>FirstName</label><br>
    <input type="text" name="FirstName" value="<?php echo $FirstName?>"><br>
  
    
  </div>
 
  <div class="col-md-6">
    <label>LastName</label><br>
    <input type="text" name="LastName" value="<?php echo$LastName?>">
    
</div>
   
  <div class="col-md-6">
  <label>DateofBirth</label><br>
    <input type="date" name="DateofBirth"value="<?php echo$DateofBirth?>">
</div>
<div class="col-md-6">
  <label>Address</label><br>
    <input type="text" name="Address" value="<?php echo$Address?>">
    </div>
    <div class="col-md-6">
  <label>City</label><br>
    <input type="text" name="City" value="<?php echo$City?>">
  
</div>
<div class="col-md-6">
  <label>State</label><br>
    <input type="text" name="State" value="<?php echo$State?>">

</div>
<div class="col-md-6">
  <label>PinCode</label><br>
    <input type="text" name="PinCode" value="<?php echo$PinCode?>">
    
</div>
<div class="col-md-6">
  <label>MobileNumber</label><br>
    <input type="text" name="MobileNumber" value="<?php  echo$MobileNumber?>">
    
</div>
<div class="col-md-6">
  <label>Occupation</label><br>
    <input type="text" name="Occupation"value="<?php echo$Occupation?>">
    
</div><br>
      <div class="col-md-6">
    <button class="btn btn-primary"style="border: 1px solid black;" type="submit" >Update</button>
 
  </div>
  <div class="row">
    <div class="col">
      <input type="hidden" name="id" value="<?php echo $Id;?>">
  </div>
</form>
</body>
</html>
