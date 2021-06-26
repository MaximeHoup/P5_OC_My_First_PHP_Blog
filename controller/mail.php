<!doctype html>
<html>
	<head>
	    <meta charset="utf-8">
	    <title>Envoi d'un message par formulaire</title>
	</head>

	<body>
	    <?php
	    $retour = mail('m.houpiarpanin@gmail.com', 'Envoi depuis la page Contact', $_POST['name'], $_POST['content'], 'From : '.$_POST['mail']);
	    if ($retour) {
	        echo '<p>Votre message a bien été envoyé.</p>';
	    }
	    ?>
	</body>
</html>