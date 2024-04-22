<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
<link rel="stylesheet" href="stylesheet.css">
<form action="loginconnection.php" method="post">
    <div >
      <h1>login </h1>
    </div>
    <div class="ABC">
      <label>Email</label>
    <input type="Email" name="Email"placeholder="enter your Email"><br>
    <label>password</label>
    <input type="password" name="password"placeholder="enter your password"><br>
    <label>ConfirmPassword</label>
    <input type="password" name="ConfirmPassword"placeholder="enter your password"><br>
    </div>
    <div class=BC>
    <input type="submit" value="login">
    <div class="DE">
    <h5>If you are not registration,then
    <a href="registration.php">click here</a> </h5>
    </div>
    </div>
  </body>
</html>