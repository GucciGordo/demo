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
    <div class='container container-fluid'>
        <div class='header'>
        <h2>Register</h2>
        </div>
    </div>
    <div class="container">
        <form  action='registration.php' method='post'>
            <?php include('errors.php') ?>
            <div>
                <label for='username' class="form-label form-label-sm">Username : </label>
                <input type='text' class="form-control form-control-sm" name='username' placeholder="Enter username" required>
            </div>
            <div>
                <label for='email' class="form-label form-label-sm">Email : </label>
                <input type='email' class="form-control form-control-sm" name='email' placeholder="Enter your email" required>
            </div>
            <div>
                <label for='password_1' class="form-label form-label-sm">Password : </label>
                <input type='password' class="form-control form-control-sm" name='password_1' placeholder="Enter a unique password" required>
            </div>
            <div>
                <label for='password_2' class="form-label form-label-sm">Confirm Password : </label>
                <input type='password' class="form-control form-control-sm" name='password_2' placeholder="Reenter password" required>
            </div>
            <div>
                <button class="my-1" type='submit' name='register_user'>Submit</button>
            </div>
            <p class="px-2 mx-auto">Already a user? <a class="text-info" href='login.php'><b>Login</b></a></p>
    </div>

    </form>
</body>
</html>