<?php 

  session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "Please login";
		header('location: sign_in.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: sign_in.php");
	}

?>
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
    <title>Home</title>
</head>

<body>
    <div class="d-flex flex-column p-2 bg-white border-bottom shadow-sm">
        <nav class="navbar navbar-expand-md navbar-light" id="site-header">
            <div class="navbar-header">
                <a href="#" class="navbar-brand">
                    <span class="fir-l">U</span><span class="scec-l">-invent</span>
                </a>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="inventory.php">Inventory</a></li>
                    <li class="nav-item"><a class="nav-link" href="invent_add.php">Input</a></li>
                    <li class="nav-item"><a class="nav-link" href="invent_update.php">Update</a></li>
                    <li class="nav-item"><a class="nav-link" href="invent_delete.php">Remove</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>

                    <li class="nav-item">
                        <?php  if (isset($_SESSION['username'])) : ?>
                        <a class="nav-link" href="index.php?logout='1'" style="color: orangered !important;">Logout</a>
                        <?php endif ?>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
    <div style="height: 10px;" class="shadow-sm">

    </div>
    <div class="jumbotron" style="background:url(images/bg.jpg) no-repeat; background-size: cover; ">
        <div class="container p-md-2" style="background-color:rgba(255, 255, 255, 0.788);" >
            <h1 class="display-3"> <span> <img class="mb-4" src="favicon.ico" alt="" height="100">
                </span> <span class="fir-l" style="font-size: larger;">U</span><span class="scec-l"
                    style="font-size: larger;">-invent</span></h1>
            <p style="font-size: xx-large;">Inventory management software for growing businesses.</p>
            <p style="font-size: large;">Increase your sales and keep track of every unit with our powerful stock
                management, order fulfillment, and inventory control software. </p>

            <p><a class="btn btn-outline-primary btn-lg" href="#" style="background-color: #59b8b2; color:black;" role="button">Learn more &raquo;</a></p>
        </div>
    </div>

    <div class="pricing-header px-3 py-3 pt-md-2 pb-md-4 mx-auto text-center">
        <p class="lead">U-invent is a suite of open source business apps that cover all your company needs: CRM, eCommerce, 
            accounting, inventory, point of sale, project management, etc.
            U-invent's unique value proposition is to be at the same time very easy to use and fully integrated.</p>
    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4 primary">Run a more efficient business</h1>
    </div>

    <div class="container border-bottom">
        <div class="row">
            <div class="col-md-4 styf">
                <img class="mb-4" src="images/round_dolly.png" alt="" height="100">
                <h2>Warehouse Management</h2>
                <p>Check stock level, manage inter-warehouse transfer, and generate reports for specific warehouses
                    within seconds. Warehouse inventory management, at your fingertips. </p>
                <p><a class="btn" href="#" role="button" style="color: #59b8b2;">View details &raquo;</a></p>
            </div>
            <div class="col-md-4 styf">
                <img class="mb-4" src="images/round_checklist.png" alt="" height="100">
                <h2>End-to-end tracking</h2>
                <p>Track every item or batch in your inventory with serial number and batch tracking feature.
                    This way, you can either always keep a track on the movement of the items or have better
                    control over the expiry of each batch. </p>
                <p><a class="btn " href="#" role="button" style="color: #59b8b2;">View details &raquo;</a></p>
            </div>
            <div class="col-md-4 styf">
                <img class="mb-4" src="images/round_dolly.png" alt="" height="100">
                <h2>Multiple shipping integrations</h2>
                <p>Get real-time shipping rates and in-transit details of major shipping carriers and choose a
                    shipping partner for your business, wisely. A much-needed feature for a complete inventory
                    management system.</p>
                <p><a class="btn " href="#" role="button" style="color: #59b8b2;">View details &raquo;</a></p>
            </div>
        </div>
    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4 primary">Our Simple Pricing</h1>
    </div>

    <div class="container">
        <div class="card-deck mb-3 text-center">
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Free</h4>
                </div>
                <div class="card-body styf2">
                    <h1 class="card-title pricing-card-title">0 <small class="text-muted">/ month</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Usage in Uganda</li>
                        <li>5 users involved</li>
                        <li>1 GB of storage</li>
                        <li>Email support</li>
                        <li>Help center Access</li>
                        <li>1 Warehouse ***</li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-outline-primary primary">Sign up Now</button>
                </div>
            </div>
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Basic</h4>
                </div>
                <div class="card-body styf2">
                    <h1 class="card-title pricing-card-title">$5 <small class="text-muted">/ month</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Usage in Africa</li>
                        <li>10 users involved</li>
                        <li>5 GB of storage</li>
                        <li>Priority email support</li>
                        <li>Help center Access</li>
                        <li>2 Warehouses ***</li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-outline-primary primary">Get started</button>
                </div>
            </div>
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Standard</h4>
                </div>
                <div class="card-body styf2">
                    <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ month</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Usage Around the world</li>
                        <li>20 users involved</li>
                        <li>10 GB of storage</li>
                        <li>Priority email support</li>
                        <li>Help center Access</li>
                        <li>Serial Number Tracking</li>
                        <li>5 Warehouses ***</li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-outline-primary primary">Get started</button>
                </div>
            </div>
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Professional</h4>
                </div>
                <div class="card-body styf2">
                    <h1 class="card-title pricing-card-title">$25 <small class="text-muted">/ month</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Usage Around the world</li>
                        <li>30 users involved</li>
                        <li>15 GB of storage</li>
                        <li>Phone and email support</li>
                        <li>Help center Access</li>
                        <li>Serial Number Tracking</li>
                        <li>10 Warehouses ***</li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-outline-primary primary">Get started</button>
                </div>
            </div>
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