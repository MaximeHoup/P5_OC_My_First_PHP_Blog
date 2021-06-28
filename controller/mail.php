<!doctype html>
<html>
	<head>
	    <meta charset="utf-8">
	    <title>Envoi d'un message par formulaire</title>
	</head>

	<body>
		<?php $name = $_POST['name'];
		$email = $_POST['mail'];
		$content = $_POST['content'];
		$formcontent="From: $name \n Message: $content";
		$recipient = "adminp5@gmail.com";
		$subject = "Contact Form";
		$mailheader = "From: $email \r\n";
		mail($recipient, $subject, $formcontent, $mailheader) or echo '<p>Erreur! Un ou plusieurs champ(s) invalide(s)</p>';
		echo '<p>Votre message a bien été envoyé.</p>'; ?>
	</body>
</html>