<?php include('server.php') ?>
<!DOCTYPE html >
<html>
    <head>
        <title>passwordReset</title>
        <link rel='stylesheet' href='css/style.css'>
    </head>

<body style='background-color:#7e5e60;'>
    <div class='container'>
        <div class='header'>
            <h2>Let's make you a new password</h2>
        </div>
    </div>
    <div class='container'>
        <form style='background-color:#dda0dd' action='passwordreset.php' method='post'>
            <?php include('errors.php') ?>
            <div>
                <label for='veremail'>Please enter your email and a reset link will be sent:</label>
                <input type='text' name='veremail' required>
            </div>
            <div>
                <button type='submit' name='send_link'>Send Link</button>
            </div>
    </form>

</body>





</html>
