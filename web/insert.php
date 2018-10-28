<?php 
$topic_id= htmlspecialchars($_POST ['topic_id']);
$scripture_book= htmlspecialchars($_POST ['scripture_book']);
$scripture_chapter= htmlspecialchars($_POST ['scripture_chapter']);
$scripture_verse= htmlspecialchars($_POST ['scripture_verse']);
$scripture_content= htmlspecialchars($_POST ['scripture_content']);

var_dump($_POST);
echo "$topic_id";
echo "$scripture_book";
echo "$scripture_chapter";
echo "$scripture_verse";
echo "$scripture_content";


require('connect.php');

//$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
$stmt = $db->prepare ('INSERT INTO scriptures(scripture_book, scripture_chapter, scripture_verse, scripture_content ) 
VALUES (:scripture_book,:scripture_chapter, :scripture_verse, :scripture_content)');
$stmt -> bindValue(':scripture_book', $scripture_book, PDO::PARAM_STR);
$stmt -> bindValue(':scripture_chapter', $scripture_chapter, PDO::PARAM_INT);
$stmt -> bindValue(':scripture_verse', $scripture_verse, PDO::PARAM_INT);
$stmt -> bindValue(':scripture_content', $scripture_content, PDO::PARAM_STR);

try {
    $stmt->execute();
    $last_id = $db->lastInsertId();
}
catch (Exception $e) {
    echo $e;
}

// separate instance for insert statement
$stmt = $db->prepare ('INSERT INTO scripture_topic(scripture_id, topic_id ) 
VALUES (:scripture_id,:topic_id)');
$stmt -> bindValue(':scripture_id', $last_id, PDO::PARAM_INT);
$stmt -> bindValue(':topic_id', $topic_id, PDO::PARAM_INT);

try {
    $stmt->execute();
}
catch (Exception $e) {
    echo $e;
}

//UPDATE table_name SET column1=data1, column2=data2....WHERE id=1
?>