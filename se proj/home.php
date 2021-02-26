<?php include "php/header.php" ?>
<style>
.navigation_bar {
	margin-left: auto;
	margin-right: auto;
}
</style>
<script type="text/javascript" src="js/someJs.js"></script>
<script>
	document.getElementsByTagName('img')[0].src="img/home/logo.png"
</script>
		<!-- Carousel -->
		<!-- https://www.w3schools.com/bootstrap/bootstrap_carousel.asp -->
		<div class="container" id="homeCarousel">
			<div id="Le_Carrousel" class="carousel slide" data-ride="carousel">
				<!-- Images -->
				<div class="carousel-inner">
					<div class="item active">
						<img class="d-block w-100" src="img/home/slide_1.jpg" alt="slide1">
					</div>
					<div class="item">
						<img class="d-block w-100" src="img/home/slide_2.jpg" alt="slide2">
					</div>
				</div>
				<!-- Left/Right Buttons -->
				<!-- Back-End Note!!! >
					this portion can be left alone
				< End of note-->
				<a class="left carousel-control" href="#Le_Carrousel" data-slide="prev">
	    			<span class="glyphicon glyphicon-chevron-left"></span>
	    			<span class="sr-only">Previous</span>
	  			</a>
	  			<a class="right carousel-control" href="#Le_Carrousel" data-slide="next">
	    			<span class="glyphicon glyphicon-chevron-right"></span>
	    			<span class="sr-only">Next</span>
				</a>
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<!-- Back-End Note!!! >
						this bit needs to be generated like the images above
					< End of note-->
				    <li id="Le_Carrousel_Icon" data-target="#Le_Carrousel" data-slide-to="0" class="active"></li>
				    <li id="Le_Carrousel_Icon" data-target="#Le_Carrousel" data-slide-to="1"></li>
				</ol>
			</div>
		</div>

		<!-- The Orange Block -->
		<!-- Back-End Note!!! >
			this portion can be left alone
		< End of note-->
		<div class="container container-orange" style="height: auto; padding-bottom: 50px">
				<div id="header_font">A FRUITFUL ULIFE AHEAD!</div>
				<div class="container-mini-yellow">
						<img src="img/home/student_icon.png">
						<h2>20,000+</h2>
						<h3>students</h3>
						<br>
						<br>
						<br>
				</div>
				<div class="container-mini-yellow">
					<img src="img/home/org_icon.png">
					<h2>200+</h2>
					<h3>student<br>organizations</h3>
				</div>
				<div class="container-mini-yellow">
					<img src="img/home/event_icon.png">
					<h2>1,000+</h2>
					<h3>events</h3>
					<br>
				</div>
		</div>

		<!-- browse societies photobox thing-->
		<!-- Back-End Note!!! >
			this portion can be left alone
		< End of note-->
		<div id="index_photobox" class="container container-white">
			<div id="floatingBlueBox" class="container-translucent-blue">
				<img src="img/home/browsing.png"><br>
				<a href="soc.php">Browse<br>Societies,<br>Organisations<br>and Clubs</a>
			</div>
		</div>
		<!-- Events -->
		<!-- Back-End Note!!! >
				this part may be difficult to write, decide how many events you
				want to have displayed (4 on design). I have tried to simplify
				implementation for you.

		< End of note-->
		<div class="container container-white">
			<h3><img src="img/home/upcoming_event_icon.png"> Upcoming Events</h3>
			<div class="container-tabbed">
				<div class="tabs">
					<button id="all" type="button" value="all" class="tabButton">All</button>
					<button id="academic" type="button" value="academic" class="tabButton">Academic</button>
					<button id="art" type="button" value="art" class="tabButton">Art & Culture</button>
					<button id="service" type="button" value="service" class="tabButton">Public Service</button>
					<button id="religious" type="button" value="religious" class="tabButton">Religious</button>
					<button id="sports" type="button" value="sports" class="tabButton">Sports</button>
				</div>

				<div id="groupAcademic" class="tab-page">
					<div class="container-mini-blue">
						<img src="img/home/lecture.png"><br>
						<h1>
							AI for games!
						</h1>
						<p>
							Come join to learn to make an aimbot!
						</p>
					</div>
				</div>
				<div id="groupArt" class="tab-page">
					<div class="container-mini-blue">
						<img src="img/home/wine_tasting.png"><br>
						<h1>
							Wine tasting
						</h1>
						<p>
							learn to drink like a classy person!
						</p>
					</div>
				</div>
				<div id="groupService" class="tab-page">
					<div class="container-mini-blue">
						<img src="img/home/camp.png"><br>
						<h1>
							Service trip
						</h1>
						<p>
							click for more details!
						</p>
					</div>
				</div>
				<div id="groupReligious" class="tab-page">

				</div>
				<div id="groupSports" class="tab-page">
					<div class="container-mini-blue">
						<img src="img/home/basketball.png"><br>
						<h1>
							Ball
						</h1>
						<p>
							click for more details!
						</p>
					</div>
				</div>
			</div>
		</div>
<?php include "php/footer.php" ?>
