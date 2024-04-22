<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="stylesheet.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regstration From</title>
</head>
<body>

        <form action="connection.php" method="post">
    <div class ="container">
        <h1>please Enter Your  Details for sign up</h1>
                   <div class="NNN">
        <h3>please Enter Your Basic details</h3>
        <label>Name</label>
        <input type="text" name="name"placeholder="enter your full name"><br>
        <label>FatherName</label>
        <input type="text"  name="FatherName"placeholder="enter full name"><br>
        <label>Gender</label>
        <input type="radio" name="Gender" value="M"> Male
         <input type="radio" name="Gender"value="F">Female
        <input type="radio" name="Gender"value="O">Others<br>
        <label>PhoneNo</label>
        <input type="number"  name="PhoneNo"placeholder="enter your phoneNo"><br>
        <label>Email</label>
        <input type="email"  name="Email"placeholder="enter your email"><br>
        <label>Password</label>
        <input type="password"  name="password"placeholder="enter your password"><br>
        <label>ConfirmPassword</label>
        <input type="password"  name="ConfirmPassword"placeholder="enter your confirm password">
        </div><br>
        

        
  <div class="BBB"> 
                <h3>Enter Your Address</h3>
        <label>village</label>
        <input type="text"  name="Village"placeholder="enter your village"><br>
        <label>Postoffice</label>
        <input type="text"  name="Postoffice"placeholder="enter your Post"><br>
        <label>Pin</label>
        <input type="number"  name="Pin"placeholder="enter your Pin"><br>
        <label>PoliceStation</label>
        <input type="text"  name="PoliceStation"placeholder="enter your Police station"><br>
</div>
       <br>
<div class="CCC">
               <h3>Enter your Supporting documents Details</h3>
        <label>Name</label>
        <input type="text"  name="Aadharname"placeholder="enter your name as on aadhar"><br>
        <label>AadharNo</label>
        <input type="number"  name="AadharNo"placeholder="enter your AadharNo"><br>
        <label>PanNo</label>
        <input type="text"  name="PanNo"placeholder="enter your PanNo"><br> 
        <label for ="Date of birth">Date of birth</label><br>
        <input type="Date"  name="DateOfBirth"placeholder="enter your Date of birth"><br> 
</div>   
<div class="AAA">  
        <hr class ="dashed">
        <input type="submit" value="submit">
</div>

        <h5>If you are already registration,then
    <a href="login.php">click here</a> </h5>
        

</body>
</html>