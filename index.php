<?php
session_start();

 if(!isset($_SESSION['username']))
{
    $_SESSION['msg'] = "You must log in to view this page.";
    //header("location: login.php");
} 
if(isset($_GET['logout']))
{
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
}


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Homepage</title>
        <link rel="stylesheet" href="css\style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body style="background-color:#4c516d;">
    <body>
        <div class="container">
            <h1>This is the homepage.</h1>
            <?php
            if(isset($_SESSION['success'])) :
            ?>
            <div>
                <h3>
                <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
                </h3>
            </div>
        </div>
        <?php endif ?>
        <?php if(isset($_SESSION['username'])) : ?>
            <div class="container">
                <h3>Welcome <strong><?php echo $_SESSION['username']; ?>!</strong></h3>
                <h2>This content can only be viewed by someone with a valid session token. GGz!<h2>
                <button><a href="index.php?logout='1'">Logout</a></button>
            </div>
            <?php else : ?>
            <div class="container">
                <h2>You do not have permission to view this content.</h2>
            </div>
        <?php endif ?>

    </body>
</html>