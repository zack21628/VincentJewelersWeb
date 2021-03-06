<?php
	include('header_new.php');
?>
	<script>$('.nav_table ul a:eq(1)').addClass("active")</script>
		<div id="main_content">
			<div id="featured">
				<div class="slider_wrapper">
					<ul id="imageGallery">
						<li data-thumb="images/featured/thumbs/fiftyA_T.jpg" data-src="images/featured/fiftyA_S.jpg">
							<img src="images/featured/fiftyA_S.jpg" />
						</li>
						<li data-thumb="images/featured/thumbs/sixtyAb_T.jpg" data-src="images/featured/sixtyAb_S.jpg">
							<img src="images/featured/sixtyAb_S.jpg" />
						</li>
						<li data-thumb="images/featured/thumbs/fortysevenA_T.jpg" data-src="images/featured/fortysevenA_S.jpg">
							<img src="images/featured/fortysevenA_S.jpg" />
						</li>
						<li data-thumb="images/featured/thumbs/sixtyoneA_T.jpg" data-src="images/featured/sixtyoneA_Sa.jpg">
							<img src="images/featured/sixtyoneA_Sa.jpg" />
						</li>
						<li data-thumb="images/featured/thumbs/eighteenA_T.jpg" data-src="images/featured/eighteenA_S.jpg">
							<img src="images/featured/eighteenA_S.jpg" />
						</li>
						<li data-thumb="images/featured/thumbs/elevenA_T.jpg" data-src="images/featured/elevenA_S.jpg">
							<img src="images/featured/elevenA_S.jpg" />
						</li>
						<li data-thumb="images/featured/thumbs/seventeenA_T.jpg" data-src="images/featured/seventeenA_S.jpg">
							<img src="images/featured/seventeenA_S.jpg" />
						</li>
						<li data-thumb="images/featured/thumbs/thirtyA_T.jpg" data-src="images/featured/thirtyA_S.jpg">
							<img src="images/featured/thirtyA_S.jpg" />
						</li>
						<li data-thumb="images/featured/thumbs/seventyfiveA_T.jpg" data-src="images/featured/seventyfiveA_S.jpg">
							<img src="images/featured/seventyfiveA_S.jpg" />
						</li>
						<li data-thumb="images/featured/thumbs/twentythreeA_T.jpg" data-src="images/featured/twentythreeA_S.jpg">
							<img src="images/featured/twentythreeA_S.jpg" />
						</li>
						<li data-thumb="images/featured/thumbs/thirteenA_T.jpg" data-src="images/featured/thirteenA_S.jpg">
							<img src="images/featured/thirteenA_S.jpg" />
						</li>
						<li data-thumb="images/featured/thumbs/nineA_T.jpg" data-src="images/featured/nineA_S.jpg">
							<img src="images/featured/nineA_S.jpg" />
						</li>
					</ul>
			</div>
			<script>
				$(document).ready(function() {
					$('#imageGallery').lightSlider({
						gallery:true,
						adaptiveHeight: false,
						item:1,
						loop:true,
						thumbItem:9,
						slideMargin:0,
						enableDrag: false,
						currentPagerPosition:'left',
						onSliderLoad: function(el) {
							el.lightGallery({
								selector: '#imageGallery .lslide'
							});
						}   
					});  
				});
			</script>
			
			<!--
				<div id="main_img_container"><img id="main_img" /></div>
				<div id="featured_slide">
					<div class="img_container"><img class="featured_item" src="../images/seventyA_T.jpg" /></div>
					<div class="img_container"><img class="featured_item" src="../images/sixtysevenA_T.jpg" /></div>
					<div class="img_container"><img class="featured_item" src="../images/fiftynineA_T.jpg" /></div>
					<div class="img_container"><img class="featured_item" src="../images/sixtyAb_T.jpg" /></div>
					<div class="img_container"><img class="featured_item" src="../images/sixtyoneA_T.jpg" /></div>
				</div>
				<div id="slide_controls">
					<button class="slide_button slide_left" onclick="plusDivs(-1)">&#10094;</button>
					<button class="slide_button slide_right" onclick="plusDivs(1)">&#10095;</button>
				</div> 
				<script src="slideshow.js"></script>
			<!--
				<div id="innertube">
					<h1>Featured Items</h1>
					<table id="featured_items_table">
						<tr>
							<td class="expando2"><a><img class="expando3" src="../images/seventyA_T.jpg" /></a></td>
							<td class="expando2"><a><img class="expando3" src="../images/sixtysevenA_T.jpg" /></a></td>
							<td class="expando2"><a><img class="expando3" src="../images/fiftynineA_T.jpg" /></a></td>
							<td class="expando2"><a><img class="expando3" src="../images/sixtyAb_T.jpg" /></a></td>
							<td class="expando2"><a><img class="expando3" src="../images/sixtyoneA_T.jpg" /></a></td>
						</tr>
					</table>
					<div id="image_popup">
						<button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
						<button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
					</div> 
					
					<script src="slideshow.js"></script>
					
					<h2 class="h2s">Original Designs</h2>
					<p>I  make original designs in gold, silver, and platinum using a variety of  stones. My shop contains an extensive  collection of my creations, as well as marketplace and traditional favorites.  I have a wide variety of stones, and assure you that I have one that will fit any mounting and budget.  I specialize in contemporary design, but I keep  an eye towards the classic and traditional themes. I consider all motifs, and make  use of geometric, figurative, and abstract shapes to create simple yet  exquisite adornments. 					</p>
					<p>In my original designs I use both the traditional and the more uncommon stones. I also use a variety of shapes and forms, from geometric through figurative to abstract. On the far left a pendant with Dendritic Drusy Quartz is set in silver with 14 kt gold accents. It employs a geometric shape that suggests an organic one, with the coloration in the stone to emphasize that mimicry.  The jasper heart on the right is more direct, but also uses the natural features to augment the shape.
					The center piece is a drusy chrysocolla pendant.  The rare combination of Chrysocolla and Dioptase are arranged in a 24 kt gold setting. An original design, the uncommon stones and the abstract shape feature intriguing deep rich colors that invite attention. This pendant is destined to attain heirloom status and will be a much admired for years to come.	Coincidently these stones were obtained from a renowned collector and agent in minerals and gemstones.</p>
					<table width="196" border="0" cellspacing="20" cellpadding="10" align="center" bgcolor="white">
						<tr>
							<td><a href="javascript:OpenNewWindow('../files/One.html')"><img class="expando" src="../images/OneA_T.jpg" height="100" /></a>
							</td>
							<td><a href="javascript:OpenNewWindow('../files/four.html')"><img class="expando" src="../images/fourA_T.jpg" height="100" /></a>
							</td>
							<td><a href="javascript:OpenNewWindow('../files/sixtyfour.html')"><img class="expando" src="../images/sixtyfourA_T.jpg" height="100" /></a>
							</td>
							<td><a href="javascript:OpenNewWindow('../files/fiftyeight.html')"><img class="expando" src="../images/fiftyeightA_T.jpg" height="100" /></a>
							</td>
							<td><a href="javascript:OpenNewWindow('../files/sixtynine.html')"><img class="expando" src="../images/sixtynineA_T.jpg" height="100" /></a>
							</td>
							<td><a href="javascript:OpenNewWindow('../files/sixtyfive.html')"><img class="expando" src="../images/sixtyfiveA_T.jpg" height="100" /></a>
							</td>
							<td><a href="javascript:OpenNewWindow('../files/fiftyseven.html')"><img class="expando" src="../images/fiftysevenA_T.jpg" height="100" /></a>
							</td>
							<td><a href="javascript:OpenNewWindow('../files/sixtythree.html')"><img class="expando" src="../images/sixtythreeA_T.jpg" height="100" /></a>
							</td>
						</tr>
					</table>
					<h2 class="h2s">Jewelry is more than Diamonds</h2>
					<p>The  unconventional stone may represent a better experience  and value. Sapphires, rubies, emeralds, pearls, and diamonds are timeless, but  there is a realm of gems beyond them. Explore this page to see a variety of  gems  in equally diverse selection of mountings. My favorite – preferred stones are jaspers and  agates from the four corners. In the pictures on this site you will see many  original designs featuring every color and shape. I have many loose stones that  are available for your custom piece.</p>
					<p>These pieces are all original designs using less common stones. Priday Plume Jasper on the far right is in sterling silver. Next to it a boulder opal, then a dendritic chrysopase with an accent peridot set in 14 kt gold. The teardrop tourmaline rose quartz, lime-colored chrysopase, and a jadeite jade</p>
					<table width="196" border="0" cellspacing="20" cellpadding="10" align="center" bgcolor="white">
						<tr>
							<td><a href="javascript:OpenNewWindow('../files/sixtyeight.html')"><img class="expando" src="../images/sixtyeightA_T.jpg" height="100" /></a>
							</td>
							<td><a href="javascript:OpenNewWindow('../files/eight.html')"><img class="expando" src="../images/eightA_T.jpg" height="100" /></a>
							</td>
							<td><a href="javascript:OpenNewWindow('../files/fortynine.html')"><img class="expando" src="../images/fortynineA_T.jpg" height="100" /></a>
							</td>
							<td><a href="javascript:OpenNewWindow('../files/seventyfour.html')"><img class="expando" src="../images/seventyfourA_T.jpg" height="100" /></a>
							</td>
							<td><a href="javascript:OpenNewWindow('../files/fortyeight.html')"><img class="expando" src="../images/fortyeightA_T.jpg" height="100" /></a>
							</td>
							<td><a href="javascript:OpenNewWindow('../files/seventytwo.html')"><img class="expando" src="../images/seventytwoA_T.jpg" height="100" /></a>
							</td>
							<td><a href="javascript:OpenNewWindow('../files/five.html')"><img class="expando" src="../images/fiveA_T.jpg" height="100" /></a>
							</td>
							<td><a href="javascript:OpenNewWindow('../files/fiftysix.html')"><img class="expando" src="../images/fiftysixA_S.jpg" height="100" /></a>
							</td>
					  </tr>
					</table>
					<h2 class="h2s">Custom Work</h2>
					<p>Custom designs begin with selection of the feature stone. There is more than type and color, the size and shape are determined by the cut. A stone may assume a natural shape and polished to brighten its appearance; or it may be cut into <a href="http://en.wikipedia.org/wiki/Cabochon" title="cabochon" target="_blank">cabochon</a> shapes.  I search for stones with natural color and luster, and inform you if a gem has been treated to enhance its appearance.  Custom pieces can feature the traditional such as turquoise, or something unexpected such as rutilated quartz.</p>
					<table width="196" border="0" cellspacing="20" cellpadding="10" align="center" bgcolor="white">
						<tr>
							<td><a href="javascript:OpenNewWindow('../files/Three.html')"><img src="../images/ThreeA_T.jpg" alt="" height="100" class="expando" /></a></td>
							<td><a href="javascript:OpenNewWindow('../files/twelve.html')"><img src="../images/twelveA_T.jpg" alt="" height="100" class="expando" /></a></td>
							<td><a href="javascript:OpenNewWindow('../files/twentysix.html')"><img src="../images/twentysixA_T.jpg" alt="" height="100" class="expando" /></a></td>
							<td><a href="javascript:OpenNewWindow('../files/twenty.html')"><img src="../images/twentyA_T.jpg" alt="" height="100" class="expando" /></a></td>
							<td><a href="javascript:OpenNewWindow('../files/thirty.html')"><img src="../images/thirtyA_T.jpg" alt="" height="100" class="expando" /></a></td>
						</tr>
					</table>
					<h2 class="h2s">Pearls</h2>
					<p>Pearls and diamonds are classic stones and always a fine addition to any collection.  These pieces incorporate contemporary and classic design. On the left is a pendant from another jeweler, Paul Kaiser, better known as Cowboy.  Two Akoya pearls in 14 kt gold, it is a classic design from a present-day artisan. This piece will balance out the traditional formal wear or the current fashion.
					Tahitian and Keshi Pearl Necklace in the center and the South Seas Black and Grey Pearl Necklace on the right are another bow to the traditional. The pearls were treasured in the classic era; their natural luster was prized at a time when gems went unpolished. Golden pearls have a rich honey tint and highlight the pure whiteness of the Tahitian pearls. Black and grey pearls are a natural complement and match for a variety of clothing hues and textures, from white silk to royal blue velvet, these gems harmonize with any ensemble.</p>
					<table width="196" border="0" cellspacing="20" cellpadding="10" align="center" bgcolor="white">
						<tr>
							<td><a href="javascript:OpenNewWindow('../files/twentythree.html')"><img src="../images/twentythreeA_T.jpg" alt="" height="100" class="expando" /></a></td>
							<td><a href="javascript:OpenNewWindow('../files/eighteen.html')"><img src="../images/eighteenA_T.jpg" alt="" height="100" class="expando" /></a></td>
							<td><a href="javascript:OpenNewWindow('../files/ten.html')"><img src="../images/tenA_T.jpg" alt="" height="100" class="expando" /></a></td>
							<td><a href="javascript:OpenNewWindow('../files/fifteen.html')"><img src="../images/fifteenA_T.jpg" alt="" height="100" class="expando" /></a></td>
							<td><a href="javascript:OpenNewWindow('../files/nine.html')"><img src="../images/nineA_T.jpg" alt="" height="100" class="expando" /></a></td>
						</tr>
					</table>
					<h2 class="h2s">Marketplace Mountings and Recovered Stones</h2>
					<p>In this series, The center image is a ring with Ceylon sapphires and diamonds.  The sapphires were recovered from a Modern Art piece and are truly magnificent gems.  Untreated and equisitely cut this ring displays the enduring beauty and value of heirloom quality jewelry.</p>
					<p>Although these rings are commercial mountings, the stones were selected for their fire and brilliance.  The tourmaline on the right center represents a [tremendous value]. Set in a sterling silver mount. A fine quality tourmaline in a classic design, this piece is a demonstration of the belief that the right stone in the right mount need not cost $500.</p>
					<table width="196" border="0" cellspacing="20" cellpadding="10" align="center" bgcolor="white">
						<tr>
							<td><a href="javascript:OpenNewWindow('../files/seventythree.html')"><img src="../images/seventythreeA_T.jpg" alt="" height="100" class="expando" /></a></td>
							<td><a href="javascript:OpenNewWindow('../files/eleven.html')"><img src="../images/elevenA_T.jpg" alt="" height="100" class="expando" /></a></td>
							<td><a href="javascript:OpenNewWindow('../files/nineteen.html')"><img src="../images/nineteenA_T.jpg" alt="" height="100" class="expando" /></a></td>
							<td><a href="javascript:OpenNewWindow('../files/seventeen.html')"><img src="../images/seventeenA_T.jpg" alt="" height="100" class="expando" /></a></td>
							<td><a href="javascript:OpenNewWindow('../files/seventyfive.html')"><img src="../images/seventyfiveA_T.jpg" alt="" height="100" class="expando" /></a></td>
						</tr>
					</table>
					<h2 class="h2s">Original and traditional designs</h2>
					<p>on the left is a traditional design, in ruby and diamond. The Fire Agate is a rare find of high quality. The center image is a ring with gold in quartz, a mimic of pearl.  The Jadeite jade ring is an exquisite cabochon cut in a 14 kt mount. The last one is a sapphire and and diamonds	ring	in	18 kt gold. It is a 5 mm very fine quality sapphire surrounded by 30 points TW diamonds. </p>
				</div>	
				-->
			</div>
		</div>
<?php
	include('footer_new.php')
?>
