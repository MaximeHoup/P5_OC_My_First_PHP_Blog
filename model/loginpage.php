<?php 

require_once('dbconnect.php');

//  Récupération de l'utilisateur et de son pass hashé
$reponse = $bdd->prepare('SELECT users_id, pass, admin FROM users WHERE nickname = ?');
$reponse->execute(array($_POST['nickname']));
$donnees = $reponse->fetch();


// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($_POST['pass'], $donnees['pass']);

if (!$donnees)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    if ($isPasswordCorrect) {
        session_start();
        $_SESSION['users_id'] = $donnees['users_id'];
        $_SESSION['nickname'] = $_POST['nickname'];
        $_SESSION['admin'] = $donnees['admin'];
        
        if (isset($_SESSION['users_id']) && isset($_SESSION['nickname']))
            {
                header('Location: ../view/index.php');
            }
    }
    else {
        echo 'Mauvais identifiant ou mot de passe !';
    }
}
?>