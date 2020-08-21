<?php include('configurations.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" href="favicon.ico">
    <title>Update Inventory</title>
</head>

<body>
    <div class="d-flex flex-column p-2 bg-white border-bottom shadow-sm">
        <nav class="navbar navbar-expand-md navbar-light" id="site-header">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">
                    <span class="fir-l">U</span><span class="scec-l">-invent</span>
                </a>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="inventory.php">Inventory</a></li>
                    <li class="nav-item"><a class="nav-link" href="invent_add.php">Input</a></li>
                    <li class="nav-item active"><a class="nav-link" href="#">Update</a></li>
                    <li class="nav-item"><a class="nav-link" href="invent_delete.php">Remove</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>

                </ul>
            </div>
        </nav>
    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Update Product</h1>
        <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap
            example. It’s built with default Bootstrap components and utilities with little customization.</p>
    </div>

    <div class="container">
        <div class="card-deck mb-3 text-center">
        <center>
                <div class="">
                <h1><b>Edit Book Author</b></h1>
                <form action="update.php" method="post">
                <?php include('errors.php'); ?>
                <label for="id" class="white">Book ID</label>
                    <input type="text" name="id" id="id" class="mb-3"><br>
                    <label for="author" class="white">Current Author</label>
                    <input type="text" name="author" id="author" class="mb-3"><br>
                    <label for="new" class="white">New Author</label>
                    <input type="text" name="new" id="new" class="mb-3"><br>
                    <button type="submit" class="btn btn-warning col-md-4 yellow" name="editbook">Update Author</button>
                </form><br>
            </div><br>
        </center>
        </div>

        <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="row">
                <div class="col-12 col-md">
                    <h5 class="primary">About</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Call us 24 x 5 (or) Send us an Email</a></li>
                        <li><a class="text-muted" href="#">Kampala Uganda</a></li>
                        <li><a class="text-muted" href="#">Privacy Terms</a></li>
                        <li><a class="text-muted" href="#">Terms & Conditions</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5 class="primary">Features</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Order Management Software</a></li>
                        <li><a class="text-muted" href="#">Warehouse Management</a></li>
                        <li><a class="text-muted" href="#">Inventory Management System</a></li>
                        <li><a class="text-muted" href="#">Inventory Control</a></li>
                        <li><a class="text-muted" href="#">Inventory Tracking Software</a></li>
                        <li><a class="text-muted" href="#">Marketplace Integrations</a></li>
                        <li><a class="text-muted" href="#">Inventory Reports</a></li>
                        <li><a class="text-muted" href="#">Inventory App</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5 class="primary">Resources</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Help Documentation</a></li>
                        <li><a class="text-muted" href="#">FAQ</a></li>
                        <li><a class="text-muted" href="#">API Documentation</a></li>
                        <li><a class="text-muted" href="#">Inventory Dictionary</a></li>
                        <li><a class="text-muted" href="#">What's New</a></li>
                        <li><a class="text-muted" href="#">Feedback Forum</a></li>
                        <li><a class="text-muted" href="#">Blogs</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5 class="primary">Quick Links</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Integrations</a></li>
                        <li><a class="text-muted" href="#">Pricing</a></li>
                        <li><a class="text-muted" href="#">Customers</a></li>
                        <li><a class="text-muted" href="#">Free Inventory Management</a></li>
                        <li><a class="text-muted" href="#">Free code Generator</a></li>
                        <li><a class="text-muted" href="#">Inventory Calculators</a></li>
                        <li><a class="text-muted" href="#">Other Generator</a></li>
                        <li><a class="text-muted" href="#">Terms</a></li>
                    </ul>
                </div>
            </div><br>
            <center>
                <p>&copy; 2020 U-invent &middot; All Rights Reserved &middot; <a href="#">Privacy</a> &middot; <a
                        href="#">Terms</a></p>
            </center>
        </footer>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/popper.min.js"></script>
</body>

</html>