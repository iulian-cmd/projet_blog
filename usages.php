<?php

// On crée une pile d'autoload avec le spl_autoload
spl_autoload_register('requireClass');

// On crée une fonction pour faire les require de Classe
function requireClass($classe){
    require $classe . '.php';
    }



$billetm = new BilletManager($pdo);

// var_dump($billetm->getList());
// var_dump($billetm->getCount());
var_dump($billet->getAll());

$commentairem = new CommentaireManager($pdo);
// var_dump($commentairem->getListComm());
// var_dump($commentairem->getListLinkedComm(1));


?>
