<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
        <link rel="stylesheet" href="CSS\style.css">
    </head>
<body style="background-color:#483248;">
    <div class='container'>
        <div class='header'>
        <h2>Register</h2>
        </div>
    </div>
    <div class="container">
        <form action='registration.php' method='post'>
            <?php include('errors.php') ?>
            <div>
                <label for='username'>Username : </label>
                <input type='text' name='username' required>
            </div>
            <div>
                <label for='email'>Email : </label>
                <input type='email' name='email' required>
            </div>
            <div>
                <label for='password_1'>Password : </label>
                <input type='password' name='password_1' required>
            </div>
            <div>
                <label for='password_2'>Confirm Password : </label>
                <input type='password' name='password_2' required>
            </div>
            <div>
                <button type='submit' name='register_user'>Submit</button>
            </div>
            <p>Already a user? <a href='login.php'><b>Login</b></a></p>
    </div>

    </form>
</body>
</html>