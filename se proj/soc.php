<?php include "php/header.php" ?>
<!-- Photobox browse organisations -->
<div id="browse_org_photobox" class="container container-white">
	<div id="floatingBlueBox" class="container-translucent-blue">
		<img src="img/browsing.png"><br>
		Browse<br>Societies,<br>Organisations<br>and Clubs
	</div>
</div>
<!--search bar-->
<div id="org_complete_search" class="container-orange"><center>
<form>
<table>
<tr>
	<td>
		<i class="fas fa-search" id="org_search_icon"></i>
		<input id="org_search" onkeyup="myFunction()" name="search_word" type="text" value="">
	</td>
</tr>
</table>
</form></center>
</div>
<div class="container" id="socData">
<?php	require "php/socDB.php"	?>
</div>
<script src="js/socDB.js"></script>
<!-- search result -->
<div class="container"></div>
<?php include "php/footer.php" ?>
