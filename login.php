<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="CSS\style.css">
    </head>
<body>
<body style="background-color:#7e5e60;">

    <div class='container'>
        <div class='header'>
        <h2>Login</h2>
        </div>
    </div>
    <div class="container">
        <form action='login.php' method='post'>
            <?php include('errors.php') ?>
            <div>
                <label for='username'><b>Username :</b> </label>
                <input type='text' name='username' required>
            </div>
            <div>
                <label for='password'><b>Password :</b> </label>
                <input type='password' name='password_1' required>
            </div>
            <div>
                <button type='submit' name='login_user'>Login</button>
            </div>
            <p>Don't have an account? <a href='registration.php'><b>Register here.</b></a></p>
            <br>
            <p>Forgot password? <a href='passwordreset.php'><b>Click here.</b></a></p>
    </div>



    </form>
</body>
</html>