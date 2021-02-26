<?php include('php/server.php') ?>
<html>
	<header>
		<title>Signup</title>
		<link rel="stylesheet" href="css/main_style_karen.css" type="text/css">
		<link rel="stylesheet" href="css/signup-ind.css" type="text/css">
		<!-- Bootstrap CDN Version 3.4.0 -->
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>		<!-- End of Bootstrap -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	</header>
	<body>

<!-- Photobox banner -->
<div id="signupind_photobox" class="container container-white">
	<div id="floatingBlueBox" class="container-translucent-blue">
		<img src="img/idea_ind.png"/><br>
		Create<br>Individual<br>Account
	</div>
</div>

<div class="container container-white">
<?php require "php/errors.php"; ?><br>
<form  method="post" action="signup-ind.php">
<table class="signup_ind_form">
	<tr><td>*Mandatory Field<br><br><br><br></td></tr>
	<tr>
		<td>*Username</td>
		<td><input name="username" type="text" value="" class="text_input" required></td>
	</tr>
	<tr>
		<td>*Password</td>
		<td><input name="password_1" type="password" value="" class="text_input" required></td>
	</tr>
	<tr>
		<td>*Confirm Password</td>
		<td><input name="password_2" type="password" value="" class="text_input" required></td>
	</tr>
	<tr>
		<td>*CUHK @link email</td>
		<!--  https://www.w3schools.com/jsref/tryit.asp?filename=tryjsref_email_pattern  -->
		<td><input name="email" type="email" value="" class="text_input" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,3}$" required></td>
	</tr>
	<tr></tr>
	<tr></tr>
	<tr><td><button type="submit" id="signup_ind_submit" name="reg_user">SUBMIT</button></td></tr>
</table>
</form>
</div>
