<?php
    
$name = valid_donnees($_POST["name"]);
$mail = valid_donnees($_POST["mail"]);
$content = valid_donnees($_POST["content"]);

public function valid_donnees($donnees){
    $donnees = trim($donnees);
    $donnees = stripslashes($donnees);
    $donnees = htmlspecialchars($donnees);
    return $donnees;
}

/*Si les champs prenom et mail ne sont pas vides et si les donnees ont
 *bien la forme attendue...*/
if (!empty($name)
    && strlen($name) <= 20
    && preg_match("^[A-Za-z '-]+$",$name)
    && !empty($mail)
    && filter_var($mail, FILTER_VALIDATE_EMAIL)){

    try{
        include ("mail.php");
        }
        catch(PDOException $e){
            echo 'Erreur : '.$e->getMessage();
        }
    }else{
        echo 'Données invalides';
    }
?>