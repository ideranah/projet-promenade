<?php

require "../classes/connexion.php";

$appli = new Connexion();
$promenades = $appli->getAllPromenades();

var_dump($promenades);

foreach($promenades as $p){
    echo "Nouvelle promenade: <br/>";
    echo $p->getId()."<br/>";
    echo $p->getPhoto()."<br/>";
}

?>