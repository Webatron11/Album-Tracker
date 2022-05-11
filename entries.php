<?php

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

if(!$db) {
	echo "Error : Unable to open database\n";
} else {
	echo "Opened database sucessfully\n";
}

$sql =<<<EOF
	INSERT INTO music (ID,ALBUM,ARTIST,SOURCED,SOURCE)
	VALUES (1, 'Drinking From The Sun', 'Hilltop Hoods', FALSE, 'N/A');
	EOF;


$ret = pg_query($db, $sql);
if(!$ret) {
   echo pg_last_error($db);
} else {
   echo "Records created successfully\n";
}
pg_close($db);

?>
