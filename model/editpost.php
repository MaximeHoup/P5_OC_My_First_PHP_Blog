<?php
require_once('dbconnect.php');
session_start();
$title = $_POST['title'];
$leadparagraph = $_POST['leadparagraph'];
$content = $_POST['content'];
$posts_id = $_GET['post'];
$users_id = $_SESSION['users_id'];
$nickname = $_POST['nickname'];



$reponse = $bdd->prepare('UPDATE posts SET title = :newtitle, leadparagraph = :newleadparagraph, content = :newcontent, users_id = :newusers_id, nickname = :newnickname, modificationdate = CURRENT_TIMESTAMP() WHERE posts_id = :newposts_id');
$reponse->execute(array(
'newtitle' => $title,
'newleadparagraph' => $leadparagraph,
'newcontent' => $content,
'newposts_id' => $posts_id,
'newusers_id' => $users_id,
'newnickname' => $nickname
));
header('Location: ../view/adminpost.php');

?>