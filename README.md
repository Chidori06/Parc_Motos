# Parc_Motos
*Examen PHP Orienté Objet réalisé le 15/12/2023.*
*Sujet créé par Aurélien Delorme pour le formation Développeur Web et Web Mobile de Human Booster.*

## Concept Objet et modèle MVC

### Sujet :
Vous devez réaliser un CRUD afin de gérer les motos disponible pour le compte d’une concession 2 roues. 
Le parc de moto sera composé de différentes marques. 
Les motos vendues sont caractérisées par :  
-  Une marque
-  Un modèle
-  Un type qui pourra être (Enduro, Custom, Sportive, Roadster)
-  Une image (optionnel)

### Objectifs :
- En tant qu’utilisateur, je peux me connecter avec un utilisateur présent dans la base de données présente en annexe 
contenant actuellement un compte ayant pour identifiant admin et pour mot de passe admin. Pour hasher le mot de 
passe, c’est la fonction hash_password qui a été utilisée avec l’algorithme BCRYPT (par défaut)
- En tant qu’utilisateur connecté, je peux ajouter une moto
- En tant qu’utilisateur connecté, je peux avoir un listing de toutes les motos
- En tant qu’utilisateur connecté, je peux voir le détail d’une moto 
- En tant qu’utilisateur connecté, je peux supprimer une moto 
- En tant qu’utilisateur connecté, j’ai accès à un menu qui affiche un tri des motos en fonction de leur type (Enduro, 
Custom, Sportive, Roadster).
