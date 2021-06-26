<?php
require_once('dbconnect.php');

$comments_id = $_GET['comment'];

$reponse = $bdd->prepare('DELETE FROM comments WHERE comments_id = :newcomments_id');
$reponse->execute(array('newcomments_id' => $comments_id));
header('Location: ../view/admincomment.php');

?>