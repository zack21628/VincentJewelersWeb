<?php 
$serverName = 'localhost';
$dbUser = 'root';
$dbPassword = '17Jamesadmin';
$db = 'vj db';

function dbConnect($serverName, $dbUser, $dbPassword, $db){
	$conn = new mysqli($serverName, $dbUser, $dbPassword, $db);
	if ($conn->connect_errno) {
		die("Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error);
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

function dbSafe($s) {
	$tmp = stripslashes($s);
	$tmp2 = htmlentities($tmp);
	return $tmp2;
}

function getSections() {
	$serverName = 'localhost';
	$dbUser = 'root';
	$dbPassword = '17Jamesadmin';
	$db = 'vj db';
	
	$sections = [];
	$conn = dbConnect($serverName, $dbUser, $dbPassword, $db);
	$q = "SELECT DISTINCT section_name FROM galleryimages";
	$result = $conn->query($q);
	if ($result->num_rows > 0) {
		$i = 0;
		while ($r = $result->fetch_assoc()) {
			array_push($sections, $r['section_name']);
		}
	}
	$conn->close();
	return $sections;
}
function printSections() {
	$sections = getSections();
	foreach ($sections as $s){
		echo '<option value="'.$s.'">'.$s.'</option>';
	}
}

?>