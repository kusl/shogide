<?php include 'header-runaway.php';?>

<div class="container">

	<hr>

	<div id="page-top" class="row" style="margin-top:80px;">
		<div class="col-sm-6"> 	<!-- read more requires bookmrk.js file -->
			<div class="bookmrk">
				<span style="font-size: 14px; color:orange; text-align: left;">For Android:</span>
				<br><span style="font-size: 12px; text-align: left;">Go to menu (top right)
					<br> Click Add to Homescreen
					<br>
					<span style="font-size: 14px; color:orange; text-align: left;">For iPhone:</span>
					<br><span style="font-size: 12px; text-align: left;">Go to Safari and scroll to lower menu
						<br>Click the share icon (the box with arrow at top) <br>Click Add to Homescreen
					</span>
					<br>
					<a onClick="window.location.reload()"><span style="color: blue; font-size:14px;">close</span></a>
				</div>
			</div>
			<div class="col-sm-6"> 	<!-- read more requires bookmrk.js file -->
				<div class="showtopbox">
					<p><a href="./social/index.php">Register or Log in to Live Posts</a></p>
					</div>
				</div>
		</div>

	<div class="row" style="margin-top:40px; font-size:20px;">

		<!-- <div class="col-sm-3 bookmrk">
					<span style="font-size: 14px; color:orange; text-align: left;">For Android:</span>
					<br><span style="font-size: 12px; text-align: left;">Go to menu (top right)
					<br> Click Add to Homescreen
          <br>
					<span style="font-size: 14px; color:orange; text-align: left;">For iPhone:</span>
					<br><span style="font-size: 12px; text-align: left;">Go to Safari and scroll to lower menu
					<br>Click the share icon (the box with arrow at top) <br>Click Add to Homescreen
					</span>
					<br>
					<a onClick="window.location.reload()"><span style="color: blue; font-size:14px;">close</span></a>
				</div> -->

		<div class="col-sm-3">
			<h4 class="showtopbox"><center><a href="http://www.runawaycountry.net/" target="_blank">Official Website</a></center></h4>
		</div>
		<div class="col-sm-3">
			<h4 class="showtopbox"><center><a href="http://www.runawaycountry.net/faq/" target="_blank">Event FAQ</a></center></h4>
		</div>
		<div class="col-sm-3">
			<h4 class="showtopbox"><center><a href="https://www.festivalticketing.com/boxoffice/?cref=42AB42B6-C8CF-4661-95C8-EE6D44682E62" target="_blank">Purchase Tickets</a></center></h4>
			</div>
			<div class="col-sm-3">
				<h4 class="showtopbox"><center><a href="runaway.php#posts">Live Posts</a></center></h4>
			</div>
		</div>

		<hr>


	<span class="anchor" id="maps"></span> <!-- so links to id arent hidden by fixed header -->

	<div class="row">
		<div class="col-sm-12">
			<div class="center">
				<h4>Event Maps</h4>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-12">
			<img class="img-responsive center-block" src="images/runaway-map-1280-800.png" alt="runaway map">
		</div><!-- col-->
	</div><!-- row-->

	<hr>



	<div class="row">
		<div class="col-sm-12">
			<div class="center">
				<p>If live map does not appear below, please <a href="enable.php">enable location sharing</a> in your browser.</p>
			</div>
		</div>
	</div>

</div><!-- container-->


