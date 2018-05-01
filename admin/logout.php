<?php
	include ('admin_header.php');
	unset($_SESSION["logged_in"]);
	header("HTTP/1.1 303 See Other");
	header("Location: http://$_SERVER[HTTP_HOST]/admin/login.php");
	die();
?>
