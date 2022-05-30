<?php
  include 'connect.php';
  $Userid=$_POST['userid'];
  $Password=$_POST['password'];
  $FirstName=$_POST['FirstName'];
 
  $LastName=$_POST['LastName'];
  $DateofBirth=$_POST['DateofBirth'];
  $Address=$_POST['Address'];
  
  $City=$_POST['City'];
  $State=$_POST['State'];
  $PinCode=$_POST['PinCode'];
  $MobileNumber=$_POST['MobileNumber'];
  $Occupation=$_POST['Occupation'];
  $sql="INSERT into customer (userid,password, firstname,lastname,DateofBirth,address,city,state,pincode,mobilenumber,occupation)
  values('$Userid','$Password','$FirstName','$LastName','$DateofBirth','$Address','$City','$State','$PinCode','$MobileNumber','$Occupation')";
 if(mysqli_query($con,$sql)){
    echo "record inserted successfully";
   header('Location:customer.php');
 }else{
     echo "error in insert records" . mysqli_error($con);
 }
 
 ?>

