# Test technique web back
Création d'une API de notation d'élèves en Symfony
## Téléchargement des dépendances
* Vous pouvez ouvrir votre terminal et Télécharger ce repository avec la commande  `git clone https://github.com/yassinsaied/Test-technique.git.`
* cd Test-technique
* Lancer la commande `composer install`
## Configuration des variables d'environnement
* acceder au fichier  au ficher .env et remplacement vos valeurs d'environnement par exp :
`DATABASE_URL="mysql://root@127.0.0.1:3306/classe_eleve?serverVersion=mariadb-10.4.21"`
## Initialisation ET remplire la base de données
* Lancer la commande : $`php bin/console doctrine:database:create`
* Lancer la commande : $`php bin/console doctrine:schema:update --force`
* Pour remplire la base de données avec des faux données lancer la commande : $`php bin/console doctrine:fixtures:load` 


