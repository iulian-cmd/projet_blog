<?php
class Billet
{
    private int $_id; 
    private string $_titreBillet; 
    private string $_contenuBillet; 
    
    public function __construct(array $tab)
    {
        $this->id = $tab['id'];
        $this->id = $tab['titreBillet'];
        $this->id = $tab['contenuBillet'];
    }

    public function getId()
    {
        return $this->id;
    }
    public function getTitreBillet()
    {
        return $this->titreBillet;
    }
    public function getContenuBillet()
    {
        return $this->contenuBillet;
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