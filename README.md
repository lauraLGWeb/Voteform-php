Description

Lien : https://lauralgweb.github.io/Voteform-php/

Ce projet est un exercice de formation permettant de créer un sondage en ligne. L’objectif est de pratiquer la gestion des formulaires, des cookies et le contrôle d’un vote unique.

Fonctionnalités

L’utilisateur peut voter pour une seule option.

Deux cookies sont utilisés :

Vérifier si un vote a déjà été effectué.

Enregistrer le choix de l’utilisateur.

La durée de validité des cookies est de 24h (86 400 secondes).

Si l’utilisateur a déjà voté, le vote est bloqué et son choix précédent est rappelé.

Si c’est le premier vote, un message de confirmation est affiché.

Technologies

PHP

HTML

(Optionnel : CSS pour le style) 

Installation

Cloner le dépôt :

git clone https://github.com/lauraLGWeb/Voteform-php.git


Placer le projet dans votre serveur local (ex : MAMP, XAMPP).

Accéder à vote.php dans le navigateur.

Utilisation

Sélectionner une option et cliquer sur “Voter”.

Après avoir voté, le formulaire est désactivé et un message indique votre vote.

Objectif pédagogique

Apprendre à manipuler les cookies en PHP.

Contrôler l’accès à un formulaire selon les conditions (vote unique).

Comprendre le flux POST → gestion côté serveur → retour utilisateur.
