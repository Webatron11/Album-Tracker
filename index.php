<!DOCTYPE html>
<html>
<html lang="en-AU">
	<head> 
		<title>Wanted Artists & Music</title>
	</head>
	
	<body>
		<?php 
			require("entries.php");
		?>
		<h1> Wanted Artists & Music </h1>
		<h3> Want to add a new entry?</h3>
			 <form>
				<label for="artist">Artist:</label><br>
				<input type="text" id="artist" name="artist"><br>
				<label for="album">Album Name:</label><br>
				<input type="text" id="album" name="album"><br><br>
				<input type="submit" value="Submit entry!">
				<form action="/entries.php" method="get">
			</form>
	</body>
</html>