<div id="map">
	<script>
	function initMap() {
		if (navigator.geolocation) { // prompts user for location access
			navigator.geolocation.getCurrentPosition(function(position) {
				var lat = position.coords.latitude;
				var long = position.coords.longitude;
				var userLocation = { lat: lat, lng: long}
				var map = new google.maps.Map(document.getElementById('map'), {
					zoom: 19,
					center: userLocation
				});
				// user Location marker
				var marker = new google.maps.Marker({
					position: userLocation,
					map: map,
					title: "You are here",
					icon: 'bluedot.png'
				});
				// generic marker
				var timeSquare = { lat: 40.758896, lng: -73.985130}
				var marker = new google.maps.Marker({
					position: timeSquare,
					map: map,
					label: "Times Square"
				})
				var mainstage = { lat: 40.774004, lng: -73.091912}
				var marker = new google.maps.Marker({
					position: mainstage,
					map: map,
					label: "Main Stage"
				})
				var food = { lat: 40.773667, lng: -73.092939}
				var marker = new google.maps.Marker({
					position: food,
					map: map,
					label: "Food Vendors"
				})
				var beergarden = { lat: 40.773893, lng: -73.092216}
				var marker = new google.maps.Marker({
					position: beergarden,
					map: map,
					label: "Beer Garden"
				})

				var parking = { lat: 40.773458, lng: -73.092724}
				var marker = new google.maps.Marker({
					position: parking,
					map: map,
					label: "Main Parking Lot"
				})
				var parking = { lat: 39.685991, lng: -75.742113}
				var marker = new google.maps.Marker({
					position: parking,
					map: map,
					label: "I love you Ally!!!"
				})
				var parking = { lat: 35.0498375, lng: -80.8161458}
				var marker = new google.maps.Marker({
					position: parking,
					map: map,
					label: "Johnny!!! Main Stage"
				})

				var parking = { lat: 39.255981, lng: -96.587292}
				var marker = new google.maps.Marker({
					position: parking,
					map: map,
					label: "Country Stampede - Main Stage"
				})
				39.256058, -96.585179

				var parking = { lat: 39.256058, lng: -96.585179}
				var marker = new google.maps.Marker({
					position: parking,
					map: map,
					label: "Food Vendors"
				})

				var parking = { lat: 39.257395, lng: -96.580007}
				var marker = new google.maps.Marker({
					position: parking,
					map: map,
					label: "Camper Check In"
				})

				var parking = { lat: 39.254641, lng: -96.583117}
				var marker = new google.maps.Marker({
					position: parking,
					map: map,
					label: "Vendor Parking"
				})

				var parking = { lat: 26.257740, lng: -80.081681}
				var marker = new google.maps.Marker({
					position: parking,
					map: map,
					label: "TOMBOY!!!!!!"
				})


			});
		} else {
			x.innerHtml = "Geolocation is not supported by this browser.";
		}
	}
	</script>
</div>

<script async defer
src="https://maps.googleapis.com/maps/api/js?key= AIzaSyAuVDysg_OKNaxuLvC0HQt496YVfI8OvvQ&callback=initMap">
</script>

<hr>

<span class="anchor" id="schedule"></span> <!-- so links to id arent hidden by fixed header -->


<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
<div class="container">
	<div class="row">
		<div class="col-sm-12 maprow">
			<div class="center">
				<h4>MUSIC and ACTIVITY Schedule</h4>
			</div>
		</div>
	</div>
</div><!-- container -->


<div class="table-responsive" style="margin:0px;">
	<table class="table" id="myTable" >

		<tr style="text-align:center">
			<!--When a header is clicked, run the sortTable function, with a parameter, 0 for sorting by names, 1 for sorting by date:-->
			<!-- requires 2 js files-->
			<th style="text-align:center" class="sortable asc" onclick="sortTable(0)">What</th>
			<th style="text-align:center" class="sortable" onclick="sortTable(1)">When</th>
			<th style="text-align:center" class="sortable" onclick="sortTable(1)">Where</th>
		</tr>

		<tr>
			<td><a style="color:red;" href="#maps">Nine Inch Nails</a></td>
			<td>Sat 1pm</td>
			<td>Stage 1</td>
		</tr>

		<tr>
			<td>A Perfect Circle</td>
			<td>Sat 2pm</td>
			<td>Stage 2</td>
		</tr>

		<tr>
			<td>Run The Jewels</td>
			<td>Sat 3pm</td>
			<td>Stage 3</td>
		</tr>

		<tr>
			<td>The Who</td>
			<td>Sat 4pm</td>
			<td>Stage 5</td>
		</tr>

	</table>
</div> <!-- closes div above table -->


<script type="text/javascript">
function sortTable(n) {
	var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
	table = document.getElementById("myTable");
	switching = true;
	//Set the sorting direction to ascending:
	dir = "asc";
	/*Make a loop that will continue until
	no switching has been done:*/
	while (switching) {
		//start by saying: no switching is done:
		switching = false;
		rows = table.getElementsByTagName("TR");
		/*Loop through all table rows (except the
		first, which contains table headers):*/
		for (i = 1; i < (rows.length - 1); i++) {
			//start by saying there should be no switching:
			shouldSwitch = false;
			/*Get the two elements you want to compare,
			one from current row and one from the next:*/
			x = rows[i].getElementsByTagName("TD")[n];
			y = rows[i + 1].getElementsByTagName("TD")[n];
			/*check if the two rows should switch place,
			based on the direction, asc or desc:*/
			if (dir == "asc") {
				if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
					//if so, mark as a switch and break the loop:
					shouldSwitch= true;
					break;
				}
			} else if (dir == "desc") {
				if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
					//if so, mark as a switch and break the loop:
					shouldSwitch= true;
					break;
				}
			}
		}
		if (shouldSwitch) {
			/*If a switch has been marked, make the switch
			and mark that a switch has been done:*/
			rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
			switching = true;
			//Each time a switch is done, increase this count by 1:
			switchcount ++;
		} else {
			/*If no switching has been done AND the direction is "asc",
			set the direction to "desc" and run the while loop again.*/
			if (switchcount == 0 && dir == "asc") {
				dir = "desc";
				switching = true;
			}
		}
	}
}

