<?php include("server.php")?>
<?php
//session_start();
if(isset($_SESSION["username"])){
    $_SESSION["msg"] = "You must log in to view this page";
    header("location: login.php");
}
if(isset($_GET["logout"])){
    session_destroy();
    upset($_SESSION["username"]);
    header("location : login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <h1>This is the Homepage</h1>
<h3><a href="registration.php">Click here<a></h3>

    <?php
    if(isset($_SESSION["success"])) : ?>
    <div>
        <h3>
            <?php
            echo $_SESSION["success"];
            unset($_SESSION["success"]);

            ?>
        </h3>

    </div>
    <?php endif ?>


    <?php if(isset($_SESSION["username"])) : ?>

        <h3>Welcome <strong><?php echo $_SESSION["username"]; ?></strong></h3>

        <button><a href="index.php?logout='1'"></a></button>
    <?php endif; ?>

</body>
</html>