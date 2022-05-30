<?php
  include 'connect.php';
  $accountno=$_POST['accountno'];
  $customerid=$_POST['customerid'];
  
  $branchid=$_POST['branchid'];
 
  $accounttype=$_POST['accountype'];
  $accountcreation=$_POST['accountcreation'];
  $currentbalance=$_POST['currentbalance'];
  $accountstatus=$_POST['accountstatus'];
   
  $sql="INSERT into account (accountno,customerid, branchid,accounttype,accountcreation,currentbalance,accountstatus)
  values('$accountno','$customerid','$branchid','$accounttype','$accountcreation',' $currentbalance','$accountstatus')";
 if(mysqli_query($con,$sql)){
    echo "record inserted successfully";
   //header('Location:account.php');
 }else{
     echo "error in insert records" . mysqli_error($con);
 }
 