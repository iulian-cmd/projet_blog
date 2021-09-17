<?php
// create la classe BilletManager qui connecte qvec la pdo
class BilletManager extends EntityManager
{
   public $pdo; // Instance de PDO.

   public function __construct($pdo) 
      {
      $this->pdo = $pdo;
      }


   public function insert(Billet $billet){
      //
   }

  // function Select qui c'est un getter et je l'ai appelé getList  
   public function getList()
      {
         $billets = [];
         
         $reqSQL='SELECT `id`, `titreBillet`, `contenuBillet` FROM `billet`' ;
         
         $pdoStat = $this->pdo->query($reqSQL);
         
         while ($donnees = $pdoStat ->fetch(PDO::FETCH_ASSOC)) 
         {
          $billets[] = new Billet($donnees);
         }
         
         return $billets;
      }  


 public function getCount(){ 
    $count = [];
    $reqSQLcount = 'SELECT * FROM billet WHERE titreBillet LIKE "%How to%"';
    $pdoStat2 = $this->pdo->query($reqSQLcount);
        while ($donnees = $pdoStat2 ->fetch(PDO::FETCH_ASSOC)) {
        $count[] = new Billet($donnees);
        }
        return sizeof($count);
 }


 public function getAll()
 {
     $sql = 'SELECT * FROM billet';

     $request = $this->pdo->query($sql);

     $billets = [];
     foreach ($request->fetchAll(PDO::FETCH_ASSOC) as $billet) {
         $billets[] = new Billet($billet);
     }
     return $billets;
 }
 
}