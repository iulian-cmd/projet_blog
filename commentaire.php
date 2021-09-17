<?php
class Commentaire
{
 private int $_id; // La force du personnage, par défaut 50
 private int $_idBillet; // La force du personnage, par défaut 50
 private string $_auteur; // Son expérience
 private string $_commentaire; // Ses dégâts
 private string $_dateCommentaire; // Ses dégâts

  
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