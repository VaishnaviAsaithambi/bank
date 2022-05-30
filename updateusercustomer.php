<?php
   include 'connect.php';
   $Id=$_POST['id'];
   $FirstName=$_POST['FirstName'];
   $LastName=$_POST['LastName'];
   $DateofBirth=$_POST['DateofBirth'];
   $Address=$_POST['Address'];
   $City=$_POST['City'];
   $State=$_POST['State'];
   $PinCode=$_POST['PinCode'];
   $MobileNumber=$_POST['MobileNumber'];
   $Occupation=$_POST['Occupation'];

   $sql="update customer set  FirstName='$FirstName',LastName='$LastName',DateofBirth ='$DateofBirth',Address='$Address',City='$City',State='$State',PinCode='$PinCode',MobileNumber='$MobileNumber',Occupation='$Occupation' where Id=$Id";  
   if(mysqli_query($con,$sql)){
      echo "Record is SUCCESSFULLY UPDATED";
      header('Location:customer.php');
     
  }else{
      echo "Records Not Inserted" . mysqli_error($con);
  }
  
  ?>
  