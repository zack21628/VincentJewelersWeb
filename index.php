<?php
	include('header_new.php');
?>
	<script>$('.nav_table ul a:eq(0)').addClass("active")</script>
		<div id="main_content">
			<div id="home-slider" class="slideshow-container">
				<div class="mySlides fade">
					<div class="numbertext">1 / 3</div>
					<img src="/images/storefrontwide.jpg" class="home-slider-img">
					<div class="text">Caption Text</div>
				</div>
				<div class="mySlides fade">
					<div class="numbertext">2 / 3</div>
					<img src="img2.jpg" style="width:100%">
					<div class="text">Caption Two</div>
				</div>
				<div class="mySlides fade">
					<div class="numbertext">3 / 3</div>
					<img src="img3.jpg" style="width:100%">
					<div class="text">Caption Three</div>
				</div>
				<!-- Next and previous buttons -->
				<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				<a class="next" onclick="plusSlides(1)">&#10095;</a>
			</div>
			<!-- The dots/circles -->
			<div id="dots-box" style="text-align:center">
				<span class="dot" onclick="currentSlide(1)"></span> 
				<span class="dot" onclick="currentSlide(2)"></span> 
				<span class="dot" onclick="currentSlide(3)"></span> 
			</div>
			<div id="featured">
				<!-- <h2 style="font-size:36px">Vincent Jewelers</h2> -->
				<!-- <img class="store-front" src="images/storefront.jpg"></img> -->
				<p>I make these designs in gold, silver, and platinum using a variety of stones. My shop contains an extensive collection of my creations, as well as marketplace and traditional favorites. I have a wide variety of stones, and assure you that I have a stone or gem that will fit any mounting and budget. Although I specialize in contemporary design, I keep an eye towards the classic and traditional themes. I consider all motifs, and make use of geometric, figurative, and abstract shapes to create simple yet exquisite adornments.</p>
				<p>It is the original designs and custom work are what set the independent owner operators apart from the chain and franchise jewelry stores. The attention and service you will receive from me will be far above any effort made by commissioned sales employees. We both want to sell you something; however, I want you to come back, while they rely upon volume of customers. A mall store is not concerned about developing a relationship with the customer, they rely on volume, through foot traffic and television advertising. Independent stores need word of mouth and repeat customers. The goal is a personalized service that exceeds the mall experience.</p>
				<input id="view_btn" type="button" value="See Our Jewely" onClick="parent.location='featured.php'"/>
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
				var dots = document.getElementsByClassName("dot");
				if (n > slides.length) {slideIndex = 1} 
				if (n < 1) {slideIndex = slides.length}
				for (i = 0; i < slides.length; i++) {
					slides[i].style.display = "none"; 
				}
				for (i = 0; i < dots.length; i++) {
					dots[i].className = dots[i].className.replace(" active", "");
				}
				slides[slideIndex-1].style.display = "block"; 
				dots[slideIndex-1].className += " active";
			}
		</script>
<?php
	include('footer_new.php');
?>
