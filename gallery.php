<?php
	include('header_new.php');
?>
	<script>$('.nav-links:eq(2)').addClass("active")</script>
		<div id="main_content">
			<div id="gallery">
				<div id="gal-title">
					<span>Our Jewelery</span>
				</div>
				<?php
					$sections = getSections();
					$selectionClasses = [];
					$selectionBtns = '';
					foreach ($sections as $s){
						// $class = str_replace(' ', '', $s);
						// array_push($selectionClasses, $class);
						$selectionBtns .= '<button class="gallery-btn" onclick="filterSelection(\''.$s.'\')"> '.$s.'</button>';
					}
					echo '
					<div id="myBtnContainer">
						<button class="gallery-btn active" onclick="filterSelection(\'all\')"> Show all</button>'.
						$selectionBtns . '
					</div>
					<!-- Portfolio Gallery Grid -->
					<div class="row"> ';
					
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
							echo '
							<div class="column '.$section.'">
								<div class="content">
									<img src="data:image/jpeg;base64,'.base64_encode( $img ).'" alt="'.$name.'" style="width:100%" class="gallery-image">
									<div class="content-details">
										<h4>'.$name.'</h4>
										<p>'.$caption.'</p>
										<p>$'.$price.'</p>
									</div>
								</div>
							</div>
							';
						}
					}
					echo '
					</div>
					';
				?>
			</div>
		</div>
		<script>
			filterSelection("all") // Execute the function and show all columns
			function filterSelection(c) {
				var x, i;
				x = document.getElementsByClassName("column");
				if (c == "all") 
					c = "";
				// Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
				for (i = 0; i < x.length; i++) {
					w3RemoveClass(x[i], "show");
					if (x[i].className.indexOf(c) > -1) 
						w3AddClass(x[i], "show");
				}
			}

			// Show filtered elements
			function w3AddClass(element, name) {
				var i, arr1, arr2;
				arr1 = element.className.split(" ");
				arr2 = name.split(" ");
				for (i = 0; i < arr2.length; i++) {
					if (arr1.indexOf(arr2[i]) == -1) {
						element.className += " " + arr2[i];
					}
				}
			}

			// Hide elements that are not selected
			function w3RemoveClass(element, name) {
				var i, arr1, arr2;
				arr1 = element.className.split(" ");
				arr2 = name.split(" ");
				for (i = 0; i < arr2.length; i++) {
					while (arr1.indexOf(arr2[i]) > -1) {
						arr1.splice(arr1.indexOf(arr2[i]), 1); 
					}
				}
				element.className = arr1.join(" ");
			}

			// Add active class to the current button (highlight it)
			var btnContainer = document.getElementById("myBtnContainer");
			var btns = btnContainer.getElementsByClassName("gallery-btn");
			for (var i = 0; i < btns.length; i++) {
				btns[i].addEventListener("click", function(){
					var current = document.getElementsByClassName("gallery-btn active");
					current[0].className = current[0].className.replace(" active", "");
					this.className += " active";
				});
			}
		</script>
<?php
	include('footer_new.php')
?>
