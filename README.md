# Mastermind

Une combinaison de 4 couleurs, parmi 6, est créée de manière aléatoire.
Une couleur ne peut apparaitre qu`une seule fois dans une combinaison.

Le but est de trouver la bonne combinaison.

Chaque essai informe le joueur des informations suivantes :

* Si la couleur est placé au bon endroit ;
* Si la couleur n'est pas placé au bon endroit ;
* Si la couleur ne fait pas parti de la combinaison ;

### Exemple

La combinaison générée aléatoirement est : jaune, rouge, bleu, blanc.

Le joueur doit choisir entre les 6 couleurs existantes, la couleur du premier élément de la combinaison :

* Il choisit vert, le jeu indique "vert ne fait pas partie de la combinaison"
* Il choisit rouge, le jeu indique "rouge n'est pas placé au bon endroit"
* Il choisit jaune, le jeu indique "jaune est placé au bon endroit"

Le joueur doit maintenant choisir entre les 5 couleurs restantes, la couleur du second élément de la combinaison...

## Travail à réaliser

1. Prenez connaissance du code existant qui permet de générer la combinaison et autorise le joueur à choisir entre les 6 couleurs ;
2. Gérer les combinaisons
    * La variable de session `secret_combination` doit contenir la combinaison généré ;
    * Faites en sorte qu'une combinaison soit créée si la variable de session `secret_combination` n`existe pas ou si le bouton "Rejouer" est cliqué ;
    * Si une nouvelle combinaison est créée, initialiser la nouvelle variable session `player_combination` avec un tableau vide ;
3. Lorsque le joueur choisi une couleur :
    * Si la position de la couleur est la bonne, empiler celle-ci à la variable de session `player_combination` ;
    * Suivant le cas, afficher le message adéquat ;
    * Le score du joueur doit être incrémenté de 1 ;
    * Si le joueur a trouvé la combinaison des 4 couleurs, lui afficher un message de félicitation et, le cas échéant
      mettre à jour le meilleur score ;
5. Afficher au joueur sa combinaison contenue dans la variable de session `player_combination` ;
