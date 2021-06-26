<?php
require_once('dbconnect.php');
session_start();
$reponse = $bdd->prepare('INSERT INTO posts(title, leadparagraph, content, nickname, users_id) VALUES(?, ?, ?, ?, ?)');
$reponse->execute(array($_POST['title'], $_POST['leadparagraph'], $_POST['content'], $_POST['content'], $_SESSION['users_id']));

header('Location: ../view/postlist.php');

?>