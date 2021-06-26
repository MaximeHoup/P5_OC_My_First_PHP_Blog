<?php
	require_once('dbconnect.php');


$pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);

$reponse = $bdd->prepare('INSERT INTO users(email, pass, nickname, admin) VALUES(?, ?, ?, "0")');
$reponse->execute(array($_POST['email'], $pass_hache, $_POST['nickname']));


header('Location: ../view/index.php');

?> 