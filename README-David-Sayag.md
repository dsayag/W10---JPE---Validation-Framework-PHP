# W10 - JPE - Validation Framework PHP

## Etape 1 : installation et base de données
- créer le projet dans un dossier sur son poste de travail
- installer l'environnement de Laravel avec Composer
```bash
$ composer create-project laravel/laravel dwmg3-devoir-david-sayag
```
- céer une base de données via phpMySQL et renseigner le nom de la base de données "DB_DATABASE", dans le fichier ```.env```.  
- initialiser le serveur avec Laravel avec :
```bash
$ php artisan serve
```

## Etape 2 : page d'accueil et route
- céer le fichier de la page d'accueil ```home```, l'a styliser (css, image de fond) et ajouter un menu avec 3 liens : home, list of characters et add a character.
- mettre en place les routes dans le ficher "web.php" pour les liens.

## Etape 3 : migration et Seed
- créer les tables Character et Designer, remplir les caractéristiques
- table Character :
    - id
    - name (string)
    - creation_date (integer)
    - comic (string)
    - designer(string)

- table Designer :
    - id
    - name (string)
    - birth_date (integer)
    - nationality (string)

- créer les seeder, remplir les détails des caractéristiques :
```bash
$ php artisan make:seeder CharacterSeeder
$ php artisan make:seeder DesignerSeeder
```
- envoyer les migrations et les seeders :
```bash
$ php artisan migrate --seed
```

## Etape 4 : controlleur
- créer un controlleur ```NavController``` qui permettra d'afficher les vues ```list, listCharacters et addCharacter```
- créer un controlleur ```ActionController``` qui permettra de gérer toutes les méthodes liées avec ```NavController```
- désormais l'affichage des vues passerons par les 2 controlleurs.
```bash
$ php artisan make:controller NavController
$ php artisan make:controller ActionController
```

## Etape 5 : les models
- créer les models selon le besoin ```Character et Designer```:
```bash
$ php artisan make:model Character
$ php artisan make:model Designer
```
## Etape 6 : page liste des personnages
- créer la page ```listCharacters```. Elle contiendra un tableau.
- elle affichera une liste des caractéristiques des personnages (name, creation_date, comic, designer) et s'affichera dans la vue ```listCharacter```.
Pour cela, il faut utiliser une boucle foreach qui va parcourir tout le tableau des personnages et récupérer les valeurs de la base de données.
- ajouter une croix dans le tableau des caractéristiques du personnage ```listCharacters`` pour l'étape de suppression et un bouton edit pour l'édition.
- créer le lien entre la vue, la méthodes dans ```ActionController```et ```NavController``` pour qu'il puisse retourner la bonne vue.

## Etape 7 : créer la page personnage
- la page ```Character``` contiendra des <div> qui afficheront les caractéristiques du personnage en ciblant les attributs avec ``` {{ character->id }} ```.
- prévoir un emplacement pour l'image du personnage ``` <img src="/img/character-{{ $character->id }}.jpg"> ```
- ajouter une croix sur la fiche profile ```Character``` pour l'étape de suppression et un bouton edit pour l'édition.
- créer le lien entre la vue, la méthode dans ```ActionController``` et ```NavController``` pour qu'il puisse retourner la bonne vue.

## Etape 8 : supprimer un personnage
- créer la page ```addCharacter```. Elle contiendra un formulaire. On utilisera la méthode post pour récupérer les informations entre le model et le controller.
- créer le lien entre la vue, la méthode dans ```ActionController``` et ```NavController``` pour qu'il puisse retourner la bonne vue.
- en cliquant sur le bouton rouge ```X```, cela supprime un personnage.

## Etape 9 : édition d'un personnage
- créer la page ```editCharacter```. Elle contiendra un formulaire. On utilisera la méthode post pour récupérer les informations entre le model et le controller.
- créer le lien entre la vue, la méthode dans ```ActionController``` et ```NavController``` pour qu'il puisse retourner la bonne vue.
- en cliquant sur le bouton vert ```Edit```, cela récupère les informatiosn du formulaire et nous permet de modifier les champs du personnage. Une fois terminer, il faut vaider avec le bouton ```Submit``` pour valider les informations. La vue est redirigée sur la liste des personnages grâce au Contoller ```ActionController```.

## Etape 10 : pages Designer
- renouveler l'ensemble des étapes 6 à 9 pour créer les pages du Designer
- créer les liens entre les vues, les méthodes dans ```ActionController``` et ```NavController``` pour qu'il puisse retourner les bonnes vues.