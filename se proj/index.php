<?php include('php/server.php') ?>
<?php
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  }
?>
<html>
	<header>
		<title>Login</title>
		<link rel="stylesheet" href="css/main_style_karen.css" type="text/css">
		<link rel="stylesheet" href="css/50_v2_login.css" type="text/css">
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
				<img src="img/login.png"><br>
				Login
			</div>
		</div>

<!-- form -->
<div class="container container-white">
<?php require "php/errors.php"; ?><br>

<form method="post" action="index.php">
<table class="login_form">
			<tr>
				<td>
					Username:
				</td>
				<td>
					<input name="username" type="text" value="" class="text_input" required>
				</td>
			</tr>
			<tr>
				<td>
					Password:
				</td>
				<td>
					<input name="password" type="password" value="" class="text_input" required>
				</td>
			</tr>
			<tr></tr>
				<td>
					<button type="submit" id="login_button" name="login_user">LOGIN</button>
				</td>
				<td><a href="signup-ind.php" style="color: #ef8c45">SIGN UP</a></td>
</table>
</form>
</div>
</body>
</html>
