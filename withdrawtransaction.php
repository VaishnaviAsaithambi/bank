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
    height:580px;
    border:2px solid black;
    background-color:white;
  }
  body{
          background-image:url('images5.jpeg');
          background-repeat:no-repeat;
          background-attachment:fixed;
          background-size:cover;

  }
  </style>
  
<body>
 <form name="myform" action="transactioninsert.php" method="post">   
<div class="container">

<?php
     include 'connect.php';
     $sql="select aId,accountno from account"; ?> 
     <div class="col-md-06">
<label>Account  Id</label><br>
<select name="account_id">
        <option></option>
<?php 
        if($res=mysqli_query($con,$sql)){
                if(mysqli_num_rows($res)>0){
                        
                         while($row=mysqli_fetch_array($res)){
echo "<option value=".$row['aId'].">".$row['aId']."[".$row['accountno']. "]</option>";
                             
                         }
                    } else{
                            echo " No records Found";

                    }   // no records found 
         
}else{
     echo "Error while running query";
     echo mysqli_error($con);

}//error while running sql

?>
</select><br>
</div><br>
     <div class="col-md-06">
    <label>Date of Time</label><br>
    <input type="date" name="dateoftime"><br>
    <span id="alert1" style="color: red;"></span><br>
    
  </div>
   

  <div class="col-md-6">
    <label>Transaction Type</label><br>
    <!-- <input type="text" name="transaction"> -->
    <select name="transaction"><br>
           
            <option>Withdraw Money</option>
    <span id="alert3" style="color: red;"></span><br>
</select><br>
</div><br>
   
  <div class="col-md-06">
  <label> Transaction Amount</label><br>
  <input type="text" name="amount">  
   
    <span id="alert4" style="color: red;"></span><br>
</select>
</div><br>

<div class="col-md-6">
  <label>Remarks</label><br>
    <input type="text" name="remarks"><br>
    <span id="alert7" style="color: red;"></span><br>
</div>

      <div class="col-12">
    <button class="btn btn-primary" type="submit" onclick="return validationform()">Withdraw  Transaction</button>
 
  </div>
  </div>
</form>
</body>
</html>