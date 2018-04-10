<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vincent Jewelers of Miford,CT</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel="shortcut icon" href="images/favicon.ico">
<style>
#login_form{
	float: left;
}
</style>
</head>
<body>
<?php
	include $_SERVER['DOCUMENT_ROOT'] . '/php-scripts/php-functions.php';
	
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
	}
	else {
		die ("Wrong username or password.");
	}
?>
	<div id="page">
		<div id="admin_menu">
			<ul>
				<li><a href="upload.php" >Upload</a></li>
				<li><a href="view.php" >View Current Images</a></li>
			</ul>
		</div>
	</div>
	<script>
		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				reader.onload = function(e) {
					$('#preview').attr('src', e.target.result);
					$('#preview').attr( "style", "display: block");
				}
				reader.readAsDataURL(input.files[0]);
			}
		}
		
		$("#img_upload").change(function() {
			readURL(this);
		});
	</script>
</body>
</html>