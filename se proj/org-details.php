<?php include "php/header.php" ?>
<?php require "php/org-detailsDB.php" ?>
<div class="container container-white">

<div class="path-text-container">
	<a href="soc.php">Organisation  </a><i class="fas fa-chevron-right"></i> <?php echo $row["Name"] ?> Details
</div>

<!--org info TODO contact and favourite buttons-->
	<div id="socWSDC" class="org-page-details">
		<div class="container.white">
			<table id="event_info_table">
				<tr>
					<td id="key_image_cell">
						<img id="org_key_image" src="sql/<?php echo $row["img"] ?>">
					</td>
					<td>
						<div class="text-container">
							<div class="org_name"><?php echo $row["Name"] ?>
							</div>
							<div class="est_year">
							Since 2012
							</div>
							<br>
							<div class="hashtag1">
							#drama
							</div>
							<div class="hashtag2">
							#interestgroup
							</div>
							<div class="hashtag3">
							#performance
							</div>
						</div>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<p id="org_details_text"><?php echo $row["Description"] ?>	</p>

<!-- org events -->
	<div class="container-tabbed">
		<div class="upcoming_event_title">
		<img src="img/home/upcoming_event_icon.png"> Events
		</div>
		<!--copy below to create a new org search result box -->
		<div id="groupSports" class="event-page">
				<div class="container-mini-blue">
				<img src="./materials/20browse_event/swimming_gala.png"><br>
				<div class="event-text-container">
					<a href="./brose_event?search=sports"><div class="event_name">Swimming Gala 2019
					</div></a>
					<br>
					<div class="organiser">
					Sports Club, CUHK
					</div>
					<br>
						<div class="event_date">
							23 Mar
						</div>
						<div class="event_time">
							19:30-21:00
						</div>
						<div class="event_venue">
							Swimming Pool
						</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include "php/footer.php" ?>
