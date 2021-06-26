<?php
	require_once('dbconnect.php');

$reponse = $bdd->prepare('INSERT INTO test(nickname, content, posts_id) VALUES(?, ?, ?');
$reponse->execute(array($_POST['nickname'], $_POST['content'], $_GET['post']));

echo $_POST['content'], $_GET['post'], $_POST['nickname'];


?>