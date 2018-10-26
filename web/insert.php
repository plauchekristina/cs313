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

$db = get_db();
$stmt = $db->prepare ('INSERT INTO scriptures(scripture_book, scripture_chapter, scripture_verse, scripture_content ) 
VALUES (:scripture_book,:scripture_chapter, :scripture_verse, :scripture_content)');
$stmt -> bindValue(':scripture_book', $scripture_book, PDO::PARAM_STR);
$stmt -> bindValue(':scripture_chapter', $scripture_chapter, PDO::PARAM_INT);
$stmt -> bindValue(':scripture_verse', $scripture_verse, PDO::PARAM_INT);
$stmt -> bindValue(':scripture_content', $scripture_content, PDO::PARAM_STR);
$stmt->execute();



?>