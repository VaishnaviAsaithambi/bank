<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Dasboard</title>
</head>
<style>
    .navbar{
    padding-left:800px;
    }
    
    body{
          background-image:url('images6.jpg');
          background-repeat:no-repeat;
          background-attachment:fixed;
          background-size:cover;

  }
</style>
      

<body>


<nav class="navbar navbar-expand-sm bg-info navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="./customer.php">Customer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./account.php">Account</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./transaction.php">Transaction</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="./login.html">Logout</a>
      </li>
    </ul>
  </div>
</nav>
<div class="card  bg-success text-white" style="width:15rem;height:100px;margin-top:80px">
 <div class="card-body2">
     <h5 class="card-title">Total Customers</h5>
     <h6 class="card-subtitle mb-2 text-muted">
</h6>
<?php
include 'connect.php';
$sql="SELECT count(*)as total from customer";
if($result=mysqli_query($con,$sql)){
        if($row=mysqli_fetch_assoc($result)){
            echo $row['total']; 
        
        
        }
    }?>
</div>
  </div>
<div class="card  bg-danger text-white" style="width:15rem;height:100px;margin-left:250px;margin-top:-100px">
 <div class="card-body2">
     <h5 class="card-title">Total Accounts</h5>
     <h6 class="card-subtitle mb-2 text-muted">
</h6>
<?php
include 'connect.php';
$sql="SELECT count(*)as total from account";
if($result=mysqli_query($con,$sql)){
        if($row=mysqli_fetch_assoc($result)){
            echo $row['total']; 
        
        
        }
    }?>
</div>
  </div>
<div class="card  bg-primary text-white" style="width:15rem;height:100px;margin-left:520px;margin-top:-100px">
 <div class="card-body2">
     <h5 class="card-title">Total Transaction</h5>
     <h6 class="card-subtitle mb-2 text-muted">
</h6>
<?php
include 'connect.php';
$sql="SELECT count(*)as total from transaction";
if($result=mysqli_query($con,$sql)){
        if($row=mysqli_fetch_assoc($result)){
            echo $row['total']; 
        
        
        }
    }?>
</div>



</div>
    </body>
</html>