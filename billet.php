<?php
class Billet
{
 private int $_id; // La force du personnage, par défaut 50
  private string $_titreBillet; // Son expérience
 private string $_contenuBillet; // Ses dégâts
 static private $_nbObjects=0; 
 
 public function __construct($tab){
        $this->hydrate($tab);
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
    private function setId($id) {
        $this->_id = $id;
    } 
    private function setTitreBillet($titre) {
        $this->_titreBillet = $titre;
    } 
    private function setContenuBillet($contenu) {
        $this->_contenuBillet = $contenu;
    } 
}
?>