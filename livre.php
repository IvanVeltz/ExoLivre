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

    // Constructeur
    public function __construct($titre, $nbrPages, $anneeParution, $prix, Auteur $auteur) {
        $this->_titre = $titre;
        $this->_nbrPages = $nbrPages;
        $this->_anneeParution = $anneeParution;
        $this->_prix = $prix;
        $this->_auteur = $auteur;
        $auteur->ajouterLivre($this);
    }

    // Methodes
    public function __toString(){
        return "$this->_titre ($this->_anneeParution) : $this->_nbrPages pages / $this->_prix €";
    }
}