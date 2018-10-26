
<!DOCTYPE HTML>
<html lang="en-us">
<head><title>Connection</title></head>
<body>

<p>HI!</p>
<?php
require('connect.php');
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
         <div>Book: <input type="text" name="scripture_book" value="Genesis"></div> <!-- php statement to edit -->
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

</body>
</html>