<?php include('configurations.php') ?>
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
    <title>Sign-up</title>
</head>

<body>

    <form method="post" action="sign_up.php" class="form-signin">
        <center>
            <h1 class="h3 mb-3 font-weight-normal">Please Register</h1>
        </center>
        <?php include('errors.php'); ?>
        <div class="">

            <div class="form-group">
                <label for="c_fname" class="text-black">Username </label>
                <input type="text" class="form-control" id="c_fname" name="username" placeholder="Username"
                    value="<?php echo $username; ?>" required>

            </div>

            <div class="form-group ">
                <label for="c_email" class="text-black">Email </label>
                <input type="email" class="form-control" id="c_email" name="email" placeholder="Email" value=""
                    required>
            </div>

            <div class="form-group">
                <label for="c_pass" class="text-black">Password </label>
                <input type="password" class="form-control" id="c_pass" name="password_1" placeholder="Password"
                    value="" required>
            </div>

            <div class="form-group">
                <label for="c_repass" class="text-black">Re-type Password </label>
                <input type="password" class="form-control" id="c_repass" name="password_2" placeholder="Password"
                    value="" required>
            </div>

            <center>
                <button class="btn btn-lg btn-warning btn-block" style="background-color: #59b8b2;" name="reg_user"
                    type="submit">Register</button><br>

                <small>Already A User?</small> <a href="sign_in.php" style="color:red;">Log In Now</a>
            </center>



        </div>
    </form>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/popper.min.js"></script>
</body>

</html>