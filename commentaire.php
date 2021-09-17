<?php
class Commentaire
{
 private int $_id; 
 private int $_idBillet; 
 private string $_auteur; 
 private string $_commentaire; 
 private string $_dateCommentaire; 

  
 public function __construct($tabcomm){
        $this->hydrate($tabcomm);
    }
    public function hydrate(array $donnees) {
        foreach ($donnees as $key => $value) {
            // On fabrique le nom du setter correspondant à l'attribut :
            $setter = 'set'.ucfirst($key);
        // Si le setter correspondant existe :
            if (method_exists($this, $setter)) {
                // On appelle le setter = $setter contient son nom !!!
                $this->$setter($value);
                }
            }
       }

    // setters   


    private function setId($id) { // ici il doit etre comme dans la bdd
        $this->_id = $id;
    } 
    private function setId_billet($idBillet) { // ici il doit etre comme dans la bdd
        $this->_idBillet = $idBillet;
    } 
    private function setAuteur($auteur) {
        $this->_auteur = $auteur;
    } 
    private function setCommentaire ($commentaire) {
        $this->_commentaire = $commentaire ;
    }
    private function setDate_commentaire($dateCommentaire) {
        $this->_dateCommentaire = $dateCommentaire;
    }
}
?>