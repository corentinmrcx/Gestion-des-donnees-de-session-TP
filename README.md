# Gestion des données de session
## MARCOUX Corentin
## Installation / Configuration
### Installation de COMPOSER
L'installation de **Composer** s'effectue dans la variable d'environnnement "PATH". 
Etant donné que la configuration à déja était effectuer l'an dernier, on s'assure seulement de la bonne installation.

- Pour vérifier le bon fonctionnement de **Composer**, on réalise la commande suivante :
    `composer --version`

- Pour mettre a jour la version de **Composer** : `composer self-update`

### Initialisation du projet 
L'initialisation d'un projet Composer peut se faire 
avec une ligne de commande comportant des options 
ou en mode interactif. ici, nous allons procéder selon 
cette seconde méthode. 

```
composer init
```

- Mettre à jour l'auto-chargement de **Composer** :
    `composer dump-autoload`


La commande **composer dump-autoload** n'est nécessaire qu'en cas de modification des règles « autoload » ou « autoload-dev » dans le fichier « composer.json ». Toute nouvelle classe PHP introduite dans le projet sera immédiatement prise en compte sans qu'il soit nécessaire de relancer cette commande.

Si vous clonez votre dépôt Git, l'auto-chargement ne sera pas à jour et vous devrez lancer la commande composer dump-autoload.

Composer admet des noms de commandes courts, à condition qu'il n'y ait pas d'ambiguïté. Par exemple, composer du est équivalent à composer dump-autoload, alors que composer d est ambigu puisque plusieurs commandes commencent par la lettre « d ». 

