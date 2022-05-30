<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
            <?php 
            
            include 'connect.php';
           $sql="select *from account 
           inner join customer on customer.Id = account.customerId
           inner join branch on branch.Id = account.branchid" ;
           
           
             echo "<h1><center>Account Details</center></h1>";
             
             echo "<button class='btn btn-primary' type='submit' ><a href='addaccount.php' style='color:white;'><i class='fa fa-plus-circle'> ADD ACCOUNT</i></a></button>";
             
              if($result=mysqli_query($con,$sql)){
                if(mysqli_num_rows($result)>0){
                    
                    echo  "<table class='table table-primary'>";
                    echo"<thead >";
                    echo "<tr>";                    
                    echo"<th>Id </th>";
                    echo "<th>customerid</th>";
                    echo "<th>accountno</th>"; 
                    echo "<th>branchid</th>";
                   
                    echo "<th>accountype</th>";
                    echo "<th>accountcreation</th>";
                    echo "<th>currentbalance</th>";
                    echo "<th>accountstatus</th>";
                    
                    echo "<th colspan= 3>Update</th>";
                    echo "</tr>";
                    echo "</thead>";
                     echo "<tbody>";           
                
                            
                    
                    while($row=mysqli_fetch_array($result)){
                        echo "<tr>";
                            $accountno=$row['accountno'];
                            echo "<td>".$row ['aId']."</td>";
                            echo "<td>".$row ['customerid']."</td>";
                            echo "<td>".$row ['accountno']."</td>";
                            echo "<td>".$row['branchid']."</td>";
                            
                            echo "<td>".$row['accounttype']."</td>";
                            echo "<td>".$row['accountcreation']."</td>";
                            echo "<td>".$row['currentbalance']."</td>";
                          
                            echo "<td>".$row['accountstatus']."</td>";
                           
                            echo "<td><a href='viewaccount.php?aid=".$row ['accountno']."'><i class='fa fa-eye'style='color:blue;font-size:24px'></i></a></td>";
        
                            

                    }
                            echo "</tr>";
                            echo"</tbody>";
                                
                            echo "</table>";
                           
                             }
                    }
                   
                    ?>
                </div>
            </div>
                </form>
            

        </body>
        </html>

