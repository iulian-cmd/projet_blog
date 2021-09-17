<?php


// create la classe BilletManager qui connecte qvec la BDD
class CommentaireManager
{
 private $bdd; // Instance de PDO.

 public function __construct(PDO $bdd) {
    $this->bdd = $bdd;
    }
 public function insert(Commentaire $commentaire){
     //
  }

//   // function Select qui c'est un getter et je l'ai appelé getList  
//  public function getListComm(){
//     $commentaires = [];
//     $reqSQL='SELECT `id`, `id_billet`, `auteur`, `commentaire`, `date_commentaire` FROM `commentaire`' ;
//     $pdoStat = $this->bdd->query($reqSQL);
//     while ($donnees = $pdoStat ->fetch(PDO::FETCH_ASSOC)) {
//         $commentaires[] = new Commentaire($donnees);
//         }
//         return $commentaires;
//  }

 public function getListLinkedComm($id_billet){

    $linkedCommentaires = [];

    $reqSQLlink="SELECT * FROM `commentaire` WHERE `id_billet` = $id_billet";
   
    $pdoStat3 = $this->bdd->query($reqSQLlink);
     
    while ($donnees = $pdoStat3 ->fetch(PDO::FETCH_ASSOC)) {
    
        $linkedCommentaires[] = new Commentaire($donnees);
       
      }
        return $linkedCommentaires;
 }
//  public function getCount(){ 
//     $count = [];
//     $reqSQLcount = 'SELECT * FROM billet WHERE titreBillet LIKE "%How to%"';
//     $pdoStat2 = $this->bdd->query($reqSQLcount);
//         while ($donnees = $pdoStat2 ->fetch(PDO::FETCH_ASSOC)) {
//         $count[] = new Billet($donnees);
//         }
//         return sizeof($count);
//  }

 
}