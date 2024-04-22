
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
 include'connection1.php';
    if(isset($_POST['save_radio']));
$name=$_POST['name'];
$FatherName=$_POST['FatherName'];
$Gender=$_POST['Gender'];
$PhoneNo=$_POST['PhoneNo'];
$Email=$_POST['Email'];
$password=$_POST['password'];
$ConfirmPassword=$_POST['ConfirmPassword'];
$Village=$_POST['Village'];
$Postoffice=$_POST['Postoffice'];
$Pin=$_POST['Pin'];
$PoliceStation=$_POST['PoliceStation'];
$Aadharname=$_POST['Aadharname'];
$AadharNo=$_POST['AadharNo'];
$PanNo=$_POST['PanNo'];
$DateOfBirth=$_POST['DateOfBirth'];


$sql="select * from data where aadharno = '$AadharNo' and panno = '$PanNo'";
$result = mysqli_query($conn, $sql);
if($result)
{
    $num=mysqli_num_rows($result);
    if($num>0)
    {
        echo"user already exits";
    }
     else
     { 
        if ($password == $ConfirmPassword) 
        {
  $sql="insert into data (name,fathername,Gender,phoneno,email,password,ConfirmPassword,Village,Postoffice,pin,policestation,Aadharname, AadharNo,PanNo,dateofbirth) values ('$name',  '$FatherName','$Gender','$PhoneNo','$Email','$password','$ConfirmPassword','$Village','$Postoffice','$Pin','$PoliceStation','$Aadharname','$AadharNo','$PanNo','$DateOfBirth')";
  
         $result= mysqli_query($conn,$sql);
   if($result)
   {
    echo"signup succesfull ";
   }
   else{
    echo"failed to insert data into data base";
    die(mysqli_error($con));
   }
} else {
    echo "password not match";
}
}}
}
?>