<!DOCTYPE html>
<html>
<head>
	<title>Hari 1 - Berlatih HTML</title>
</head>
<body>
	<h2>Buat Account Baru!</h2>
	<h3>Sign Up Form</h3>
	<form action="/welcome" method="POST">
		@csrf
		<label for="fname">First Name:</label> <br><br>
		<input type="text" placeholder="" value="" id="fname" name="fname"> <br><br>
		
		<label for="lname">Last Name:</label> <br><br>
		<input type="text" placeholder="" value="" id="lname" name="lname"> <br><br>
		
		<label>Gender:</label> <br><br>
		<input type="radio" name="gender" value="0"> Male <br>
		<input type="radio" name="gender" value="1"> Female <br>
		<input type="radio" name="gender" value="2"> Other <br><br>
		
		<label>Nationality:</label><br><br>
		<select>
			<option>Indonesian</option>
			<option>Singapore</option>
			<option>Malaysian</option>
			<option>Australian</option>
		</select> <br><br>
 
		<label>Language Spoken:</label> <br><br>
		<input type="checkbox" name="lang_spok" value="0"> Bahasa Indonesia <br>
		<input type="checkbox" name="lang_spok" value="1"> English <br>
		<input type="checkbox" name="lang_spok" value="2"> Other <br><br>

		<label for="bio">Bio:</label> <br><br>
		<textarea cols="25" rows="7" id="bio">
			
		</textarea> <br>

		<!-- <input type="submit" value="Sign Up"> -->
		<button type="submit">Sign Up</button>


	</form>


</body>
</html>