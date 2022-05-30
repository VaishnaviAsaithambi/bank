<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Account Details</title>
    <style>
        .btn a{
             text-decoration: none;
             color: white;
             margin-top: 200px;
        }
    </style>
</head>
<body>
    <div class="container">
         
        
         <?php  
           include 'connect.php';
           $AId=$_GET['aid'];
           $sql="select * from account
           inner join customer on customer.Id = account.customerid
           inner join branch on branch.Id = account.branchid where accountno=$AId";
           
           if($result=mysqli_query($con,$sql)){
            if(mysqli_num_rows($result)){

           
                    echo "<table class='table table-primary'>";
                    echo "<thead>";
                    echo "<tr>";
                    echo "<th>Id </th>";
                    echo "<th>customerid</th>";
                    echo "<th>accountno</th>"; 
                    echo "<th>branchid</th>";
                    echo "<th>accounttype</th>";
                    echo "<th>accountcreation</th>";
                    echo "<th>accountbalance</th>";
                    echo "<th>accountstatus</th>";
                    echo "<th>creationdate </th>";
                    echo "</tr>";
                    echo "</thead>";
            
                
                    
              while($row=mysqli_fetch_array($result)){
                    echo "<tbody>";
                    echo "<tr>";
                    $Id=$row['Id'];
                 
                                                                                                                                                                                                 
                   echo "<td>".$row ['Id']."</td>";
                   echo "<td>".$row ['customerid']."</td>";
                   echo "<td>".$row ['accountno']."</td>";
                   echo "<td>".$row['branchid']."</td>";
                 
                   echo "<td>".$row['accounttype']."</td>";
                   echo "<td>".$row['accountcreation']."</td>";
                   echo "<td>".$row['currentbalance']."</td>";
               
                   echo "<td>".$row['accountstatus']."</td>";
                
                
                   echo "<td>".$row['creationdate']."</td>";
              
              
                  echo "</tr>";
                  echo"</tbody>";
              }
                  echo "</table>";
            
              }
           }
           ?>
</div>
    <div class="btn">
             <button class="btn btn-dark"><a href="account.php">Go Back</a></button>
         </div>
</body>
</html>
