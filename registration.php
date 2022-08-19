<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css\style.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
<body style="background-color:#483248;">
    <div class='container'>
        <div class='header'>
        <h2>Register</h2>
        </div>
    </div>
    <div class="container">
        <form style='background-color: #dda0dd' action='registration.php' method='post'>
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