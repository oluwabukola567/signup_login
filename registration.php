<?php include("server.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>User Login And Registration system</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Register Here</h2>
</div>
<form action="registration.php" method="POST">
    <?php include("errors.php") ?>
    <label>Username</label>
    <input type="text" name="username" required><br/>
    <label>Email</label>
    <input type="text" name="email" required><br/>
    <label>Password</label>
    <input type="text" name="password" required><br/>
    <label>Confirm Password</label>
    <input type="text" name="cpassword" required><br/>
    <button type="submit" name="reg_user">Submit</button>
<p>Already have an account?<a href="login.php"><b>Login</b></a></p>
</form>

    </div>
    
</body>
</html>