</script>

<script type="text/javascript">
var $sortable = $('.sortable');

$sortable.on('click', function(){

  var $this = $(this);
  var asc = $this.hasClass('asc');
  var desc = $this.hasClass('desc');
  $sortable.removeClass('asc').removeClass('desc');
  if (desc || (!asc && !desc)) {
    $this.addClass('asc');
  } else {
    $this.addClass('desc');
  }
});
</script>
<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->

<hr>

<div class="container">

	<span class="anchor" id="artists"></span> <!-- so links to id arent hidden by fixed header -->
	<div class="row">
		<div class="col-sm-12 maprow">
			<div class="center">
				<h4>Artists</h4>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-4" style="padding-top: 3px">
			<div id="nine" class="event_box">
				<a href="runaway.php"><p>Nine Inch Nails</p>
					<p>Main Stage Sat 3pm</p>
					<img class="img-responsive center-block" src="images/bands/nine-inch-nails.jpg" alt="nine-inch-nails"></a>
					<div class="item">
						Nine Inch Nails (abbreviated as NIN and stylized as NIИ) is an American industrial rock band[1] founded in 1988 by Trent Reznor in Cleveland, Ohio. The band released two influential albums during the 1990s – The Downward Spiral (1994) and The Fragile (1999) – and has record sales exceeding over 20 million copies worldwide,[2] with 10 million sales certified in the United States alone.[3]
						Despite their success, the band has had several feuds with the corporate side of the recording industry. The first was their notable conflict with TVT Records regarding the band's first album, Pretty Hate Machine, which led Reznor to record his follow-up album in secrecy to avoid the label's influence. NIN signed to Interscope Records afterward, but after the release of their fifth studio album Year Zero in 2007, Reznor announced that the band would release future material independently[4]. The band signed with Columbia Records for the release of their eighth album Hesitation Marks (2013) but returned to self-releasing material with the second Nine Inch Nails EP, Not the Actual Events (2016).
						<br>
						<a onClick="window.location.reload()"><span style="color: blue;">....read less</span></a>
					</div>
					<br>
					<p><a href="http://aftershockconcert.com/tickets/">Order Band Merchandise</a></p>
				</div>
			</div><!-- col-->

			<div  class="col-sm-4" style="padding-top: 3px">
				<div id="foo" class="event_box">
					<a href="runaway.php"><p>Foo Fighters</p>
						<p>Main Stage Sat 3pm</p>
						<img class="img-responsive center-block" src="images/bands/foo-fighters.jpg" alt="louder than life"></a>
						<div class="item">
							Foo Fighters is an American rock band, formed in Seattle, Washington in 1994. It was founded by Nirvana drummer Dave Grohl as a one-man project following the dissolution of Nirvana after the death of Kurt Cobain. The group got its name from the UFOs and various aerial phenomena that were reported by Allied aircraft pilots in World War II, which were known collectively as "foo fighters".
							Prior to the release of Foo Fighters' 1995 debut album Foo Fighters, which featured Grohl as the only official member, Grohl recruited bassist Nate Mendel and drummer William Goldsmith, both formerly of Sunny Day Real Estate, as well as Nirvana touring guitarist Pat Smear to complete the lineup. The band began with performances in Portland, Oregon. Goldsmith quit during the recording of the group's second album, The Colour and the Shape (1997), when most of the drum parts were re-recorded by Grohl himself. Smear's departure followed soon afterward, though he would rejoin them in 2006. They were replaced by Taylor Hawkins and Franz Stahl, respectively, although Stahl was fired before the recording of the group's third album, There Is Nothing Left to Lose (1999). The band briefly continued as a trio until Chris Shiflett joined as the band's lead guitarist after the completion of There Is Nothing Left to Lose. The band released its fourth album, One by One, in 2002. The group followed that release with the two-disc In Your Honor (2005), which was split between acoustic songs and heavier material. Foo Fighters released its sixth album, Echoes, Silence, Patience & Grace, in 2007. The band's seventh studio album, Wasting Light, produced by Butch Vig was released in 2011, in which Smear returned as a full member. In November 2014, the band's eighth studio album, Sonic Highways, was released as an accompanying soundtrack to the Grohl-directed 2014 miniseries of the same name. On September 15, 2017, the band released their ninth studio album, Concrete and Gold, which became their second to reach #1 in the United States. Over the course of the band's career, four of its albums have won Grammy Awards for Best Rock Album. As of 2015, the band have sold 12 million copies in the U.S. alone.[3]
							<br>
							<a onClick="readless()"><span style="color: blue;">....read less</span></a>
						</div>
						<br>
						<p><a href="http://aftershockconcert.com/tickets/">Order Band Merchandise</a></p>
					</div>
				</div><!-- col-->

				<div class="col-sm-4" style="padding-top: 3px">
					<div class="event_box">
						<a href="runaway.php"><p>Coldplay</p>
							<p>Main Stage Sat 3pm</p>
							<img class="img-responsive center-block" src="images/bands/coldplay.jpg" alt="nine-inch-nails"></a>
							<div class="item">
								Coldplay are a British rock band formed in 1996 by lead vocalist and keyboardist Chris Martin and lead guitarist Jonny Buckland at University College London (UCL).[5] After they formed under the name Pectoralz, Guy Berryman joined the group as bassist and they changed their name to Starfish.[6] Will Champion joined as drummer and backing vocalist, completing the lineup. Creative director Phil Harvey is often referred to as the fifth member by the band.[7] The band renamed themselves "Coldplay" in 1998,[8] before recording and releasing three EPs: Safety in 1998 and Brothers & Sisters and The Blue Room in 1999. The Blue Room was their first release on a major label, after signing to Parlophone.[9] Coldplay achieved worldwide fame with the release of the single "Yellow" in 2000, followed in the same year by their debut album Parachutes, which was nominated for the Mercury Prize. The band's second album, A Rush of Blood to the Head (2002), was released to critical acclaim and won awards including NME's Album of the Year. Their next release, X&Y, the bestselling album worldwide in 2005, received mostly positive reviews, though some critics felt it was inferior to its predecessor. Their fourth studio album, Viva la Vida or Death and All His Friends (2008), was produced by Brian Eno and released to largely positive reviews, earning several Grammy Award nominations and wins at the 51st Grammy Awards.[10] In October 2011, Coldplay released their fifth studio album, Mylo Xyloto, which topped the charts in over 34 countries and was the UK's best-selling rock album of 2011, but received mixed reviews.[11] In May 2014, they released their sixth album, Ghost Stories, which also received mixed reviews and topped several national album charts. In December 2015, the band released their seventh album, A Head Full of Dreams, which reached the top two in most major markets, but received generally mixed reviews. Coldplay have won 85 awards from 252 nominations throughout their career, including one American Music Awards,[12] nine Brit Awards, six MTV Video Music Awards, seven MTV Europe Music Awards and seven Grammy Awards from 32 nominations. They have sold more than 90 million records worldwide, making them one of the world's bestselling music artists.[13] In December 2009, Rolling Stone readers voted the group the fourth-best artist of the 2000s.[14] Coldplay have supported various social and political causes, such as Oxfam's Make Trade Fair campaign and Amnesty International. They have also performed at charity projects including Band Aid 20, Live 8, Global Citizen Festival, Sound Relief, Hope for Haiti Now: A Global Benefit for Earthquake Relief, One Love Manchester, The Secret Policeman's Ball, Sport Relief and the UK Teenage Cancer Trust.[15]
								<br>
								<a onClick="window.location.reload()"><span style="color: blue;">....read less</span></a>
							</div>
							<br>
							<p><a href="http://aftershockconcert.com/tickets/">Order Band Merchandise</a></p>
						</div>
					</div><!-- col-->
				</div><!-- row-->

				<hr>



				<!-- FOOD -->

				<span class="anchor" id="food"></span> <!-- so links to id arent hidden by fixed header -->
				<div class="row">
					<div class="col-sm-12 maprow">
						<div class="center">
							<h4>Food</h4>
						</div>
					</div>
				</div>

				<br>

					<div class="row">
						<div class="col-sm-4 foodrow" style="padding-top: 3px">
							<div class="event_box">
								<a href="runaway.php">
									<p>Johnny's Burgers</p>
									<img class="img-responsive center-block" src="images/runaway/hamburger.jpg" alt="hamburger"></a>
								</div>
							</div><!-- col-->

							<div class="col-sm-4 foodrow" style="padding-top: 3px">
								<div class="event_box">
									<a href="runaway.php">
										<p>Jimmy's Wings</p>
										<img class="img-responsive center-block" src="images/runaway/wings.jpg" alt="wings">
									</a>
								</div>
							</div><!-- col-->

							<div class="col-sm-4 foodrow" style="padding-top: 3px">
								<div class="event_box">
									<a href="show-sample.php">
										<p>Wendy's Wraps</p>
										<img class="img-responsive center-block" src="images/runaway/wraps.jpg" alt="food vendor image">
									</a>
								</div>
							</div><!-- col-->
						</div><!-- row-->


						<br>






						<!-- OFFERS -->


						<span class="anchor" id="offers"></span> <!-- so links to id arent hidden by fixed header -->

						<div class="row">
							<div class="col-sm-12 maprow">
								<div class="center">
									<h4>Event Day Offers</h4>
								</div>
							</div>
						</div>

						<div class="row" id="offers">
							<div class="col-sm-4" style="padding: 5px;">
								<div class="offer_box">
									<img class="img-responsive center-block" src="images/offers/t-shirts.png" alt="buffalo wild wings">
									<h3>Rock N Roll Wholesale</h3>
									<p>Buy 2 Shirts Get 1 Free</p>
									<a href="https://www.rock-n-roll-wholesale.com"><p>Click to Redeem</p></a>
								</div>
							</div><!-- col-->

							<div class="col-sm-4" style="padding: 5px;">
								<div class="offer_box">
									<img class="img-responsive center-block" src="images/offers/bw3.png" alt="buffalo wild wings">
									<h3 style="text-align: center">Buffalo Wild Wings</h3>
									<p>Get 20% off your bill</p>
									<a href="https://www.buffalowildwings.com/"><p>Click to Redeem</p></a>
								</div>
							</div><!-- col-->

							<div class="col-sm-4" style="padding: 5px;">
								<div class="offer_box">
									<img class="img-responsive center-block" src="images/offers/t-shirts.png" alt="buffalo wild wings">
									<h3>Rock N Roll Wholesale</h3>
									<p>Buy 2 Shirts Get 1 Free</p>
									<a href="https://www.rock-n-roll-wholesale.com"><p>Click to Redeem</p></a>
								</div>
							</div><!-- col-->
						</div><!-- row-->

						<div class="row">
							<div class="col-sm-4" style="padding: 5px;">
								<div class="offer_box">
									<img class="img-responsive center-block" src="images/offers/t-shirts.png" alt="buffalo wild wings">
									<h3>Rock N Roll Wholesale</h3>
									<p>Buy 2 Shirts Get 1 Free</p>
									<a href="https://www.rock-n-roll-wholesale.com"><p>Click to Redeem</p></a>
								</div>
							</div><!-- col-->

							<div class="col-sm-4" style="padding: 5px;">
								<div class="offer_box">
									<img class="img-responsive center-block" src="images/offers/bw3.png" alt="buffalo wild wings">
									<h3 style="text-align: center">Buffalo Wild Wings</h3>
									<p>Get 20% off your bill</p>
									<a href="https://www.buffalowildwings.com/"><p>Click to Redeem<p></a>
									</div>
								</div><!-- col-->

								<div class="col-sm-4" style="padding: 5px;">
									<div class="offer_box">
										<img class="img-responsive center-block" src="images/offers/t-shirts.png" alt="buffalo wild wings">
										<h3>Rock N Roll Wholesale</h3>
										<p>Buy 2 Shirts Get 1 Free</p>
										<a href="https://www.rock-n-roll-wholesale.com"><p>Click to Redeem</p></a>
									</div>
								</div><!-- col-->
							</div><!-- row-->


							<span class="anchor" id="posts"></span> <!-- so links to id arent hidden by fixed header -->

							<!-- <div class="row" style="margin-bottom:70px;">
								<div class="col-sm-12 maprow">
									<div class="center">
										<h4>View Post Comment - under construction</h4>
									</div>
								</div>
							</div> -->

						</div><!-- container-->


					<!-- <iframe src="./social" width="1000" height="500" style="margin-top:50px;"></iframe> -->


						<?php include 'footer.php';?>
