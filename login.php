<?php include("server.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login And Registration system</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Log In</h2>
</div>
<form action="login.php" method="POST">
    <label>Username</label>
    <input type="text" name="username" required><br/>
    <label>Password</label>
    <input type="text" name="password" required><br/>
    <button type="submit" name="login_user">Login</button>
<p><a href="registration.php"><b>Go Back</b></a></p>
</form>

    </div>
    
</body>
</html>