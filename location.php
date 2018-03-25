<?php
	include('header_new.php');
?>
	<script>$('.nav_table ul a:eq(4)').addClass("active")</script>
		<div id="main_content">
			<div id="featured">
				<div id="location_info">
					<p class="address address_data">
						<a class="link_to_map" href="https://www.google.com/maps/place/23+New+Haven+Ave,+Milford,+CT+06460" target="_new">
							<img class="pin_img" ="Click Pin to open in Google Maps" src="http://maps.google.com/mapfiles/ms/micons/red-dot.png" />
						</a>
						23 New Haven Ave., Milford, CT 06460
					</p>
					<div class="sep address_data"></div>
					<span class="address_data"><a href="https://www.google.com/maps/place/23+New+Haven+Ave,+Milford,+CT+06460" target="_new" > Driving Directions</a> (Opens in a new window)</span>
					<p class="address_data">Our location offers ample parking in downtown Milford. Just pull into the SBC Restaurant parking lot, and you'll see our store in the back.</p>
				</div>
				
				
				
					<!-- <div id="floating-panel">
						<b>Start: </b>
						<input id="start" type="text">
						<input id="pac-input" type="submit">
					</div>
					-->
				<div class="pac-card" id="pac-card">
					<div id="pac-container">
						<input id="pac-input" type="text" placeholder="Enter a location">
					</div>
				</div>
				<div id="right-panel"></div> <!-- new -->
				<div id="map"></div>
				<div id="infowindow-content">
					<img src="" width="16" height="16" id="place-icon">
					<span id="place-name"  class="title"></span><br>
					<span id="place-address"></span>
				</div>
			
			
				
				<script>
					var screenWidth = (window.innerWidth > 0) ? window.innerWidth : screen.width;
					function initMap() {
						var directionsService = new google.maps.DirectionsService;
						var directionsDisplay = new google.maps.DirectionsRenderer;
						var uluru = {lat: 41.222110, lng: -73.055670};
						var mapObj;
						var stdMapObj = {
							zoom: 14,
							center: uluru,
							mapTypeControl: true,
							mapTypeControlOptions: {
								position: google.maps.ControlPosition.TOP_RIGHT
							}
						};
						var mobileMapObj = {
							zoom: 14,
							center: uluru,
							mapTypeControl: false,
						};
						if (screenWidth < 630) {
							mapObj = mobileMapObj;
						}
						else {
							mapObj = stdMapObj;
						}
						var map = new google.maps.Map(document.getElementById('map'), mapObj);
						var marker_img = "/images/marker-icon.png"
						var marker = new google.maps.Marker({
							position: uluru,
							map: map,
							title:'Vincent Jewelers',
							icon: marker_img
						});
						directionsDisplay.setMap(map);
						var control = document.getElementById('pac-card');
						var card = document.getElementById('pac-card');
						var input = document.getElementById('pac-input');
						var panel = document.getElementById('right-panel');
						directionsDisplay.setPanel(panel);
						control.style.display = 'block';
						map.controls[google.maps.ControlPosition.TOP_LEFT].push(control);
						
						
						var autocomplete = new google.maps.places.Autocomplete(input);
						autocomplete.bindTo('bounds', map);

						var infowindow = new google.maps.InfoWindow();
						var infowindowContent = document.getElementById('infowindow-content');
						infowindow.setContent(infowindowContent);

						autocomplete.addListener('place_changed', function() {
							infowindow.close();
							marker.setVisible(false);
							var place = autocomplete.getPlace();
							if (!place.geometry) {
								// User entered the name of a Place that was not suggested and
								// pressed the Enter key, or the Place Details request failed.
								window.alert("No details available for input: '" + place.name + "'");
								return;
							}
							var address = '';
							if (place.address_components) {
								address = [
								(place.address_components[0] && place.address_components[0].short_name || ''),
								(place.address_components[1] && place.address_components[1].short_name || ''),
								(place.address_components[2] && place.address_components[2].short_name || '')
								].join(' ');
							}

							infowindowContent.children['place-icon'].src = place.icon;
							infowindowContent.children['place-name'].textContent = place.name;
							infowindowContent.children['place-address'].textContent = address;
							onChangeHandler(address);
						});				
						var onChangeHandler = function(address) {
							calculateAndDisplayRoute(directionsService, directionsDisplay, marker, map, address);
						};
					}
					
					function calculateAndDisplayRoute(directionsService, directionsDisplay, marker, map, address) {
						var start = document.getElementById('pac-input').value;
						if (start == '') {
							return ;
						}
						marker.setMap(null);
						directionsService.route({
							// origin: start,
							origin: address,
							destination: '23 New Haven Avenue, Milford, CT 06460',
							travelMode: 'DRIVING'
							}, 
							function(response, status) {
								if (status === 'OK') {
									var mapPanel = document.getElementById('map');
									var directionsPanel = document.getElementById('right-panel');
									var acInput = document.getElementById('pac-card');
									if (screenWidth < 630) {
										// mapPanel.style.float = 'left';
										// mapPanel.style.width = '50%';
										// directionsPanel.style.float = 'right';
										// directionsPanel.style.width = '50%';
										// directionsPanel.style.height = '400px';
										directionsPanel.style.backgroundColor = 'inherit';
										directionsPanel.style.overflow = 'auto';
										// acInput.style.width = '70%';
										directionsDisplay.setDirections(response);
									}
									else {
										mapPanel.style.float = 'left';
										mapPanel.style.width = '50%';
										directionsPanel.style.float = 'right';
										directionsPanel.style.width = '50%';
										directionsPanel.style.height = '400px';
										directionsPanel.style.backgroundColor = 'inherit';
										directionsPanel.style.overflow = 'auto';
										acInput.style.width = '70%';
										directionsDisplay.setDirections(response);
									}
								}
								else {
									window.alert('Directions request failed due to ' + status);
								}
							}
						);
					}
				</script>
				<script async defer
					src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTB9oSKhuoxjwtl8kGANJyaUfJcZtQTvk&callback=initMap&libraries=places">
				</script>
			</div>
		</div>
<?php
	include('footer_new.php')
?>