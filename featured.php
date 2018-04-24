<?php
	include('header_new.php');
	$thumbs = ['images/featured/thumbs/fiftyA_T.jpg', 'images/featured/thumbs/sixtyAb_T.jpg', 'images/featured/thumbs/fortysevenA_T.jpg', 
	'images/featured/thumbs/sixtyoneA_T.jpg', 'images/featured/thumbs/eighteenA_T.jpg', 'images/featured/thumbs/elevenA_T.jpg', 'images/featured/thumbs/seventeenA_T.jpg', 
	'images/featured/thumbs/thirtyA_T.jpg', 'images/featured/thumbs/seventyfiveA_T.jpg', 'images/featured/thumbs/twentythreeA_T.jpg', 'images/featured/thumbs/thirteenA_T.jpg', 
	'images/featured/thumbs/nineA_T.jpg'];
	$imgs = ['images/featured/fiftyA_S.jpg', 'images/featured/sixtyAb_S.jpg', 'images/featured/fortysevenA_S.jpg', 'images/featured/sixtyoneA_Sa.jpg', 
	'images/featured/eighteenA_S.jpg', 'images/featured/elevenA_S.jpg', 'images/featured/seventeenA_S.jpg', 'images/featured/thirtyA_S.jpg', 'images/featured/seventyfiveA_S.jpg',
	'images/featured/twentythreeA_S.jpg', 'images/featured/thirteenA_S.jpg', 'images/featured/nineA_S.jpg'];
	$count_img = count($imgs);
	$count_thumbs = count($thumbs);
	$count = ($count_img < $count_thumbs) ? $count_img : $count_thumbs;
	
?>
	<script>$('.nav_table ul a:eq(1)').addClass("active")</script>
		<div id="main_content">
			<div id="featured">
				<div id="featured-slider" class="container">
				<?php 
					for ($i=0; $i < $count; $i++) {
						$img_num = $i + 1;
						echo '
						<div class="mySlides">
							<div class="numbertext">'.$img_num .' / '.$count.'</div>
							<img class="slider-img" src="'.$imgs[$i].'">
							<div class="filler">&nbsp;</div>
							<div class="img-details">
								<p>&nbsp;</p>
								<p>&nbsp;</p>
								<p>Title</p>
								<p>Caption</p>
								<p>&nbsp;</p>
								<p>&nbsp;</p>
								<p>&nbsp;</p>
								<p>Price</p>
							</div>
						</div>
						';
					}
				?>
					<!-- Next and previous buttons -->
					<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					<a class="next" onclick="plusSlides(1)">&#10095;</a>

					<!-- Image text 
					<div class="caption-container">
						<p id="caption"></p>
					</div>
					-->

					<!-- Thumbnail images -->
					<div class="row">
					<?php 
						for($i=0; $i < $count; $i++) {
							$curr_slide = $i + 1;
							echo '
							<div class="column">
								<img class="demo cursor" src="'.$thumbs[$i].'" style="width:100%" onclick="currentSlide('.$curr_slide.')" alt="The Woods">
							</div>
							';
						}
					?>
					</div>
				</div>
			</div>
			<script>
				var slideIndex = 1;
				showSlides(slideIndex);

				// Next/previous controls
				function plusSlides(n) {
					showSlides(slideIndex += n);
				}

				// Thumbnail image controls
				function currentSlide(n) {
					showSlides(slideIndex = n);
				}

				function showSlides(n) {
					var i;
					var slides = document.getElementsByClassName("mySlides");
					var captionText = document.getElementById("caption");
					if (n > slides.length) {slideIndex = 1}
					if (n < 1) {slideIndex = slides.length}
					for (i = 0; i < slides.length; i++) {
						slides[i].style.display = "none";
					}
					var active = slideIndex - 1;
					var thumbs = document.getElementsByClassName("demo");
					var columns = document.getElementsByClassName("column");
					var numThumbs = thumbs.length;
					var showThumbs = 6;
					var start;
					if (active <= 3) { start = 0; }
					if ((active > 3) && (active < (numThumbs - 3))) { start = active - 3; }
					if (active >= (numThumbs - 3)) { start = numThumbs - showThumbs; }
					console.log('active= ' + active + ' | start= ' + start);
					for (i = 0; i < thumbs.length; i++) {
						thumbs[i].className = thumbs[i].className.replace(" active", "");
						thumbs[i].style.display = "none"; 
						columns[i].style.display = "none"; 
					}
					for (i = start; i < start + showThumbs; i++) {
						thumbs[i].style.display = "block"; 
						columns[i].style.display = "inline-block"; 
					}
					slides[active].style.display = "block";
					thumbs[active].className += " active";
					// captionText.innerHTML = thumbs[slideIndex-1].alt;
				}
			</script>
		</div>
<?php
	include('footer_new.php')
?>
