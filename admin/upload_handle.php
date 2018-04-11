<?php
	include ('admin_header.php');
	$serverName = 'localhost';
	$dbUser = 'root';
	$dbPassword = '17Jamesadmin';
	$db = 'vj db';
	if (!(empty($_FILES['img_upload']) || empty($_POST['image_name']) || empty($_POST['section_name']))) {
		echo "start\n";
		$load = false;
		$conn = dbConnect($serverName, $dbUser, $dbPassword, $db);
		echo "connect\n";
		$imagetmp=addslashes(file_get_contents($_FILES['img_upload']['tmp_name']));
		echo "image\n";
		$q = "INSERT INTO galleryimages (image, name, section_name, caption, description, price, in_stock) VALUES ('$imagetmp', '" . $_POST['image_name'] . "', '" . $_POST['section_name'] . "', '" . $_POST['caption'] . "', '" . $_POST['description'] . "', '" . $_POST['price'] . "', '" . $_POST['in_stock']. "')";
		echo "query complete?";
		if ($conn->query($q) === TRUE) {
			header("HTTP/1.1 303 See Other");
			header("Location: http://$_SERVER[HTTP_HOST]/admin/manage.php?success=true&img_name=" . $_POST['image_name']);
			die();
		} 
		else {
			echo "Error: " . $q . "<br>" . $conn->error;
		}
		
	}
	else {
		if ($load) {
			echo "Upload an image!";
			$load = false;
			
		}
		else {
			echo "You must enter an image name (".$_POST['image_name']."),\n
				  select a section name (".$_POST['section_name']."), 
				  and upload an image";
		}
	}

?>