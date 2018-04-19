<?php
	include ('admin_header.php');
	$serverName = 'localhost';
	$dbUser = 'root';
	$dbPassword = '17Jamesadmin';
	$db = 'vj db';
	$conn = dbConnect($serverName, $dbUser, $dbPassword, $db);
	$id = $_POST['img_id'];
	$name = $_POST['img_name'];
	$section = $_POST['section_name'];
	$caption = $_POST['caption'];
	$description = $_POST['description'];
	$price = $_POST['price'];
	$instock = $_POST['in_stock'];
	$q = "UPDATE galleryimages SET name = '$name', section_name = '$section', caption = '$caption', description = '$description', price = '$price', in_stock='$instock' WHERE id='$id';";	
	if ($conn->query($q) === TRUE) {
		header("HTTP/1.1 303 See Other");
		header("Location: http://$_SERVER[HTTP_HOST]/admin/manage.php?editSuccess=true&imgName=$name");
		die();
	}
	else {
		echo "Error: " . $q . "<br>" . $conn->error;
	}

?>