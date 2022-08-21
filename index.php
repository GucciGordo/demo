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
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css\style.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body style="background-color:#4c516d;">
    <body>
        <div class="container-fluid">
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
                <h3 class="mt-1 text-light">
                    <span id='welcome'>Welcome </span> <!--see js file add-content -->
                <?php echo $_SESSION['username']; ?>!</h3>
                <p class="h1 text-dark">This content can only be viewed by someone with a valid session token. GGz!<p>
                <button class="bg-secondary"><a class="text-light" href="index.php?logout='1'">Logout</a></button>
            </div>
            <?php else : ?>
            <div class="container">
                <h2>You do not have permission to view this content.</h2>
            </div>
        <?php endif ?>
        <script src="js/add-content.js"></script>
    </body>
</html>
