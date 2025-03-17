<?php

class Livre{

    // Attributs
    private string $_titre;
    private int $_nbrPages;
    private int $_anneeParution;
    private float $_prix;
    private Auteur $_auteur;

    // Assesseurs
    public function getTitre(){
        return $this->_titre;
    }
    public function getNbrPages(){
        return $this->_nbrPagees;
    }
    public function getAnneeParution(){
        return $this->_anneeParution;
    }
    public function getPrix(){
        return $this->_prix;
    }
     public function getAuteur(){
         return $this->_auteur;
     }

    // Mutateurs
    public function setTitre($titre){
        $this->_titre = $titre;
    }
    public function setNbrPages($nbrPages){
        $this->_nbrPages = $nbrPages;
    }
    public function setAnneeParution($anneeParution){
        $this->_anneeParution = $anneeParution;
    }
    public function setPrix($prix){
        $this->_prix = $prix;
    }
     public function setAuteur($auteur){
         $this->_auteur = $auteur;
     }

     // Methodes
    public function __toString(){
        return "$this->_titre ($this->_anneeParution) : $this->_nbrPages pages / $this->_prix €";
    }
}