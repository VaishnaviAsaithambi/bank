<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<style>
  .container{
    padding:20px;
    width:330px;
    height:580px;
    border:2px solid black;
    background-color:white;
  }
  body{
          background-image:url('image12.jpg');
          background-repeat:no-repeat;
          background-attachment:fixed;
          background-size:cover;

  }

 
  </style>
  
<body>
 <form name="myform" action="accountinsert.php" method="post">   
<div class="container">

<div class="col-md-6">
    <h1><i>Account Details</i></h1>
    <div class="col-md-6">
    <label>AccountNo</label><br>
    <?php
     $str="123456789101123" ;
     //echo str_shuffle($str); 
     $user=str_shuffle($str);
     $user=substr($user,0,7);
     include 'connect.php';
     $sql="select Id,FirstName,LastName from customer";
     $sql1="select Id,BranchName,BranchIFSC from branch";
     ?>
    <input type="text" name="accountno" value="<?php echo $user?>"><br>
</div>


<div class="col-md-06">
<label>CustomerId</label>
<select name="customerid" id="">
<?php
        if($res=mysqli_query($con,$sql)){
                if(mysqli_num_rows($res)>0){
                        echo "Records found";
                         while($row=mysqli_fetch_array($res)){
echo "<option value=".$row['Id'].">".$row['Id']."[".$row['FirstName']."[".$row['LastName']. "]</option>";
                             
                         }
                    } else{
                            echo " No records Found";

                    }   // no records found 
         
}else{
     echo "Error while running query";
     echo mysqli_error($con);

}//error while running sql

?>


        
</select>

                     </div>     
                     <div class="col-md-06">
                     <label>BranchId</label><br>
                     <select name="branchid" id="">
                     <?php
                           if($res=mysqli_query($con,$sql1)){
                           if(mysqli_num_rows($res)>0){
                        //echo "Records found";
                         while($row=mysqli_fetch_array($res)){
                                echo "<option value=".$row['Id'].">".$row['Id']."[".$row['BranchName']."[".$row['BranchIFSC']. "]</option>";
                             
                         }
                    } else{
                            echo " No records Found";

                    }   // no records found 
         
}else{
     echo "Error while running query";
     echo mysqli_error($con);

}//error while running sql

?>


        
</select>

                     </div>     



                         

<div>
     <label>Accounttype</label><br>
  
    <select name="accountype">
    <option>Savings</option>
    <option>Current</option>
    <option>Salary</option>
    <option>FD salary</option><br>
    
</select>
  </div>
  
  <div>
    <label>AccountCreation</label><br>
    <input type="date" name="accountcreation">
</div>
   
  <div >
  <label>CurrentBalance</label><br>
    <input type="number" name="currentbalance">
    <span id="alert4" style="color: red;"></span><br>
</div>
<div>
  <label>AccountStatus </label><br>
    <input type="text" name="accountstatus">
    <span id="alert5" style="color: red;"></span><br>
    </div>
   
    
      <div class="col-12">
    <button class="btn btn-primary" type="submit" onclick="return validationform()">Add Account</button>
 
  </div>
  </div>
</form>
 
</body>
</html>