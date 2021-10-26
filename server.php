<?php
session_start();
$username = "";
$email = "";


$errors = array();


$db = mysqli_connect("localhost", "root", "1234", "login") or die("could not connect to database");
if(isset($_POST["reg_user"])){

$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$password1 = mysqli_real_escape_string($db, $_POST['password']);
$password2 = mysqli_real_escape_string($db, $_POST['cpassword']);

if(empty($username)) {array_push($errors, "username is required");}
if(empty($email)) {array_push($errors, "email is required");}
if(empty($password1)) {array_push($errors, "Password is required");}

if($password1 != $password2){
    array_push($errors, "password mismatch");
}

$user_check_query = "SELECT * FROM user WHERE username = '$username' or email = '$email' LIMIT 1";

$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);

if($user){
    if($user["username"] === $username){array_push($errors, "username already exists");}
    if($user["email"] === $email){array_push($errors, "Email has been taken");}
    

}
if(count($errors) == 0){
    $password = md5($password1);
    $query = "INSERT INTO user (username, email, password) VALUES('$username', '$email', '$password')";

    mysqli_query($db, $query);
    $_SESSION['username '] = $username;
    $_SESSION['success'] = "You are logged in";

    header('location: index.php');
}
}
if(isset($_POST["login_user"])){
    $username = mysqli_real_escape_string($db, $_POST["username"]);
    $password = mysqli_real_escape_string($db, $_POST["password"]);
     
    if(empty($username)){
        array_push($errors, "Username is required");
    }
    if(empty($password)){
        array_push($errors, "Password is required");

    }
    if(count($errors) == 0){
        $password = md5($password);
        $query = "SELECT * FROM user WHERE username= '$username' AND password = '$password'";
        $results = mysqli_query($db, $query);
        
        if(mysqli_num_rows($results)){
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "logged in succesfully";
            header('location: index.php');
        }else {
            array_push($errors, "wrong username or password, try again next time");
        }
    }
}

?>