Premier projet en autodidacte sur Symfony.

Ce projet consiste à recréer une application web type AirBnB en utilisant et en découvrant Symfony.

Je m'aide dans la réalisation de ce projet d'une formation vidéo qui m'aide à découvrir les vastes fonctionnalitées de Symfony.

J'ai, à ce jour (25/03/21) approfondi ma compréhension du design pattern MVC, utilisé le langage de templating TWIG,
les controllers sous symfony en utilisant les annotations pour gérer les routes. J'ai aussi eu l'occasion de voir la gestion de roles et de sessions,
j'ai appris à les authentifications sur mon site grace au composant de sécurité de symfony et j'ai eu l'occasion de modifier le fichier security.yaml.

J'ai eu l'occasion aussi de découvrir l'ORM Doctrine et donc la gestion des entités et de leur cycle de vie.

Le projet est encore incomplet mais vous pouvez déjà y jeter un coup d'oeil.
Lorsque ce projet sera completé je le déploierais en ligne en m'aidant d'Heroku.

Pour l'heure, si vous souhaitez voir à quoi ressemble l'application en fonctionnement, récupérez les fichiers ensuite rendez-vous dans le projet avec l'invite de commande
et pour récupérer toutes les dépendances éxécutez:
php composer.phar install 
puis
php composer.phar update

Ensuite configurez une base de données dans le fichier .env, et utiliser php/console doctrine:migrations:diff puis doctrine:migrations:migrate pour remplir la bdd
faites enfin symfony server:start pour lancer le serveur local !

Merci de votre visite !
