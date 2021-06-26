<?php
require_once('dbconnect.php');

$users_id = $_GET['id'];
$admin = "1";

$reponse = $bdd->prepare('UPDATE users SET admin = :newadmin  WHERE users_id = :id');
$reponse->execute(array('id' => $users_id, 'newadmin' => $admin));


header('Location: ../view/adminusers.php');

?>