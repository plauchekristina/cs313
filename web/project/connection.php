<!DOCTYPE HTML>
<html lang="en-us">
<head><title>Connection</title></head>
<body>
<?php
require('connect.php');

<p>The database is connected!</p>
<a href="https://quiet-peak-48501.herokuapp.com/">Return to Home</a>
<h2>Account List</h2>
<ul>
<?php

	foreach ($db->query('SELECT first_name, last_name, username, email FROM account') as $row)
		{
		  echo "<li><b>Username: </b>" . $row['username'] . "<ul><li><b>Name:</b> ";
		  echo $row['first_name'];
		  echo " " . $row['last_name'] . " </li>";
		  echo "<li><b>Email:</b>" . $row['email'] . "</li></ul>";
		  echo '</li>';
    }
  ?>
  </ul>
  </body>
  </html>