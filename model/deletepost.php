<?php
require_once('dbconnect.php');

$posts_id = $_GET['post'];

$req = $bdd->prepare('DELETE FROM comments WHERE posts_id = :newposts_id');
$req->execute(array('newposts_id' => $posts_id));

$reponse = $bdd->prepare('DELETE FROM posts WHERE posts_id = :newposts_id');
$reponse->execute(array('newposts_id' => $posts_id));
header('Location: ../view/adminpost.php');

?>