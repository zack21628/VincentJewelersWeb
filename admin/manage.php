<?php
	include ('admin_header.php');
?>
	<div id="page">
		<div id="admin_menu">
		<?php 
			if ($_GET['success'] == true) {
				echo "<p>Image " . $_GET['img_name'] . " has been successfully uploaded!<p>";
			}
		?>
			<ul>
				<li><a href="upload.php" >Upload</a></li>
				<li><a href="view.php" >View Current Images</a></li>
			</ul>
		</div>
	</div>
</body>
</html>