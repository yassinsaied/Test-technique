# Test technique web back
Création d'une API de notation d'élèves en Symfony 5.4 et API Platform 2.6
## Téléchargement des dépendances
* Vous pouvez ouvrir votre terminal et Télécharger ce repository avec la commande  `git clone https://github.com/yassinsaied/Test-technique.git.`
* cd Test-technique
* Lancer la commande `composer install`
## Configuration des variables d'environnement
* Acceder au ficher .env et remplacer vos valeurs d'environnement par exp :
`DATABASE_URL="mysql://root@127.0.0.1:3306/classe_eleve?serverVersion=mariadb-10.4.21"`
## Création et remplissage de la base de données 
* Lancer la commande : $`php bin/console doctrine:database:create`
* Lancer la commande : $`php bin/console doctrine:schema:update --force`
* Pour remplire la base de données avec des faux données lancer la commande : $`php bin/console doctrine:fixtures:load` 
##  API de notation d'élèves
J'ai implémenter mon API de notation d'élèves en utilisant API Platform , et jai mis en place :
* L'ajout d'un élève .
* Modification des informations d'un élève .
* Suppression d'un élève.
* L'ajout d'une note à un élève.
* Récupération de la moyenne de toutes les notes d'un élève .
* Récupération de la moyenne générale de la classe.
* Vous trouverez toute la documentation de cette API à l’adresse suivante : url_de_votre_site/api/docs 



