<?php
	require_once('dbconnect.php');

$reponse = $bdd->prepare('INSERT INTO comments(nickname, content, posts_id) VALUES(?, ?, ?)');
$reponse->execute(array($_POST['nickname'], $_POST['content'], $_GET['post']));

header('Location: ../view/postlist.php');

?>