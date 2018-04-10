<?php 
function dbConnect($serverName, $dbUser, $dbPassword, $db){
	// $table = 'galleryimages';
	$conn = new mysqli($serverName, $dbUser, $dbPassword, $db);
	if ($conn->connect_errno) {
		die("Failed to connect to MySQL: (" . $dbc->connect_errno . ") " . $dbc->connect_error);
	}
	return $conn;
}

function getResult($q) {
	$result = $conn->query($q);
	return $result;
}

function dbSelect($q){
	$result = getResult($q);
	if ($result->num_rows > 0) {
		while ($r = $result->fetch_assoc()) {
			echo 'name: ' . $r['name'] . '<br>';
		}
	}
	else {
		echo 'No results';
	}
}

function addNewImage(){
	$q = "INSERT INTO $table () VALUES ()";
	if ($conn->query($q) === TRUE) {
		echo "New record created successfully";
	} 
	else {
		echo "Error: " . $q . "<br>" . $conn->error;
	}
}

?>