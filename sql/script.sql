CREATE DATABASE SitePromenade;

CREATE USER "adminPromenade"@"localhost" IDENTIFIED BY "Pr0men@de";
GRANT ALL PRIVILEGES ON SitePromenade.* TO "adminPromenade"@"localhost";
FLUSH PRIVILEGES;

USE SitePromenade;

CREATE TABLE Promenade(
    ID INT(100) PRIMARY KEY AUTO_INCREMENT,
    titre varchar(255),
    auteur varchar(255),
    pays varchar(255),
    ville varchar(255),
    codePostal varchar(255),
    depart varchar(255),
    arrivee varchar(255),
    descr blob,
    photo varchar(255)
);

INSERT INTO Promenade VALUES(
    null,
    "L'étang de Cessy",
    "viagex",
    "France",
    "Cessy",
    "01170",
    "parking de l'étang",
    "parking de l'étang",
    "Promenade et lieu de pic-nique destiné à toute la famille

Pour vous y rendre :

Dans Cessy, prenez la départemental 15 qui passe à côté du cimetière. Un kilomètre après la sortie du village, vous croiserez sur votre gauche la déchèterie, puis, cinq cents mètres plus loin sur votre gauche, vous trouverez un petit chemin 'chemin des Etangs' que vous emprunterez. Après quelques centaines de mètres caillouteux vous arriverez au parking de l'étang.

C'est un endroit idéal pour passer une journée paisible. Des Barbecues en pierre sont répartis tout autour de l'étang où de nombreux pêcheurs s'y adonnent à leur passe-temps favori. 

Un joli sentier ombragé encercle l'endroit. Vous pourrez y pratiquer de nombreux exercices physiques à l'aide des agrès du parcours de santé, vous adonner à l'observation des canards, poules d'eau et autres anatidés ou simplement apprécier le calme environnant.",
    "photo1.jpeg"
);

INSERT INTO Promenade VALUES(
    null,
    "Les sources de la Divonne",
    "viagex",
    "France",
    "Divonne",
    "01220",
    "mairie de Divonne",
    "mairie de Divonne",
    "Promenade cool !!!

Rendez-vous devant la mairie de Divonne. 
Le golf vous faisant face, longez le practice par sa gauche, en contrebas de la route.


Un grillage vous protège des balles aux mauvaises trajectoires. 

Vous arriverez rapidement au bâtiment du golf, traverserez le parking et prendrez tout droit le petit sentier bien indiqué par un panneau.

Les sources ont été aménagées agréablement pour devenir un lieu de flânerie et de repos.

Je vous conseille de continuer votre chemin dans le sens de la montée. vous traverserez la route pour reprendre un sentier agréable et peu fatiguant qui vous conduira au mont Mourex. (voir plus de détails sur le mont Mourex (Mussy) dans mes pages promenades)",
    "photo2.jpeg"
);