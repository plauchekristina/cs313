<?php 
$topic_id= htmlspecialchars($_POST ['topic_id']);

echo "$topic_id";


require('connect.php');
$db = get_db();
$stmt = $db->prepare ('INSERT INTO scriptures(scripture_book, scripture_chapter, scripture_verse, scripture_content ) VALUES (:scripture_book,
:scripture_chapter, :scripture_verse, :scripture_content');
$stmt -> bindValue(':scripture_book', $scripture_book, PDO::PARAM_STR);
$stmt -> bindValue(':scripture_chapter', $scripture_chapter, PDO::PARAM_INT);
$stmt -> bindValue(':scripture_verse', $scripture_verse, PDO::PARAM_INT);
$stmt -> bindValue(':scripture_content', $scripture_content, PDO::PARAM_STR);
$stmt->execute();



?>