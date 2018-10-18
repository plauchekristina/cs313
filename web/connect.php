
<!DOCTYPE HTML>
<html lang="en-us">
<head><title>Connection</title></head>
<body>
<?php
try
{
  $dbUrl = getenv('DATABASE_URL');
echo $dbUrl;
  $dbOpts = parse_url($dbUrl);

  $dbHost = $dbOpts["host"];
  $dbPort = $dbOpts["port"];
  $dbUser = $dbOpts["user"];
  $dbPassword = $dbOpts["pass"];
  $dbName = ltrim($dbOpts["path"],'/');

  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}
?>
<p>HI!</p>
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

</body>
</html>