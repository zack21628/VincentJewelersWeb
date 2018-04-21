<?php
	include ('admin_header.php');
	
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
				$i = 0;
				while ($r = $result->fetch_assoc()) {
					$id = $r['id'];
					$img = $r['image'];
					$name = $r['name'];
					$section = $r['section_name'];
					$caption = $r['caption'];
					$description = $r['description'];
					$price = $r['price'];
					$instock = $r['in_stock'];
					$sectionTags = '';
					$sections = getSections();
					foreach ($sections as $s){
						if ($s == $section) {
							$sectionTags .= '<option value="'.$s.'" selected="selected">'.$s.'</option>';
						}
						else {
							$sectionTags .= '<option value="'.$s.'">'.$s.'</option>';
						}
					}
					echo '
					<div class="data_container">
						<div class="img_container">
							<img class="data_img" src="data:image/jpeg;base64,'.base64_encode( $img ).'"/>
						</div>
						<div class="info_container">
							<p class="data_info">ID: '.$id.' - Image: '.$name.'</p>
							<p class="data_info">Section: '.$section.'</p>
							<p class="data_info">Caption: '.$caption.'</p>
							<p class="data_info">Description: '.$description.'</p>
							<p class="data_info">Price: $'.$price.'</p>
							<p class="data_info">In Stock: '.$instock.'</p>
							<button class="edit_img_btn" onclick="editModal('.$i.')">Edit</button>
							<div class="edit_modal">
								<div class="modal_body">
									<div class="modal_header">
										<button class="close_modal" onclick="closeModal('.$i.')">Close &times; </button>
									</div>
									<div class="modal_content">
										<form id="edit_image_form" action="/admin/edit-item.php" method="POST">
											<input type="hidden" name="img_id" value='.$id.' />
											Name: <input type="text" name="img_name" class="text-inputs" value="'.$name.'" /><br>
											Caption: <input type="text" name="caption" class="text-inputs" value="'.$caption.'" /><br>
											Description:  <textarea id="msg" name="description" >'.$description.'</textarea><br>
											Price: $<input type="number" step="0.01" min="0" max="10000" value="'.$price.'" name="price" class="text-inputs" /><br>
											Section:
											<select name="section_name" class="text-inputs">'.
												$sectionTags
											.'</select><br><br>
											In Stock: 
											Yes: <input type="radio" name="in_stock" value="true" checked="checked" /> 
											No: <input type="radio" name="in_stock" value="false" /><br>
											<input type="submit" class="edit_submit" name="submit_edits" value="Edit" />
										</form>
									</div>
								</div>
							</div>
							<form class="edit_img_btn" action="/admin/delete-item.php" method="POST">
								<input type="hidden" name="img_id" value="'.$id.'">
								<input type="submit" name= "delete_edit" value="Delete">
							</form>
						</div>
					</div><hr>';
					$i++;
				}
			}
			else {
				echo 'There are no images, or there is an error.';
				die();
			}
		?>
	</div>
	<script>
		var modal = document.getElementsByClassName('edit_modal');

		// Get the button that opens the modal
		// var btn = document.getElementById("myBtn");

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close_modal")[0];

		// When the user clicks the button, open the modal 
		// btn.onclick = function() {
			// modal.style.display = "block";
		// }
		function editModal(n) {
			var modal = document.getElementsByClassName('edit_modal')[n];
			modal.style.display = "block";
		}
		function closeModal(n) {
			var modal = document.getElementsByClassName('edit_modal')[n];
			modal.style.display = "none";
		}

		// When the user clicks on <span> (x), close the modal
		// span.onclick = function() {
			// modal.style.display = "none";
		// }

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
	</script>
</body>
</html>