<?php
require_once('dbconnect.php');

$posts_id = $_GET['post'];
$commentstatut = "1";

$reponse = $bdd->prepare('UPDATE users SET commentaccepted = :accepted WHERE posts_id = :id');
$reponse->execute(array('id' => $posts_id, 'accepted' => $commentstatut));

header('Location: ../view/admincomment.php');

?>