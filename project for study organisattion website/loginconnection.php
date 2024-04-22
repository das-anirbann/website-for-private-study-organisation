<?php

if($_SERVER['REQUEST_METHOD']=='POST')
{
    include'connection1.php';
    $Email=$_POST['Email'];
$password=$_POST['password'];
$ConfirmPassword=$_POST['Confirmpassword'];


$sql="select * from data where Email='$Email'and password='$password' and Confirmpassword='$ConfirmPassword'";
$result = mysqli_query($conn, $sql);
if($result)
{
    $num=mysqli_num_rows($result);
    if($num>0)
    {
        echo"congrats, your are login";
    }
     else
     { 
        echo"ohh! user does not exits";
     }
    }
}
?>