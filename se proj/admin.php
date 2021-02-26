<?php include "php/header.php" ?>
<?php if($_SESSION['username']!="admin") { header('location: home.php'); } ?>
<center>
<h4><b>
Administrator Console - Delete Society</b></h4>
<form>
<table>
<tr>
	<td>
		<i class="fas fa-search" id="org_search_icon"></i>
		<input id="org_search" onkeyup="myFunction()" name="search_word" type="text" value="">
	</td>
</tr>
</table>
</form>
</center>

<div class="container" id="socData">
<?php	require "php/adminDB.php"	?>
</div>
<script src="js/admin.js"></script>
<!-- search result -->
<div class="container"></div>
<script>
if(navigator.userAgent.indexOf("Firefox") != -1){
	alert("The Delete function is currently unavailable in Firefox. Please use Chrome, IE, Edge instead.");
}
</script>
<?php include "php/footer.php" ?>
