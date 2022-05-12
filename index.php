<!DOCTYPE html>
<html>
<html lang="en-AU">
	<head> 
		<title>Wanted Artists & Music</title>
	</head>
	
	<body>
		<h1> Wanted Artists & Music </h1>
		<h3> Want to add a new entry?</h3>
			 <form action="/entries.php" method="post">
				<label for="artist">Artist:</label><br>
				<input type="text" id="artist" name="artist" required><br>
				<label for="album">Album Name:</label><br>
				<input type="text" id="album" name="album" required><br>
				<input type="radio" id="true" name="sourced" value="TRUE" required>
				<label for="true">Sourced</label><br>
				<input type="radio" id="false" name="sourced" value="FALSE">
				<label for="false">Not Sourced</label><br>
				<label for="source">Source:</label><br>
				<input type="source" id="source" name="source" value="N/A"><br><br>
				<input type="submit" formtarget="_parent" value="Submit entry!">
			</form>
	</body>
</html>
