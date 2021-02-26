<?php include "php/header.php" ?>

<!-- Photobox banner -->
<div id="contactus_photobox" class="container container-white">
	<div id="floatingBlueBox" class="container-translucent-blue">
		<img src="img/mail.png"><br>
		Contact Us
	</div>
</div>

<!-- form -->
<div class="container container-white">
	<form action="php/contactus/email.php" method="post">
		<table class="contact_us_form">
			<tr>
				<td>Your Contact Email</td>
				<td>
				<!--  https://www.w3schools.com/jsref/tryit.asp?filename=tryjsref_email_pattern  -->
				<input name="contact_email" type="text" value="" class="text_input" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
				</td>
			</tr>
			<tr>
				<td>Message</td>
				<td><input name="message" type="text" value="" class="text_input_box" required></td>
			</tr>
			<tr></tr>
			<tr>
				<td>
					<script src="https://www.google.com/recaptcha/api.js?render=6LdBDp0UAAAAAEwxumjlMzBupwgaO2YrVJS6G44h"></script>
					<script>
  					grecaptcha.ready(function() { grecaptcha.execute('6LdBDp0UAAAAAEwxumjlMzBupwgaO2YrVJS6G44h', {action: 'homepage'});  });
					</script>
				</td>
			</tr>
			<tr>
				<td><button type="submit" id="contact_us_sent">SENT</button></td>
			</tr>
		</table>
	</form>
</div>
<?php include "php/footer.php" ?>
