<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>
<body>
    <div class='container'>
        <div class='header'>
        <h2>Login</h2>
        </div>
    </div>
    <form action='login.php' method='post'>
        <?php include('errors.php') ?>
        <div>
            <label for='username'>Username : </label>
            <input type='text' name='username' required>
        </div>
        <div>
            <label for='password'>Password : </label>
            <input type='password' name='password_1' required>
        </div>
        <div>
            <button type='submit' name='login_user'>Login</button>
        </div>
        <p>Don't have an account? <a href='registration.php'><b>Register here.</b></a></p>
        <br>
        <p>Forgot password? <a href='passwordreset.php'><b>Click here.</b></a></p>



    </form>
</body>
</html>