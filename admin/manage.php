<?php
	include ('admin_header.php');
?>
	<div id="page">
		<div id="admin_menu">
		<?php 
			if (isset($_GET['uploadSuccess']) == true) {
				echo "<p>Image " . $_GET['imgName'] . " has been successfully uploaded!<p>";
			}
			elseif (isset($_GET['editSuccess']) == true){
				echo "<p>Image " . $_GET['imgName'] . " has been successfully updated!<p>";
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