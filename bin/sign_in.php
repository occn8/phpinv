<?php include('../config/configurations.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/signin.css">
    <link rel="icon" href="favicon.ico">
    <title>Sign-in</title>
</head>

<body>
    <form class="form-signin" method="post" action="sign_in.php">
        <?php include('errors.php'); ?>
        <center>
            <img class="mb-4" src="favicon.ico" alt="" height="100">
            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        </center>

        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required
            autofocus><br>

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-warning btn-block" style="background-color: #59b8b2;" name="login_user"
            type="submit">Sign in</button><br>

        <center>
            <small>Not A User </small> <a href="sign_up.php" style="color:red;">Sign up Now</a>
            <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
        </center>
    </form>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/popper.min.js"></script>
</body>

</html>