Ce projet utilise la programmation orientée objet (POO) en PHP pour modéliser un système de gestion de livres et d'auteurs.

Structure du projet
Classe Auteur : Représente un auteur avec un tableau de ses livres.
Classe Livre : Représente un livre, avec une référence à son auteur.
Fichier index.php : Point d'entrée pour instancier les objets et lier les livres aux auteurs.
Fonctionnalités
Ajout d'un livre à un auteur : Lorsqu'un livre est créé, il est automatiquement ajouté à la bibliographie de l'auteur associé.
Gestion des livres d'un auteur : Chaque auteur peut avoir un ou plusieurs livres associés.
Exemple d'utilisation
php
Copier
// Inclure les fichiers nécessaires
include 'Auteur.php';
include 'Livre.php';

// Création d'un auteur
$auteur = new Auteur('J.K. Rowling');

// Création d'un livre et l'ajout à l'auteur
$livre = new Livre('Harry Potter et l\'école des sorciers', $auteur);

// Récupérer les livres de l'auteur
$livres = $auteur->getLivres();
Bonnes pratiques POO
Encapsulation : Les propriétés des classes sont privées et accessibles via des méthodes publiques.
Nommage des méthodes : Les méthodes sont nommées de façon claire et explicite (ajouterLivre).
Autoloading : Le chargement des classes peut être amélioré avec spl_autoload_register.
Installation
Clonez ce repository.
Placez les fichiers dans un serveur PHP.
Ouvrez index.php pour voir l'exemple en action.
