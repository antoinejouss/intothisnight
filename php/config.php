<?php
	//DB connection info data
	//hosted on Namecheap.com through 3dprintsexpress.com
	$host = "localhost";
	$user = "cdprumeo_intothisnight";
	$pass = "bonnesalope10";
	$db = "cdprumeo_intothisnight";

	//DB Tables
	$clubber = "clubber";
	$administrator = "administrator";
	$dj = "dj";
	$club = "administrator";
	$party = "party";
	$webconnection = "webconnection";
	$price = "price";
	$drink = "drink";
	$host = "host";
	$do = "do";
	$book = "book";
	$play = "play";

	//Connect to DB
	$conn = mysql_connect($host, $user, $pass);
	
	/*if ($conn)
		{
		echo "Connected to DB. <br><br>";
		}
	else
		{
		echo "Connection to DB failed. <br><br>";
		die('Could not connect: ' . mysql_error());
	}*/
	
	//DB selection
	mysql_select_db($db, $conn) or die(mysql_error()); 
	//echo "DB selection OK.<br><br>";
?>