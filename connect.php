<?php
$con=mysqli_connect('localhost','root','vaishu10','bank');
if($con==false){
    echo "error in connection".mysqli_connect_error();
}
?>