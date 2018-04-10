<?php
	include('header_new.php');
?>
	<script>$('.nav_table ul a:eq(1)').addClass("active")</script>
		<div id="main_content">
			<div id="featured">
				<h2>Our Jewelery</h2>
				<div id="myBtnContainer">
					<button class="btn active" onclick="filterSelection('all')"> Show all</button>
					<button class="btn" onclick="filterSelection('nature')"> Original Designs</button>
					<button class="btn" onclick="filterSelection('cars')"> Test 1</button>
					<button class="btn" onclick="filterSelection('people')"> Test 2</button>
				</div>
				
				<!-- Portfolio Gallery Grid -->
				<div class="row">
				  <div class="column nature">
					<div class="content">
					  <img src="/w3images/mountains.jpg" alt="Mountains" style="width:100%">
					  <h4>Mountains</h4>
					  <p>Lorem ipsum dolor..</p>
					</div>
				  </div>
				  <div class="column nature">
					<div class="content">
					  <img src="/w3images/lights.jpg" alt="Lights" style="width:100%">
					  <h4>Lights</h4>
					  <p>Lorem ipsum dolor..</p>
					</div>
				  </div>
				  <div class="column nature">
					<div class="content">
					  <img src="/w3images/nature.jpg" alt="Nature" style="width:100%">
					  <h4>Forest</h4>
					  <p>Lorem ipsum dolor..</p>
					</div>
				  </div>

				  <div class="column cars">
					<div class="content">
					  <img src="/w3images/cars1.jpg" alt="Car" style="width:100%">
					  <h4>Retro</h4>
					  <p>Lorem ipsum dolor..</p>
					</div>
				  </div>
				  <div class="column cars">
					<div class="content">
					  <img src="/w3images/cars2.jpg" alt="Car" style="width:100%">
					  <h4>Fast</h4>
					  <p>Lorem ipsum dolor..</p>
					</div>
				  </div>
				  <div class="column cars">
					<div class="content">
					  <img src="/w3images/cars3.jpg" alt="Car" style="width:100%">
					  <h4>Classic</h4>
					  <p>Lorem ipsum dolor..</p>
					</div>
				  </div>

				  <div class="column people">
					<div class="content">
					  <img src="/w3images/people1.jpg" alt="People" style="width:100%">
					  <h4>Girl</h4>
					  <p>Lorem ipsum dolor..</p>
					</div>
				  </div>
				  <div class="column people">
					<div class="content">
					  <img src="/w3images/people2.jpg" alt="People" style="width:100%">
					  <h4>Man</h4>
					  <p>Lorem ipsum dolor..</p>
					</div>
				  </div>
				  <div class="column people">
					<div class="content">
					  <img src="/w3images/people3.jpg" alt="People" style="width:100%">
					  <h4>Woman</h4>
					  <p>Lorem ipsum dolor..</p>
					</div>
				  </div>
				<!-- END GRID -->
				</div>
			</div>
		</div>
<?php
	include('footer_new.php')
?>
