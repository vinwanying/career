<?php include "php/header.php" ?>
<!-- Photobox banner -->
<div id="signuporg_photobox" class="container container-white">
	<div id="floatingBlueBox" class="container-translucent-blue">
		<img src="img/support_org.png"><br>
		Create<br>Organisation<br>Account
	</div>
</div>

<div class="container container-white">
<form>
	<table class="signup_org_form">
		<tr>
			<td>Organisation Name</td>
			<td><input name="search_word" type="text" value="" class="text_input" required></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input name="search_word" type="text" value="" class="text_input" required></td>
		</tr>
		<tr>
			<td>Confirm Password</td>
			<td><input name="search_word" type="text" value="" class="text_input" required></td>
		</tr>
		<tr>
			<td>Type of Groups</td>
			<td>
				<input type="radio" name="org_type" value="male"> Organisation
				<input type="radio" name="org_type" value="male"> Interest Group
			</td>
		</tr>
		<tr>
			<td>
				Event Nature<br>
			</td>
			<td>
				<select id="org_type_dropdown">
					<option value="cat1">Academics</option>
					<option value="cat2">Performance</option>
					<option value="cat3">Business</option>
					<option value="cat4">Recreational</option>
					<option value="cat5">Language</option>
					<option value="cat6">Public Service</option>
					<option value="cat7">Sports</option>
					<option value="cat8">Religious</option>
					<option value="cat9">International Student Union</option>
				</select>
			</td></tr><tr></tr>
		<tr>
			<td>
				Organisation Introduction<br><div class="form_remarks">(Maximum 500 words)</div>
			</td>
			<td>
				 <input name="search_word" type="text" value="" class="text_input_box" required>
			</td>
		</tr>
		<tr></tr>
		<tr><td><button type="button" id="signup_org_submit">SUBMIT</button></td></tr>
	</table>
</form>
</div>
<?php include "php/footer.php" ?>
