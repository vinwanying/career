<?php
session_start();
// redirect to login page if not logged-in
if (!isset($_SESSION['username'])) {
	header('location: index.php');
}
$pName=rtrim(ltrim($_SERVER['PHP_SELF'],"/"),".php");
if($_SESSION['username']!="admin"){
	$h='"signup-org.php">CREATE MY SOCIETY';
} else{
	$h='"admin.php">ADMIN CONSOLE';
}
echo'
<html>
	<header>
		<title>'.$pName.'</title>
		<link rel="stylesheet" href="./css/main_style_karen.css" type="text/css">
		<link rel="stylesheet" href="css/'.$pName.'.css" type="text/css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	</header>
	<body>
		<ul class="navigation_bar">
			<div id="nav_link">
				<li><a href="home.php"><img src="img/light_logo.png" alt="CUSOC"></a></li>
				<li><a href="about.php">ABOUT</a></li>
				<li><a href="soc.php">SOC</a></li>
				<li><a href="event.php">EVENTS</a></li>
			</div>
			<div id="nav_user">
				<li class="navbar_user" style="float:right"><a href="index.php?logout=1">LOGOUT</a></li>
				<li class="navbar_user" style="float:right"><a href='.$h.'</a></li>
			</div>
		</ul>';
?>
