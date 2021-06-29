<?php
require_once('dbconnect.php');

$comments_id = $_GET['comment'];
$commentstatut = "1";

$reponse = $bdd->prepare('UPDATE comments SET commentaccepted = :accepted WHERE comments_id = :id');
$reponse->execute(array('id' => $comments_id, 'accepted' => $commentstatut));

header('Location: ../view/admincomment.php');

?>