<!DOCTYPE HTML>
<html lang="en-us">
<head><title>Connection</title></head>
<body>
<?php
try
{
  $dbUrl = getenv('DATABASE_URL');

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
<p>The database is connected!</p>
<h2>Account List</h2>
<ul>
<?php

	foreach ($db->query('SELECT first_name, last_name, username, email FROM account') as $row)
		{
		  echo "<li><b>Username:</b>" . $row['username'] . "<ul><li><b>Name:</b> ";
		  echo $row['first_name'];
		  echo " " . $row['last_name'] . " </li>";
		  echo "<li><b>Email:</b>" . $row['email'] . "</li></ul>";
		  echo '</li>';
    }
  ?>
  </ul>
  </body>
  </html>