<?php 
	session_start();

	$username = "";
	$email    = "";
	$errors = array();
	$connect = mysqli_connect('localhost', 'root', '');

	$ib = "CREATE DATABASE IF NOT EXISTS inventorybase";
	mysqli_query($connect, $ib);

    $use = "USE inventorybase";
	mysqli_query($connect, $use);
	
	$user = "CREATE TABLE IF NOT EXISTS users (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		username VARCHAR(30) NOT NULL,
		email VARCHAR(30),
		password VARCHAR(30)
		)";
		mysqli_query($connect, $user);

	$pdts = "CREATE TABLE IF NOT EXISTS products (
		id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		pdtname VARCHAR(50) NOT NULL,
		pdtdescription VARCHAR(255) NOT NULL,
		batchNo INT(20),
		store VARCHAR(50) NOT NULL,
		insertdate DATE
		)";
		mysqli_query($connect, $pdts);

	$products = "INSERT INTO `products` (`id`, `pdtname`, `pdtdescription`, `batchNo`, `store`, `insertdate`) VALUES
	(1, 'Lawn Moree', 'Named among the Best inventory management software products', 122, 'Store-1', '2020-07-21'),
	(2, 'Chain saw', 'Among the Best inventory management software products', 122, 'Store-1', '2020-07-21'),
	(3, 'Vegetables', 'Best inventory management software products', 122, 'Store-2', '2020-07-21'),
	(4, 'Smart Phone 5', 'Named among the Best inventory management software products', 223, 'Store-3', '2020-08-18'),
	(5, 'Guns', 'Already the Best inventory management software products', 122, 'Store-3', '2020-08-18'),
	(6, 'Bugatti', 'the Best inventory management software products', 223, 'Store-3', '2020-08-20'),
	(7, 'pane knife', 'Best inventory management software products', 455, 'Store-4', '2020-08-20'),
	(8, 'Book 60one', 'Among the Best inventory management software products', 445, 'Store-4', '2020-08-20')";
	mysqli_query($connect, $products);


	if (isset($_POST['reg_user'])) {
		$username = mysqli_real_escape_string($connect, $_POST['username']);
		$email = mysqli_real_escape_string($connect, $_POST['email']);
		$pass1 = mysqli_real_escape_string($connect, $_POST['password_1']);
		$pass2 = mysqli_real_escape_string($connect, $_POST['password_2']);
		if (empty($username)) { array_push($errors, "Username is Required"); }
		if (empty($email)) { array_push($errors, "Email is Required"); }
		if (empty($pass1)) { array_push($errors, "Password is Required"); }
		if ($pass1 != $pass2) {array_push($errors, "Passwords Don't match");}
		if (count($errors) == 0) {
			$password = md5($pass1);
			$query = "INSERT INTO users (username, email, password) 
					  VALUES('$username', '$email', '$password')";
			mysqli_query($connect, $query);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "Welcome";
			setcookie('user', $username, time() + (86400 * 2), "/");
			header('location: index.php');
		}
	}


	if (isset($_POST['login_user'])) {
		$email = mysqli_real_escape_string($connect, $_POST['email']);
		$password = mysqli_real_escape_string($connect, $_POST['password']);
		if (empty($email)) {array_push($errors, "Email Required");}
		if (empty($password)) {array_push($errors, "Password Required");}
		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
			$results = mysqli_query($connect, $query);
			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				setcookie('user', $username, time() + (86400 * 2), "/");
				header('location: index.php');
			}else {array_push($errors, "Incorrect combination");}
		}
	}

	if (isset($_POST['invent_add'])) {
		$pdtname = mysqli_real_escape_string($connect, $_POST['pdtname']);
		$pdtdescription = mysqli_real_escape_string($connect, $_POST['pdtdescription']);
		$batchNo = mysqli_real_escape_string($connect, $_POST['batchNo']);
		$store = mysqli_real_escape_string($connect, $_POST['store']);
		if (empty($pdtname)) {array_push($errors, "Name required");}
		if (empty($pdtdescription)) {array_push($errors, "Description Required");}
		if (empty($store)) {array_push($errors, "Store Required");}
		if (count($errors) == 0) {
			$query = "INSERT INTO products (pdtname, pdtdescription, batchNo, store, insertdate ) 
					  VALUES('$pdtname','$pdtdescription', '$batchNo', '$store', NOW())";
			mysqli_query($connect, $query);
			header('location: inventory.php');
		}
	}

	$querryinventory = "SELECT * FROM products";
	$result = $connect->query($querryinventory);
	if ($result->num_rows > 0) {
	} else {}


	if (isset($_POST['invent_update'])) {
		$oldstore = mysqli_real_escape_string($connect, $_POST['currentstore']);
		$newstore = mysqli_real_escape_string($connect, $_POST['newstore']);
		$id = mysqli_real_escape_string($connect, $_POST['id']);
		if (empty($id)) { array_push($errors, "ID required"); }
		if (empty($oldauthor)) { array_push($errors, "Current store Required!"); }
		if (empty($newauthor)) { array_push($errors, "New store Required!"); }
		if (count($errors) == 0) {
			$query = "UPDATE products SET author='$newauthor' WHERE id='$id'";
			mysqli_query($connect, $query);
			header('location: allproducts.php');
		}
	}

	if (isset($_POST['invent_delete'])) {
		$id = mysqli_real_escape_string($connect, $_POST['id']);
		if (empty($id)) { array_push($errors, "Product ID required"); }
		if (count($errors) == 0) {
			$query = "DELETE FROM products WHERE id='$id'";
			mysqli_query($con, $query);
			header('location: inventory.php');
		}
	}

?>
