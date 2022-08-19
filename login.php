<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css\style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
<body style="background-color:#7e5e60;">

    <div class='container container-fluid' style="width: 400px">
        <div class='header'>
        <h2>Login</h2>
        </div>
    </div>
    <div class='container container-fluid container-sm' style="width: 700px">
        <form style='background-color: #dda0dd' action='login.php' method='post'>
            <?php include('errors.php') ?>
            <div class="mb=3 mt-3 mx-auto" style="width: 300px">
                <label for='username' class="form-label form-label-sm" ><b>Username : </b></label>
                <input type='text' class="form-control form-control-sm" placeholder="Enter username" name='username'>
            </div>
            <div class="mt-3 mx-auto"style="width: 300px">
                <label for='password' class="form-label"><b>Password : </b></label>
                <input type='password' class="form-control form-control-sm" placeholder="Enter password" name='password_1'>
            </div>
            <div class="d-flex justify-content-end">
                <button type='submit' name='login_user' class="mx-auto my-1">Login</button>
            </div>
            <p>Don't have an account? <a href='registration.php'><b>Register here.</b></a></p>
            <br>
            <p>Forgot password? <a href='passwordreset.php'><b>Click here.</b></a></p>
        </form>
    </div>
    <!--<div class="cube">
        <div class="cube1"></div>
        <div class="cube2"></div>
        <div class="cube3"></div>
    </div> -->
    <!--<div class="spinner"></div>-->
    </form>
</body>
</html>