<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=dbprojet5;port=3307', 'root', 'root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>