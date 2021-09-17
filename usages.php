<?php

// On crée une pile d'autoload avec le spl_autoload
spl_autoload_register('requireClass');

// On crée une fonction pour faire les require de Classe
function requireClass($classe){
    require $classe . '.php';
    }
// comme settings n'est pas une classe elle n'est pas inclue par la autoload
include ('settings.php');

// *****************************************
// connection a la BDD

//attr_errmode affiche bien les erreurs
try {
    $bdd = new PDO('mysql:host=localhost:3307;dbname=blogphp;charset=utf8',$user,$pass,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (Exception $e) {
    die('Erreur : Il faut reessayer' . $e->getMessage());
}
// ***********************************************

// $billetm = new BilletManager($bdd);
// var_dump($billetm->getList());
// var_dump($billetm->getCount());

$commentairem = new CommentaireManager($bdd);
// var_dump($commentairem->getListComm());
var_dump($commentairem->getListLinkedComm(1));
?>
