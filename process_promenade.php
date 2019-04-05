<?php
require "classes/connexion.php";

// On arrive ici suite à l'envoie du formulaire nouvelle promenade

// Pour commencer on va récupérer toutes les valeurs envoyées par le formulaire
$titre = $_POST["titre"];
$auteur = $_POST["auteur"];
$pays = $_POST["pays"];
$ville = $_POST["ville"];
$codePostal = $_POST["codePostal"];
$depart = $_POST["depart"];
$arrivee = $_POST["arrivee"];
$description = $_POST["description"];


// Ensuite on crée la connexion à la base de données
$appli = new Connexion();


// On sauvegarde la photo sur le serveur dans le dossier img
// Chaque photo aura pour nom photo-DDMMYYYYHHmmss.jpeg par exemple ; 
//  on ajoute un timestamp au nom pour le rendre unique
$suffixe = date("YmdHis");
$uploadedFileName = $_FILES["photo-promenade"]["name"];
$uploadedFile = new SplFileInfo($uploadedFileName);
$fileExtension = $uploadedFile->getExtension();
$destinationFolder = $_SERVER['DOCUMENT_ROOT']."/projets/projet-promenade/";
$destinationName = "img/photo-".$suffixe.".".$fileExtension;

if(move_uploaded_file($_FILES["photo-promenade"]["tmp_name"], $destinationFolder.$destinationName)){
    echo "<br/> fichier enregistré avec succes";
}


// On insère la promenade
// Si l'insertion s'est bien passée, on récupère l'id de la promenade
$id = $appli->insertPromenade($titre,$auteur,$pays,$ville,$codePostal,$depart,$arrivee,$description,$destinationName);


// Puis on redirige vers la page particulière de cette promenade
header('Location: promenade.php?id='.$id);
exit;

?>