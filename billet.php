<?php
class Billet
{
    private int $_id; 
    private string $_titreBillet; 
    private string $_contenuBillet; 
    
    public function __construct(array $tab)
    {
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