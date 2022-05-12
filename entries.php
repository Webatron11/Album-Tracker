<?php

$album = $artist = $sourced = $source = "";

$album = $_POST["album"];
$artist = $_POST["artist"];
$sourced = $_POST["sourced"];
$source = $_POST["source"];

$params = parse_ini_file('database.ini');
if ($params === false) {
	throw new \Exception("Error reading database configuration file");
}

$conStr = sprintf("host=%s port=%d dbname=%s user=%s password=%s", 
	$params['host'], 
	$params['port'], 
	$params['database'], 
	$params['user'], 
	$params['password']);

$db = pg_connect($conStr);

$sql =<<<EOF
	INSERT INTO MUSIC (ALBUM,ARTIST,SOURCED,SOURCE)
	VALUES ('$album', '$artist', $sourced, '$source')
	EOF;

$ret = pg_query($db, $sql);
if(!$ret) {
   echo pg_last_error($db);
} else {
   echo "Records created successfully\n";
}
pg_close($db);

header('Location: //artist.dakkaz.net');

?>
