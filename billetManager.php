<?php


// create la classe BilletManager qui connecte qvec lq BDD
class BilletManager
{
 private $bdd; // Instance de PDO.

 public function __construct($bdd) {
    $this->bdd = $bdd;
    }
 public function insert(Billet $billet){
     //
  }

  // function Select qui c'est un getter et je l'ai appelé getList  
 public function getList(){
    $billets = [];
    $reqSQL='SELECT `id`, `titreBillet`, `contenuBillet` FROM `billet`' ;
    $pdoStat = $this->bdd->query($reqSQL);
    while ($donnees = $pdoStat ->fetch(PDO::FETCH_ASSOC)) {
        $billets[] = new Billet($donnees);
        }
        return $billets;
 }


 public function getCount(){ 
    $count = [];
    $reqSQLcount = 'SELECT * FROM billet WHERE titreBillet LIKE "%How to%"';
    $pdoStat2 = $this->bdd->query($reqSQLcount);
        while ($donnees = $pdoStat2 ->fetch(PDO::FETCH_ASSOC)) {
        $count[] = new Billet($donnees);
        }
        return sizeof($count);
 }

 
}