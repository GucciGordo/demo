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
        <link rel="stylesheet" href="CSS\Style.css">
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
            <h3>Welcome <strong><?php echo $_SESSION['username']; ?>!</strong></h3>
            <button><a href="index.php?logout='1'">Logout</a></button>
        <?php endif ?>

    </body>
</html>