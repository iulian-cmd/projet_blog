<?php
// comme settings n'est pas une classe elle n'est pas inclue par la autoload
require_once ('settings.php');

class EntityManager
{
    protected $pdo;
   
    // connection a la BDD, attr_errmode affiche bien les erreurs
    public function connect()
    {
        global $user, $pass;  // on cree des variable globale pour pouvoir avoir access
        try {
            $this->pdo = new PDO('mysql:host=localhost:3307;dbname=blogphp;charset=utf8',$user,$pass,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch (Exception $e) {
            die('Erreur : Il faut reessayer' . $e->getMessage());
        }
    }

}