<?php
	include ('admin_header.php');
?>
	<div id="page">
		<div id="upload">
			<form id="upload_image_form" action="/admin/upload_handle.php" method="POST" enctype="multipart/form-data">
				Name: <input type="text" name="image_name" class="text-inputs" /><br>
				Caption: <input type="text" name="caption" class="text-inputs" /><br>
				Description:  <textarea id="msg" name="description"></textarea><br>
				Price: $<input type="number" step="0.01" min="0" max="10000" value="0.00" name="price" class="text-inputs" /><br>
				Section:
				<select name="section_name" id="section_select" class="text-inputs">
					<option value=""> </option>
				<?php
					printSections();
				?>
				</select>
				<button type="button" name="new_section" onclick=displayNewSection()>New Section</button>
				<label for="new_section" id="new_section_label">Section: <input type="text" name="new_section" id="new_section" /></label><br>
				<br><br>
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
		
		function displayNewSection() {
			ns = document.getElementById('new_section_label');
			ss = document.getElementById('section_select');
			ns.style.display = 'inline';
			ss.value = '';
		}
	</script>
</body>
</html>