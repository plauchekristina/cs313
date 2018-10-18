<?php
try
{
 $dbUrl = getenv('DATABASE_URL');
​
 $dbOpts = parse_url($dbUrl);
​
 $dbHost = $dbOpts["host"];
 $dbPort = $dbOpts["port"];
 $dbUser = $dbOpts["user"];
 $dbPassword = $dbOpts["pass"];
 $dbName = ltrim($dbOpts["path"],'/');
​
 $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
​
 $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
 echo 'Error!: ' . $ex->getMessage();
 die();
}
?>
<!doctype html>
<head>
	<title>Scripture Finder</title>
</head>
<body>
	<h1> Scripture Resources </h1>
	<?php
	foreach ($db->query('SELECT scripture_book, scripture_chapter, scripture_verse, scripture_content FROM scriptures') as $row)
		{
		 echo "<p><b>" . $row['scripture_book'] . " ";
		 echo $row['scripture_chapter'];
		 echo ":" . $row['scripture_verse'] . "</b> - ";
		 echo "\"" . $row['scripture_content'] . "\"";
		 echo '</p>';
	}
	?>
​

	<!--<form action="" method ="post" id="searchForm">
		<input type="text" name="search">
		<input type="submit" name="submit" value="Search">
	</form>-->
	<?php
​
	/*
	$scriptureToFind = $_POST["search"];
	foreach ($db->query('SELECT book, chapter, verse, content FROM scriptures WHERE chapter = 88') as $row)
	{
		echo "<p><b>" . $row['book'] . " ";
		echo $row['chapter'];
		echo ":" . $row['verse'] . "</b> - ";
		echo "\"" . $row['content'] . "\"";
		echo '</p>';
	}
	*/
​
	?>
​
​
</body>
</html>