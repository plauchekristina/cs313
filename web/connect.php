
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
    <h1>Add New Scriptures</h1>
     <form name="insert" action="insert.php" method ="POST">
         <div>Book: <input type="text" name="scripture_book" value="Genesis"></div> 
         <div>Chapter: <input type="text" name="scripture_chapter" value="1"></div>
        <div> Verse: <input type="text" name="scripture_verse" value="1"></div>
         <div>Content: <input type="textarea" name="scripture_content" value="Let there by light"></div>
    <?php
    foreach ($db->query('SELECT topic_name, topic_id FROM topic') as $row)
    {
      echo "<input type = 'checkbox' name= 'topic_id' value=" . $row['topic_id'] . ">". $row['topic_name'] ."</br>"
      ;
     
}
	?>
  
    
 <div><input type="submit" name="submit" value="Submit"></div>
        </form>
<?php 

// PDO Statements follow a pattern.
// 1. Establish a database connection. This is usually done with a variable entitled $db or something similar. 
    // You can name it whatever you want.
    // We already established the database connection on this page. That is why you don't see it repeated here.
    // We can simply call $db that we already created.
// 2. Create a variable for the SQL syntax. This is known as the "prepared statement" and it is optional.
    // We opted out of this and skipped this step in the code from the reading.
    // If we had used it, we would have an additional line that read:
    // $sql = 'SELECT * FROM table WHERE id=:id AND name=:name';   Note: it doesn't have to be $sql - you can name this whatever you want.
    // Had we used this step, the first line of code here would look like:
    // $stmt = $db->prepare($sql); rather than:
    //$stmt = $db->prepare('SELECT * FROM table WHERE id=:id AND name=:name');
//3. Create the statement itself.
    // First, create a variable for the statement. Often $stmt is used, but you can name it whatever you want. We used $stmt
    // Second, use the = to assign the following statement to the variable.
    // Third, call the database connection. We used our $db
    // Fourth, use the -> sign. This indicates that what we are about to do is object oriented.
    // Fifth, use the prepare() function.  This is the object oriented part of php code that makes the magic happen. You do not make up this word.
    // Sixth, include the prepared statement or equivalent variable inside the parentheses of the the prepare() function.
// #### $stmt = $db->prepare('SELECT * FROM table WHERE id=:id AND name=:name');
//4. Create list of bind parameters for the statement.
    // First, Use the statment variable we created above. In our case $stmt.
    // Second, use the -> sign.  This is going to call another built-in php function.
    // Third, use the bindValue() function (NOTE: there are other types of bind functions built in to php - get to know them)
    // Fourth, use the column name in single quotes with the : preceding the column name
    // Fifth, assign the column name to a variable (you can make up the variable name)
    // Sixth, repeat this for as many columns as you want to assign variables to.  In our example from the reading, we did 2:
// ####  $stmt->bindValue(':id', $id, PDO::PARAM_INT);
// #### $stmt->bindValue(':name', $name, PDO::PARAM_STR);
//5. Execute the statement. 
    // First, Use the statement variable we created above.
    // Second, use the -> sign
    // Third, use the execute() function that is built in to php. This makes the statement work. 
        // The execute() function is like hitting enter in the Terminal after you finished entering your sql statement.
// #### $stmt->execute();
//6. Use the data.
    // First, Create a variable to hold the data. You can name it whatever you want. We used $rows.
    // Second, use the statement variable again
    // Third, use the -> sign
    // Fourth, use the fetchAll() function that is built in to PHP to fetch the rows you just asked for in the query.
        // execute() is like hitting enter.
        // fetchAll() is like when you see all the rows output in your terminal after you hit enter. 
            //This is saved in the variable so you can use it.
// #### $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

// 7. That's "all". ;) 

//$stmt = $db->prepare('SELECT * FROM table WHERE scripture_id=:scripture_id AND scripture_book=:scripture_book');
//$stmt->bindValue(':scripture_id', $id, PDO::PARAM_INT);
//$stmt->bindValue(':scripture_book', $book, PDO::PARAM_STR);
//$stmt->execute();
//$rows = $stmt->fetchAll(PDO::FETCH_ASSOC); 
?>
</body>
</html>