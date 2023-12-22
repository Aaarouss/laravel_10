# Projet du restaurant O Cnamo

Ce projet est un test pour la formation devweb du CNAM

## Pré requis
- Apache/2.4.54
- MariaDB 10 10.2
- PHP : 8.0.26
- Composer version 2.6.5
- NodeJS et npm

## Installation

@TODO

## Utilisation

### Version dev

Il faut d'abord cloner l'application en local
```
https://github.com/Aaarouss/laravel-10
```
Ensuite, il faut créer une BDD puis configurer les accés à la BDD dans le fichier `.env`

Pour créer la BDD, vous pouvez utiliser un script en local:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_10
DB_USERNAME=laravel_10
DB_PASSWORD=123




Pour créer les tables et injecter des données de test, vous pouvez utiliser un script bash:

```

./mkdb.sh
```
Vous pouvez donner un nom à l'application dans le fichier `.env`


Dans le terminal:
```
php artisan serve
```

aller sur la page (http://127.0.0.1:8000)

## Requêtes SQL utiles

...
-- Liste des categories et de leurs plat
SELECT * FROM categories INNER JOIN plat ON categories.id = plat.categories_id;

-- SELECT *
FROM `plat`
ORDER BY plat.nom

-- SELECT *
FROM `plat`
INNER JOIN etiquette_plat ON etiquette_plat.plat_id = plat.id
ORDER BY plat.nom;

--SELECT plat.id, plat.nom, etiquette.id, etiquette.nom
FROM `plat`
INNER JOIN etiquette_plat ON etiquette_plat.plat_id = plat.id
INNER JOIN etiquette ON etiquette_plat.etiquette_id = etiquette.id
ORDER BY plat.nom, etiquette.nom;

## Recommendations
### Taille des images d'ambiance
largeur: 1024px
hauteur:768px

Il vaut mieux utiliser des fichiers JPEG car ils sont plus légers

## mentions légales

### Licence du projet

?@ TODO

### Droits d'auteur

toutes les photos du site ont été réalisées par ...