<?php 
	include ('admin_header.php');
	
	$serverName = 'localhost';
	$dbUser = 'root';
	$dbPassword = '17Jamesadmin';
	$db = 'vj db';
	if (empty($_POST['username'])) {
		die ("Username is empty.");
	}
	if (empty($_POST['password'])) {
		die ("Password is empty.");
	}
	$username = $_POST['username'];
	$password = $_POST['password'];
	$username = stripslashes($username);
	$password = stripslashes($password);
	$username = htmlentities($username);
	$password = htmlentities($password);
	$password = md5($password);
	
	$conn = dbConnect($serverName, $dbUser, $dbPassword, $db);
	$q = "SELECT id FROM users WHERE username='$username' AND password='$password'";
	$result = $conn->query($q);
	if ($result->num_rows == 1) {
		$userId = $result->fetch_assoc()['id'];
		echo 'Welcome!';
		session_start();
		$_SESSION['logged_in'] = true;
		header("HTTP/1.1 303 See Other");
        header("Location: http://$_SERVER[HTTP_HOST]/admin/manage.php");
        die();
	}
	else {
		die ("Wrong username or password.");
	}

?>