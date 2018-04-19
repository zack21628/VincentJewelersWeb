<?php
	include ('admin_header.php');
	$serverName = 'localhost';
	$dbUser = 'root';
	$dbPassword = '17Jamesadmin';
	$db = 'vj db';
	if (!(empty($_FILES['img_upload']) || empty($_POST['image_name']) || (empty($_POST['section_name']) && empty($_POST['new_section'])))) {
		$conn = dbConnect($serverName, $dbUser, $dbPassword, $db);
		$imagetmp=addslashes(file_get_contents($_FILES['img_upload']['tmp_name']));
		$name = dbSafe($_POST['image_name']);
		$caption = dbSafe($_POST['caption']);
		$description = dbSafe($_POST['description']);
		$price = dbSafe($_POST['price']);
		$section = !empty(dbSafe($_POST['section_name'])) ? dbSafe($_POST['section_name']) : dbSafe($_POST['new_section']); 
		$q = "INSERT INTO galleryimages (image, name, section_name, caption, description, price, in_stock) VALUES ('$imagetmp', '" . $name . "', '" . $section . "', '" . $caption . "', '" . $description . "', '" . $price . "', '" . $_POST['in_stock']. "')";
		if ($conn->query($q) === TRUE) {
			header("HTTP/1.1 303 See Other");
			header("Location: http://$_SERVER[HTTP_HOST]/admin/manage.php?uploadSuccess=true&imgName=" . $_POST['image_name']);
			die();
		} 
		else {
			echo "Error: " . $q . "<br>" . $conn->error;
			die();
		}
		
	}
	else {
		echo "You must enter an image name (".$_POST['image_name']."),\n
			  select a section name (".$_POST['section_name']."), 
			  and upload an image";
		die();
	}

?>