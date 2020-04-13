<?php 	

	$customer_email    = "";
	$errors = array();
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'ecommerce');

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$customer_email = mysqli_real_escape_string($db, $_POST['customer_email']);
		$customer_pass = mysqli_real_escape_string($db, $_POST['customer_pass']);

		if (empty($customer_email)) {
			array_push($errors, "Username is required");
		}
		if (empty($customer_pass)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$query = "SELECT * FROM customers WHERE customer_email='".$customer_email."' AND customer_pass='".$customer_pass."'";

			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['customer_email'] = $customer_email;
				$_SESSION['success'] = "";

				header("Location: index.php");
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}
	// LOGIN ADMIN
	if (isset($_POST['admin_login'])) {
		$adminid = mysqli_real_escape_string($db, $_POST['adminid']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($adminid)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$query = "SELECT * FROM admin WHERE adminid='".$adminid."' AND password='".$password."'";

			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['adminid'] = $adminid;
				
				header("Location: view.php");
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}
?>