# Projet POO - Gestion de Livres et Auteurs

Ce projet utilise la **programmation orientée objet (POO)** en PHP pour modéliser un système de gestion de livres et d'auteurs.

## Structure du projet

- **Classe `Auteur`** : Représente un auteur avec un tableau de ses livres.
- **Classe `Livre`** : Représente un livre, avec une référence à son auteur.
- **Fichier `index.php`** : Point d'entrée pour instancier les objets et lier les livres aux auteurs.

## Fonctionnalités

1. **Ajout d'un livre à un auteur** : Lorsqu'un livre est créé, il est automatiquement ajouté à la bibliographie de l'auteur associé.
2. **Gestion des livres d'un auteur** : Chaque auteur peut avoir un ou plusieurs livres associés.

## Exemple d'utilisation

```php
// Inclure les fichiers nécessaires
include 'Auteur.php';
include 'Livre.php';

// Création d'un auteur
$auteur = new Auteur('J.K. Rowling');

// Création d'un livre et l'ajout à l'auteur
$livre = new Livre('Harry Potter et l\'école des sorciers', $auteur);

// Récupérer les livres de l'auteur
$livres = $auteur->getLivres();



### Explications

1. **Titres** : Utilisation de `#` pour les titres, afin de bien structurer le `README`.
2. **Exemple de code** : En utilisant des blocs de code (```php ... ```), l'exemple est facilement lisible.
3. **Installation** : Instructions simples pour cloner et tester le projet.
4. **Auteurs** : Une section pour ajouter ton nom ou d'autres contributeurs, et un lien vers ton profil GitHub si tu veux.

Tu peux personnaliser ce modèle selon tes besoins spécifiques, mais ça te donne une bonne base pour démarrer. Si tu veux ajouter quelque chose ou apporter des modifications, n'hésite pas à demander !
