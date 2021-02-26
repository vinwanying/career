<?php include "php/header.php" ?>
<!-- Photobox browse organisations -->
<div id="browse_event_photobox" class="container container-white">
	<div id="floatingBlueBox" class="container-translucent-blue">
		<img src="img/upcoming_event_icon.png"><br>
		Browse<br>Events
	</div>
</div>
<div id="event_complete_search" class="container-orange"><center>
<form>
<table>
<tr>
	<td>
	<td><i class="fas fa-search" id="org_search_icon"></i>
	<input id="org_search" onkeyup="myFunction()" name="search_word" type="text" value=""></td>
</tr>
</table>
</form>
</div>
<div class="container" id="socData">
<?php require "php/eventDB.php" ?>
</div>
<script src="js/eventDB.js"></script>
<?php include "php/footer.php" ?>
