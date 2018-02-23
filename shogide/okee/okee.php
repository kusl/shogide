<?php include 'header-okee.php';?>

<div class="container">

	<hr>

	<div id="page-top" class="row" style="margin-top:80px;">
		<div class="col-sm-12"> 	<!-- read more requires bookmrk.js file -->
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
		</div>


		<div class="row" style="margin-top:2px; font-size:20px;">


			<!-- <span style="font-size: 14px; color:orange; text-align: left;">For Android:</span>
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

	<!-- <div class="bookmrk">
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
	<h4 class="showtopbox"><center><a href="https://okeechobeefest.com/" target="_blank">Official Website</a></center></h4>
</div>
<div class="col-sm-3">
	<h4 class="showtopbox"><center><a href="https://okeechobeefest.zendesk.com/hc/en-us" target="_blank">Event FAQ</a></center></h4>
</div>
<div class="col-sm-3">
	<h4 class="showtopbox"><center><a href="https://www.eventbrite.com/e/okeechobee-music-arts-festival-march-1-4-2018-tickets-36039316566?aff=omf2018loyaltyzendesk" target="_blank">Purchase Tickets</a></center></h4>
</div>
<div class="col-sm-3">
	<h4 class="showtopbox"><center><a href="./social/index.php">Live Posts</a></center></h4>
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
		<img class="img-responsive center-block" src="images/map.png" alt="okeechobee map">
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
				<a href="okee.php"><p>Nine Inch Nails</p>
					<p>Main Stage Sat 3pm</p>
					<img class="img-responsive center-block" src="images/bands/nine-inch-nails.jpg" alt="nine-inch-nails"></a>
					<div class="item">
						Nine Inch Nails (abbreviated as NIN and stylized as NIИ) is an American industrial rock band[1] founded in 1988 by Trent Reznor in Cleveland, Ohio. The band released two influential albums during the 1990s – The Downward Spiral (1994) and The Fragile (1999) – and has record sales exceeding over 20 million copies worldwide,[2] with 10 million sales certified in the United States alone.<br>
						<a onClick="window.location.reload()"><span style="color: blue;">....read less</span></a>
					</div>
					<br>
					<p><a href="http://aftershockconcert.com/tickets/">Order Band Merchandise</a></p>
				</div>
			</div><!-- col-->

			<div  class="col-sm-4" style="padding-top: 3px">
				<div id="foo" class="event_box">
					<a href="okee.php"><p>Foo Fighters</p>
						<p>Main Stage Sat 3pm</p>
						<img class="img-responsive center-block" src="images/bands/foo-fighters.jpg" alt="louder than life"></a>
						<div class="item">
							Foo Fighters is an American rock band, formed in Seattle, Washington in 1994. It was founded by Nirvana drummer Dave Grohl as a one-man project following the dissolution of Nirvana after the death of Kurt Cobain.
							<br>
							<a onClick="readless()"><span style="color: blue;">....read less</span></a>
						</div>
						<br>
						<p><a href="http://aftershockconcert.com/tickets/">Order Band Merchandise</a></p>
					</div>
				</div><!-- col-->

				<div class="col-sm-4" style="padding-top: 3px">
					<div class="event_box">
						<a href="okee.php"><p>Coldplay</p>
							<p>Main Stage Sat 3pm</p>
							<img class="img-responsive center-block" src="images/bands/coldplay.jpg" alt="nine-inch-nails"></a>
							<div class="item">
								Coldplay are a British rock band formed in 1996 by lead vocalist and keyboardist Chris Martin and lead guitarist Jonny Buckland at University College London (UCL).[5] After they formed under the name Pectoralz, Guy Berryman joined the group as bassist and they changed their name to Starfish..
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
							<a href="okee.php">
								<p>Johnny's Burgers</p>
								<img class="img-responsive center-block" src="images/offers/hamburger.jpg" alt="hamburger"></a>
							</div>
						</div><!-- col-->

						<div class="col-sm-4 foodrow" style="padding-top: 3px">
							<div class="event_box">
								<a href="okee.php">
									<p>Jimmy's Wings</p>
									<img class="img-responsive center-block" src="images/offers/wings.jpg" alt="wings">
								</a>
							</div>
						</div><!-- col-->

						<div class="col-sm-4 foodrow" style="padding-top: 3px">
							<div class="event_box">
								<a href="show-sample.php">
									<p>Wendy's Wraps</p>
									<img class="img-responsive center-block" src="images/offers/wraps.jpg" alt="food vendor image">
								</a>
							</div>
						</div><!-- col-->
					</div><!-- row-->


					<br>

					<!-- MERCHANDISE -->

					<span class="anchor" id="merch"></span> <!-- so links to id arent hidden by fixed header -->
					<div class="row">
						<div class="col-sm-12 maprow">
							<div class="center">
								<h4>Merchandise</h4>
							</div>
						</div>
					</div>

					<br>

					<div class="row">
						<div class="col-sm-4 foodrow" style="padding-top: 3px">
							<div class="event_box">
								<a href="okee.php">
									<p>Official Event Merchandise</p>
									<img class="img-responsive center-block" src="images/offers/hamburger.jpg" alt="hamburger"></a>
								</div>
							</div><!-- col-->

							<div class="col-sm-4 foodrow" style="padding-top: 3px">
								<div class="event_box">
									<a href="okee.php">
										<p>Sunglasses</p>
										<img class="img-responsive center-block" src="images/offers/wings.jpg" alt="wings">
									</a>
								</div>
							</div><!-- col-->

							<div class="col-sm-4 foodrow" style="padding-top: 3px">
								<div class="event_box">
									<a href="show-sample.php">
										<p>Clothing</p>
										<img class="img-responsive center-block" src="images/offers/wraps.jpg" alt="food vendor image">
									</a>
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


		<!-- <iframe src="./social" width="1000" height="500" style="margin-top:0px;"></iframe> -->


		<?php include 'footer.php';?>
