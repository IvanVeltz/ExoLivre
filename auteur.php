<?php

class Auteur{
    // Attributs
    private string $_prenom;
    private string $_nom;
    private $_livres = []; // Tableau pour stocker les livres écrits par l'auteur

    // Accesseurs
    public function getPrenom(){
        return $this->_prenom;
    }
    public function getNom(){
        return $this->_nom;
    }
    public function getLivres(){
        return $this->_livres;    
    }

    // Mutateurs
    public function setPrenom($prenom){
        $this->_prenom = $prenom;
    }
    public function setNom($nom){
        $this->_nom = $nom;
    }
    public function setLivres($livres){
        $this->_livres = $livres;
    }

    // Constructeur
    public function __construct($prenom, $nom){
        $this->_prenom = $prenom;
        $this->_nom = $nom;
    }

    // Methodes
    public function __toString(){
        return "$this->_prenom $this->_nom";
    }

    // Ajouter un livre à la bibliographie de l'auteur
    public function ajouterLivre(Livre $livre) {
        array_push($this->_livres, $livre);
    }

    public function afficherBibliogaphie(){
        echo "Livres de $this :<br>";
        foreach($this->_livres as $livre){
            echo "$livre<br>";
        }
    }
}