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
             $sql="select * from branch";
             echo "<h1><center>Branch Details</center></h1>";
             echo "<button class='btn btn-primary' type='submit' ><a href='addbranch.php' style='color:white;'> ADD BRANCH</a></button>";
             
              if($result=mysqli_query($con,$sql)){
                if(mysqli_num_rows($result)>0){
                    
                    echo  "<table class='table table-primary table-striped'>";
                    echo"<thead >";
                    echo "<tr>";                    
                    echo"<th>Id </th>";
                    echo "<th>BranchIFSC</th>";
                    echo "<th>BranchName</th>"; 
                    echo "<th>BranchCity</th>";
                    
                    echo "<th colspan= 1>Update</th>";
                    echo "</tr>";
                    echo "</thead>";
                     echo "<tbody>";           
                
                            
                    
                    while($row=mysqli_fetch_array($result)){
                        echo "<tr>";
                            $Id=$row['Id'];
                            echo "<td>".$row ['Id']."</td>";
                            echo "<td>".$row ['BranchIFSC']."</td>";
                            echo "<td>".$row ['BranchName']."</td>";
                            echo "<td>".$row['BranchCity']."</td>";
                            
                            echo "<td><a href='viewbranch.php?id=".$Id."'><i class='fa fa-eye'style='color:blue;font-size:24px'></i></a></td>";
                            
                            
                            
                            
                           

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
            <script>
                function validate(){
                    confirm("do you want to delete this");
                }
                let x="do you want to delete this";
                if(confirm(x)==true){
                    return true;
                }
                else{
                    return false;
                }
            

        </body>
        </html>

