<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>History of user</title>
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
           $Id=$_GET['id'];
           $sql="select * from transaction where id = $Id";
        //    echo $sql;
           
           if($result=mysqli_query($con,$sql)){
               
            if(mysqli_num_rows($result)){
                echo  "<table class='table table-primary'>";
                echo"<thead >";
                echo "<tr>";                    
                echo"<th>Id </th>";
                echo "<th>accountid</th>";
                echo "<th>dateoftime</th>"; 
                echo "<th>transactiontype</th>";
               
                echo "<th>amount </th>";
                echo "<th>openingbalance</th>";
                echo "<th>closingbalance</th>";
               
                echo "<th>remarks</th>";
                
                echo "</tr>";
                echo "</thead>";
                 echo "<tbody>";         
                
                   
            
                
                    
              while($row=mysqli_fetch_array($result)){
                    echo "<tbody>";
                    echo "<tr>";
                    $Id=$row['Id'];
                 
                                                                                                                                                                                                 
                   echo "<td>".$row ['Id']."</td>";
                   echo "<td>".$row ['accountid']."</td>";
                   echo "<td>".$row ['dateoftime']."</td>";
                   echo "<td>".$row['transactiontype']."</td>";
                 
                   echo "<td>".$row['amount']."</td>";
                   echo "<td>".$row['openingbalance']."</td>";
                   echo "<td>".$row['closingbalance']."</td>";
               
                   echo "<td>".$row['remarks']."</td>";
                
                
                   
              
              
                  echo "</tr>";
                  echo"</tbody>";
              }
                  echo "</table>";
            
              }
           }
           ?>
</div>
    <div class="btn">
             <button class="btn btn-dark"><a href="dashboard.php">Go Back</a></button>
         </div>
</body>
</html>
