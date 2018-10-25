<!doctype html>
<head>
    <title>Scripture Form</title>
</head>
<body>
    <h1>Add New Scriptures</h1>
  
   
     
 <form name="insert" action="insert.php" method ="POST">
         <div>Book: <input type="text" name="book"></div> 
         <div>Chapter: <input type="text" name="chapter"></div>
        <div> Verse: <input type="text" name="verse"></div>
         <div>Content: <input type="textarea" name="content"></div>
          <?php
          
          foreach ($db->query('SELECT topic_name FROM topic') as $row)
          {
            echo "<input type = 'checkbox' name= 'topic' value=" . $row['topic_name'] . ">". $row['topic_name'] ."</br>"
            ;
      }
            ?>
          <div><input type="submit" name="submit" value="Submit"></div>
        </form>
  
    
 
</body>
</html>