<!doctype html>
<head>
    <title>Scripture Form</title>
</head>
<body>
    <h1>Add New Scriptures</h1>
  <ul>
    <?php
      <ul>
        <form name="insert" action="insert.php" method ="POST">
          <li>Book: <input type="text" name="book"></li>
          <li>Chapter: <input type="text" name="chapter"></li>
          <li>Verse: <input type="text" name="verse"></li>
          <li>Content: <input type="textarea" name="content"></li>
          <?php
          
              foreach ($db->query('SELECT name FROM topic') as $row)
                  {
                    echo "<li><input type = 'checkbox' name=" . $row['name'] . "><li> ";
                    ;
              }
            ?>
          <li><input type="submit" name="submit" value=""></li>
        </form>
      </ul>
    ?>
  </ul>
</body>
</html>