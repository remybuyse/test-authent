# Pantouf'Land, secure!

## Objectifs
- Un peu de révisions sur le responsive avec [Bootstrap](http://getbootstrap.com/).
- Un peu plus de fonctionnalités pour nos clients connectés: créer une page "Mon Compte"

## Instructions
1. Un peu de joli:  
  - inclure les fichiers (css) de Bootstrap
  - ajouter des classes qui conviennent pour améliorer le rendu responsive de notre boutique.
    - la largeur de la partie centrale de la page est limitée (container non fluide)
	- le menu est une nav
	- les éléments de la liste de produits s'affichent par 4 sur les très grands écrans, 3 sur les moyens et grands écrans, 2 sur les petits écrans
	- les formulaires peuvent aussi être mis en forme.

2. Un peu de fonctionnel:  
  - voir les instructions dans le fichier account.php

## Bonus
Créer un bouton "valider ma commande" qui s'affiche, si l'utilisateur est identifié, sur la page panier.
Ce bouton:  
- enregistre la commande en base de données (il faut créer le panier dans la BD, et insérer chaque ligne!)
- vide le panier en cours
- affiche la page "Mon Compte"
