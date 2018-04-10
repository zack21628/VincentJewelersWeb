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
#img_upload {
	display: block ;
	padding: 5px ;
	margin: 5px ;
	float: left ;
}
#submit_upload {
	display: block ;
	padding: 5px ;
	margin: 5px ;
	margin-left: 20px;
	margin-top: 50px ;
	width: 300px;
}
#preview {
	display: none ;
	margin: 0 auto ;
}
.text-inputs {
  padding : 0 10px;
  margin  : 5px;
  width   : 240px;
  height : 20px ;
}
textarea {
	padding: 0 10px;
	margin: 5px;
	width: 240px;
	height: 100px;
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
	if (!(empty($_POST['img_upload']) || empty($_POST['image_name']) || empty($_POST['section_name']))) {
		$conn = dbConnect($serverName, $dbUser, $dbPassword, $db);
		$q = "INSERT INTO galleryimages (image, name, section_name, caption, description, price, in_stock) VALUES ('" . $_POST['img_upload'] . "', '" . $_POST['image_name'] . "', '" . $_POST['section_name'] . "', '" . $_POST['caption'] . "', '" . $_POST['description'] . "', '" . $_POST['price'] . "', '" . $_POST['in_stock']. "')";
		if ($conn->query($q) === TRUE) {
			echo "<p>Image has been successfully uploaded!<p>";
		} 
		else {
			echo "Error: " . $q . "<br>" . $conn->error;
		}
	}
	else {
		echo "You must enter an image name, select a section name, and upload an image";
	}
?>
	<div id="page">
		<div id="upload">
			<form id="login_form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
				Name: <input type="text" name="image_name" class="text-inputs" /><br>
				Caption: <input type="text" name="caption" class="text-inputs" /><br>
				Description:  <textarea id="msg" name="description"></textarea><br>
				Price: $<input type="number" min="0" max="10000" value="0.00" name="price" class="text-inputs" /><br>
				Section:
				<select name="section_name" class="text-inputs">
					<option value=""> </option>
					<option value="Original Designs">Original Designs</option>
				</select><br><br>
				In Stock: 
				Yes: <input type="radio" name="in_stock" value="true" checked="checked"/> 
				No: <input type="radio" name="in_stock" value="false"/><br>
				<p>Upload Image: </p>
				<input type="file" name="img_upload" id="img_upload" /><br><br>
				<input type="hidden" name="username" value="" />
				<input type="hidden" name="password" value="" />
				<input type="submit" name="submit_upload" id="submit_upload" value="Upload" />
			</form>
		</div>
		<div id="preview_container">
			<img id="preview" src="#" alt="preview" /><br>
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