<?php

session_start();

//initializing variables
$username = "";
$email = "";
$errors = array();

//connect to db
$db = mysqli_connect('localhost','root','','demo') or die("Could not connect to database");

//register user
if(isset($_POST['register_user']))
{
$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db,$_POST['email']);
$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
$password_2 = mysqli_real_escape_string($db,$_POST['password_2']);

//form validation
if(empty($username)) {array_push($errors,'Please enter a username');}
if(empty($email)) {array_push($errors,'Please enter a valid email');}
if(empty($password_1)) {array_push($errors,'Please enter a password');}
if($password_1 != $password_2) {array_push($errors, 'Your passwords must match');}

//check db for already existing username
$user_check_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email' LIMIT 1";

$results = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($results);

if($user)
{
    if($user['username'] === $username) {array_push($errors,'That username already exists');}
    if($user['email'] === $email) {array_push($errors,'That email id has already been used');}

}


//register user if no error
if(count($errors) === 0)
{
    $password = password_hash($password_1,PASSWORD_DEFAULT); //encrypts passwords
    $query = "INSERT INTO users (username, password, email) VALUES ('$username','$password','$email')";

    mysqli_query($db,$query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in."; //user is automatically logged in after creating account
    header('location: index.php');
}

}


//login logic
if(isset($_POST['login_user']))//login_user buttton
{
    $username = mysqli_real_escape_string($db,$_POST['username']);
    $password_1 = mysqli_real_escape_string($db,$_POST['password_1']);//text entered in box becomes variable in php
    
    if(empty($username))
    {
        array_push($errors,"A username is required");
    }
    if(empty($password_1))
    {
        array_push($errors,"A password is required");
    }
    if(count($errors) === 0)
    {
        $query = "SELECT password FROM users where username = '$username'";
        $hash = mysqli_query($db,$query);//executing query to find hashed password
        if(mysqli_num_rows($hash)==1)
        {
            $result = mysqli_fetch_row($hash);
            $data = $result[0];//create a variable with value = hash string
            if(password_verify($password_1,$data))//check password provided against stored hash

            {
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You have successfully logged in.";
                header('Location: index.php');
            }
            else
            {
                array_push($errors,'Incorrect Username/Password combination. Try again.');
            }

        }

    }

}

?>