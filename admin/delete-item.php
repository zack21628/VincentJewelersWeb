<?php
	include ('admin_header.php');
	$serverName = 'localhost';
	$dbUser = 'root';
	$dbPassword = '17Jamesadmin';
	$db = 'vj db';
	$conn = dbConnect($serverName, $dbUser, $dbPassword, $db);
	$q = "DELETE FROM galleryimages WHERE id=".$_POST['img_id'];
	if ($conn->query($q) === TRUE) {
		header("HTTP/1.1 303 See Other");
		header("Location: http://$_SERVER[HTTP_HOST]/admin/view.php?");
		die();
	} 
	else {
		echo "Error: " . $q . "<br>" . $conn->error;
	}

?>