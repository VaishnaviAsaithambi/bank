<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login val</title>
</head>
<body>
   <?php session_start();
   include 'connect.php';
   $username=$_POST['username'];
   $password=$_POST['password'];
   $dbusername=[''];
   $dbpasword=[''];
   $dbroll=[''];
   $sql="select * from login where username='$username'";
   echo "$sql";
   echo "$username";
   echo "$password";
   if($res=mysqli_query($con,$sql)){
   if(mysqli_num_rows($res)>0){
           while($row=mysqli_fetch_array($res)){
               $dbusername=$row['username'];
               $dbpassword=$row['password'];
               $dbroll=$row['roll'];
           }
           if($password==$dbpassword){
               
               $_SESSION ['username']=$dbusername;
               $_SESSION['roll']=$dbroll;
               echo "welcome to login page";
               header('location:dashboarduser.php');

           }else{
               echo "password not match";
           }if($_SESSION['roll']=='A'){
            header('location:dashboardA.php');
           }
       }else{
           echo "no matching record";
       }
   }else{
       echo "no data";
   }


mysqli_close($con);
?>
</body>
</html>