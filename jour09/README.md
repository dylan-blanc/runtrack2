# Projet de Base de Données - jour09

Ce projet a pour but de créer une base de données nommée **jour09** avec les tables suivantes : **etudiants**, **etage**, et **salles**. 

## Structure du Projet

Le projet contient les fichiers suivants :

- **sql/create_database.sql** : Ce fichier contient la commande SQL pour créer la base de données nommée "jour09".
- **sql/etudiants.sql** : Ce fichier contient la commande SQL pour créer la table "etudiants" avec les champs suivants :
  - id (int, clé primaire, Auto Incrément)
  - prenom (varchar de taille 255)
  - nom (varchar de taille 255)
  - naissance (date)
  - sexe (varchar de taille 25)
  - email (varchar de taille 255)
  
- **sql/etage.sql** : Ce fichier contient la commande SQL pour créer la table "etage" avec les champs suivants :
  - id (int, clé primaire, Auto Incrément)
  - nom (varchar de taille 255)
  - numero (int)
  - superficie (int)

- **sql/salles.sql** : Ce fichier contient la commande SQL pour créer la table "salles" avec les champs suivants :
  - id (int, clé primaire, Auto Incrément)
  - nom (varchar de taille 255)
  - id_etage (int)
  - capacite (int)

## Instructions

1. **Créer la base de données** :
   - Exécutez le fichier `create_database.sql` pour créer la base de données "jour09".

2. **Créer les tables** :
   - Exécutez les fichiers `etudiants.sql`, `etage.sql`, et `salles.sql` pour créer les tables correspondantes dans la base de données.

3. **Exportation** :
   - Une fois les tables créées, vous pouvez exporter la base de données à partir de phpMyAdmin en utilisant l'option d'exportation.

Assurez-vous d'avoir les permissions nécessaires pour créer des bases de données et des tables dans votre environnement de gestion de base de données.