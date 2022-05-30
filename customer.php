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
<style>
    .container{
        width:-1000px;
    }

    </style>
<body>
    <div class="container">
            <?php 
            
            include 'connect.php';
             $sql="select * from customer";
             echo "<h1><center>Customer Details</center></h1>";
             echo "<button class='btn btn-primary' type='submit' ><a href='addcustomer.php' style='color:white;'><i class='fa fa-plus-circle'> ADD CUSTOMER</i></a></button>";
             
              if($result=mysqli_query($con,$sql)){
                if(mysqli_num_rows($result)>0){
                    
                    echo  "<table class='table table-primary border='2'>";
                    echo"<thead >";
                    echo "<tr>";                    
                    echo"<th>Id </th>";
                    echo "<th>Userid</th>";
                    echo "<th>Password</th>"; 
                    echo "<th>FirstName</th>";
                   
                    echo "<th>LastName</th>";
                    echo "<th>DateofBirth</th>";
                    echo "<th>Address</th>";
                    echo "<th>City</th>";
                    echo "<th>State</th>";
                    echo "<th>PinCode</th>";
                    echo "<th>MobileNumber</th>";
                    echo "<th>Occupation</th>";
                    echo "<th colspan= 3>Update</th>";
                    echo "</tr>";
                    echo "</thead>";
                     echo "<tbody>";           
                
                            
                    
                    while($row=mysqli_fetch_array($result)){
                        echo "<tr>";
                            $Id=$row['Id'];
                            echo "<td>".$row ['Id']."</td>";
                            echo "<td>".$row ['Userid']."</td>";
                            echo "<td>".$row ['Password']."</td>";
                            echo "<td>".$row['FirstName']."</td>";
                            
                            echo "<td>".$row['LastName']."</td>";
                            echo "<td>".$row['DateofBirth']."</td>";
                            echo "<td>".$row['Address']."</td>";
                          
                            echo "<td>".$row['City']."</td>";
                            echo "<td>".$row['State']."</td>";
                            echo "<td>".$row['PinCode']."</td>";
                            echo "<td>".$row['MobileNumber']."</td>";
                            echo "<td>".$row['Occupation']."</td>";
                            echo "<td><a href='viewbank.php?id=".$Id."'><i class='fa fa-eye'style='color:blue;font-size:24px'></i></a></td>";
                            
                            
                            
                            
                            echo "<td><a href='updatecustomer.php?id=".$Id."'><i class='fa fa-edit'style='color:aqua;font-size:24px'></i></a></td>";
                           
                            

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
                </div>
                <body>
                    </html>
            

       
