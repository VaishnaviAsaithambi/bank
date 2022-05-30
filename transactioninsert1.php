<?php
    
    include 'connect.php';
    $accountid=$_POST['account_id'];
    $dateoftime =$_POST['dateoftime'];
    $transactiontype=$_POST['transaction'];
   
    $amount=$_POST['amount'];
    $openingbalance=$_POST['amount1'];
    $closingbalance=$_POST['amount2'];
    $remarks=$_POST['remarks'];
    $closingBalsql="select currentbalance from account where aId=".$accountid;
    
    echo $closingBalsql;
    if($res=mysqli_query($con,$closingBalsql)){
      if(mysqli_num_rows($res)>0){
              while($row=mysqli_fetch_array($res)){
                $currentBal = $row['currentbalance']; 
              }
            }else{
              echo "No Records found";

            } // no records found
              echo "Current balance ". $currentBal;
          } else{
            echo "Error in executing sql";
          }//error in sql
      $openingbalance = $currentBal;    
      $closingbalance=$openingbalance+$amount;
      $insertSql="insert into transaction ( accountid,dateoftime,transactiontype,amount,openingbalance,closingbalance,remarks)
  values($accountid,'$dateoftime','$transactiontype','$amount','$openingbalance','$closingbalance','$remarks')";
  

 if(mysqli_query($con,$insertSql)){
    echo "record inserted successfully";
   header('Location:transaction.php');
 }else{
     echo "error in insert records" . mysqli_error($con);
 }
 
$updateSql = "update account set currentbalance = ".$closingbalance."where aId=".$accountid;

if(mysqli_query($con,$updateSql)){
  echo "record updated successfully";
 header('Location:transaction.php');
}else{
   echo "error in insert records" . mysqli_error($con);
}

 ?>