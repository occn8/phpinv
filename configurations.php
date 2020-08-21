<?php 
	session_start();

	$username = "";
	$email    = "";
	$errors = array();

	$connect = mysqli_connect('localhost', 'root', '');

	$ct = "CREATE DATABASE IF NOT EXISTS inventory";
	mysqli_query($connect, $ct);

    $use = "USE inventory";
	mysqli_query($connect, $use);
	
	$user = "CREATE TABLE IF NOT EXISTS users (
		id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		username VARCHAR(30) NOT NULL,
		email VARCHAR(30),
		password VARCHAR(30)
		)";
		mysqli_query($connect, $user);

	$pdts = "CREATE TABLE IF NOT EXISTS products (
		id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		pdtname VARCHAR(50) NOT NULL,
		pdtdescription VARCHAR(255) NOT NULL,
		pdtbarcode INT(20),
		insertdate DATE
		)";
		mysqli_query($connect, $pdts);

	$products = "INSERT INTO `products` (`id`, `title`, `author`, `edition`, `insertdate`) VALUES
	(1, 'Wrong key then', 'Debuzzy skar', 1, '2020-08-11'),
	(2, 'Guns akimbo', 'collino antony', 2, '2020-08-11'),
	(3, 'Bob Marley', 'Ganja planter q', 1, '2020-08-11'),
	(4, 'Steven Mohock', 'Antony grey', 2, '2020-08-11'),
	(5, 'Stroy of that guy', 'Steven Mohock', 1, '2020-08-11'),
	(6, 'Blackkan Man Turn', 'Picasco italio', 2, '2020-08-11'),
	(7, 'White Orange me', 'Donald hashhole', 1, '2020-08-11'),
	(8, 'Blackkan Man Turn', 'collino antony', 2, '2020-08-11'),
	(9, 'The Avenger marvel', 'roy cater troy', 3, '2020-08-11')";
	mysqli_query($connect, $products);


	if (isset($_POST['reg_user'])) {
		$username = mysqli_real_escape_string($connect, $_POST['username']);
		$email = mysqli_real_escape_string($connect, $_POST['email']);
		$pass1 = mysqli_real_escape_string($connect, $_POST['password_1']);
		$pass2 = mysqli_real_escape_string($connect, $_POST['password_2']);

		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($pass1)) { array_push($errors, "Password is required"); }

		if ($pass1 != $pass2) {
			array_push($errors, "passwords don't match");
		}

		if (count($errors) == 0) {
			$password = md5($pass1);
			$query = "INSERT INTO users (username, email, password) 
					  VALUES('$username', '$email', '$password')";
			mysqli_query($connect, $query);

			$_SESSION['username'] = $username;
			setcookie('user', $username, time() + (86400 * 1), "/");
			header('location: index.php');
		}

	}


	if (isset($_POST['login_user'])) {
		$email = mysqli_real_escape_string($connect, $_POST['email']);
		$password = mysqli_real_escape_string($connect, $_POST['password']);

		if (empty($email)) {
			array_push($errors, "Email required");
		}
		if (empty($password)) {
			array_push($errors, "Password required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
			$results = mysqli_query($connect, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				setcookie('user', $username, time() + (86400 * 1), "/");
				header('location: index.php');
			}else {
				array_push($errors, "Incorrect combination");
			}
		}
	}

	if (isset($_POST['product_add'])) {
		$title = mysqli_real_escape_string($connect, $_POST['title']);
		$author = mysqli_real_escape_string($connect, $_POST['author']);
		$edition = mysqli_real_escape_string($connect, $_POST['edition']);

		if (empty($title)) {
			array_push($errors, "Title required");
		}
		if (empty($author)) {
			array_push($errors, "Author required");
		}
		if (empty($edition)) {
			array_push($errors, "Edition required");
		}

		if (count($errors) == 0) {
			$query = "INSERT INTO products (title, author, edition, insertdate ) 
					  VALUES('$title','$author', '$edition', NOW())";
			mysqli_query($connect, $query);

			$_SESSION['added'] = "added successfuly";
			header('location: allbooks.php');
		}
	}

	$querryinventory = "SELECT * FROM products";
	$result = $connect->query($querryinventory);
	if ($result->num_rows > 0) {
	} else {}


		if (isset($_POST['update_product'])) {
			$oldauthor = mysqli_real_escape_string($connect, $_POST['author']);
			$newauthor = mysqli_real_escape_string($connect, $_POST['new']);
			$id = mysqli_real_escape_string($connect, $_POST['id']);
	
			if (empty($id)) { array_push($errors, "ID required"); }
	
			if (empty($oldauthor)) { array_push($errors, "Old Author required!"); }
			
			if (empty($newauthor)) { array_push($errors, "Author required!"); }
			
	
			if (count($errors) == 0) {
				$query = "UPDATE products SET author='$newauthor' WHERE id='$id'";
				mysqli_query($connect, $query);
	
				header('location: allproducts.php');
			}
		
		}


		if (isset($_POST['del_product'])) {
			$id = mysqli_real_escape_string($connect, $_POST['id']);
	
			if (empty($id)) { array_push($errors, "Product ID required"); }
		
	
			if (count($errors) == 0) {
				$query = "DELETE FROM products WHERE id='$id'";
				mysqli_query($con, $query);
	
				header('location: allproducts.php');
			}
		
		}

?>
