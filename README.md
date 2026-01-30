# Pré-requis à l'utilisation de ces fichiers
Pour utiliser les fichiers de ce répertoire il faut avoir installé le module XAMPP sur sa machine pour pouvoir disposer au mieux de ces données (serveur local + phpmyadmin).

Dans ce répertoire il y a : 

# Authentification with PHP & CSS 
Le dossier authentification contient plusieurs fichiers liés à l'authentification d'un utilisateur sur la plateforme : 
- `registration.php` permet de gérer l'inscription d'un utilisateur.
- `config.php` permet de traiter les données liées à l’inscription (communication avec la base de données, ajout des tuples, redirection vers la page de connexion).
- `login.php` est un script de gestion de connexion, incluant la connexion avec la base de données en local ainsi que l'envoi de requêtes *SQL*.
- `accueil.php` est un script statique qui affiche la page d'accueil.
- `style.css` sert à configurer le style de ces pages.

Les fichiers `api.php` et `calendar.ics` servaient de base à implémenter la page de prise de rendez-vous mais sans succès, il faut les ignorer car ils n'apportent rien au projet.

# Calendar with HMTL, CSS & JavaScript
Le dossier authentification contient plusieurs fichiers liés à l'affichage du calendrier nécessaire à une prise de rendez-vous : 
- front-end : `index.html` affiche le calendrier dans la page d’intérêt (“Prise de rendez-vous”).
- back-end : `script.js` permet de naviguer dans le calendrier affiché (jour, mois, années).
- `style.css` sert à configurer le style de cette page.

Il faut désormais connecter le calendrier de l'encadrante avec ce calendrier pour afficher ses disponibilités, ajouter un panneau de prise de rendrez-vous avec les horaires et créer un module permettant d'envoyer un mail de confirmation via Zimbra.