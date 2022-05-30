<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
            <?php 
            
            include 'connect.php';
             $sql="select * from transaction";
             echo "<h1><center>Transaction</center></h1>";
             echo "<button class='btn btn-primary' type='submit' ><a href='withdrawtransaction.php' style='color:white;'><i class='fa fa-plus-circle'> WITHDRAW </i></a></button>";
            //  echo "<button class='btn btn-primary' type='submit' ><a href='addtransaction.php' style='color:white;'><i class='fa fa-plus-circle'> ADD </i></a></button>";
             
              if($result=mysqli_query($con,$sql)){
                if(mysqli_num_rows($result)>0){
                    
                    echo  "<table class='table table-bordered'>";
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
                    echo "<th>Action</th>";
                    
                    echo "</tr>";
                    echo "</thead>";
                     echo "<tbody>";           
                
                            
                    
                    while($row=mysqli_fetch_array($result)){
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
                            echo "<td><a href='./viewhistory.php?id=".$Id."'>Eye</a></td>";
                           
                           
                            
                            
                            
                           

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

