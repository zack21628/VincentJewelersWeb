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
?>
	<div id="page">
		<?php
			$conn = dbConnect($serverName, $dbUser, $dbPassword, $db);
			$q = "SELECT * FROM galleryimages";
			$result = $conn->query($q);
			if ($result->num_rows > 0) {
				while ($r = $result->fetch_assoc()) {
					echo '<img src="data:image/jpeg;base64,'.base64_encode( $r['image'] ).'"/>';
				}
			}
		?>
	</div>
	<script>
		
	</script>
</body>
</html>